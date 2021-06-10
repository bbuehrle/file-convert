<?php

namespace App\Entity\Columns;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\FileColumn;
use App\Repository\Columns\DateColumnRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DateColumnRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class DateColumn extends FileColumn
{
    public const DATE_ORDERS = [
        'DMY' => 'Day Month Year',
        'DYM' => 'Day Year Month',
        'MDY' => 'Month Day Year',
        'MYD' => 'Month Year Day',
        'YMD' => 'Year Month Day',
        'YDM' => 'Year Day Month',
    ];

    private const DATE_FORMATS = [
        'year' => [
            false => 'y',
            true => 'Y',
        ],
        'month' => [
            false => 'n',
            true => 'm',
            3 => 'M',
        ],
        'day' => [
            false => 'j',
            true => 'd',
        ],
    ];

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     * @Assert\NotBlank()
     */
    private ?string $dateOrder = null;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $dateDelimiter = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $isFourDigitYear = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $hasLeadingZerosInDate = null;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private ?string $dateFormat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $hasThreeLetterMonth = false;

    public function getDateOrder(): ?string
    {
        return $this->dateOrder;
    }

    public function setDateOrder(?string $dateOrder): self
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }

    public function getDateDelimiter(): ?string
    {
        return $this->dateDelimiter;
    }

    public function setDateDelimiter(?string $dateDelimiter): self
    {
        $this->dateDelimiter = $dateDelimiter;

        return $this;
    }

    public function getIsFourDigitYear(): ?bool
    {
        return $this->isFourDigitYear;
    }

    public function setIsFourDigitYear(?bool $isFourDigitYear): self
    {
        $this->isFourDigitYear = $isFourDigitYear;

        return $this;
    }

    public function getHasLeadingZerosInDate(): ?bool
    {
        return $this->hasLeadingZerosInDate;
    }

    public function setHasLeadingZerosInDate(?bool $hasLeadingZerosInDate): self
    {
        $this->hasLeadingZerosInDate = $hasLeadingZerosInDate;

        return $this;
    }

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function setDateFormat(): self
    {
        $format = [
            'Y' => null,
            'M' => null,
            'D' => null,
        ];

        $format['Y'] = self::DATE_FORMATS['year'][$this->getIsFourDigitYear()];
        $format['M'] = self::DATE_FORMATS['month'][$this->getHasLeadingZerosInDate()];
        $format['D'] = self::DATE_FORMATS['day'][$this->getHasLeadingZerosInDate()];

        if ($this->getHasThreeLetterMonth()) {
            $format['M'] = self::DATE_FORMATS['month'][3];
        }

        $this->dateFormat = $format[$this->getDateOrder()[0]] .
            $this->getDateDelimiter() .
            $format[$this->getDateOrder()[1]] .
            $this->getDateDelimiter() .
            $format[$this->getDateOrder()[2]];

        return $this;
    }

    public function getFormatted(): ?string
    {
        return $this->getDateFormat();
    }

    public function getHasThreeLetterMonth(): ?bool
    {
        return $this->hasThreeLetterMonth;
    }

    public function setHasThreeLetterMonth(?bool $hasThreeLetterMonth): self
    {
        $this->hasThreeLetterMonth = $hasThreeLetterMonth;

        return $this;
    }
}
