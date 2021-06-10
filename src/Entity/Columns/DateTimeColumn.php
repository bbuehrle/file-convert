<?php

namespace App\Entity\Columns;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\Columns\DateTimeColumnRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DateTimeColumnRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class DateTimeColumn extends DateColumn
{
    public const TIME_ORDERS = [
        'HMS' => 'Hour Minute Second',
        'HM' => 'Hour Minute',
        'HSM' => 'Hour Second Minute',
        'MHS' => 'Minute Hour Second',
        'MSH' => 'Minute Second Hour',
        'SHM' => 'Second Hour Minute',
        'SMH' => 'Second Minute Hour',
    ];

    private const TIME_FORMATS = [
        'hour' => [
            12 => [
                true => 'h',
                false => 'g',
            ],
            24 => [
                true => 'H',
                false => 'G'
            ]
        ],
    ];

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private ?string $timeOrder = null;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $dateTimeSeparator = null;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $timeDelimiter = ':';

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $is12HourFormat = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $hasMeridian = false;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $meridianSeparator = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $hasLeadingZerosInHour = null;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private ?string $timeFormat = null;

    public function getTimeOrder(): ?string
    {
        return $this->timeOrder;
    }

    public function setTimeOrder(?string $timeOrder): self
    {
        $this->timeOrder = $timeOrder;

        return $this;
    }

    public function getDateTimeSeparator(): ?string
    {
        return $this->dateTimeSeparator;
    }

    public function setDateTimeSeparator(?string $dateTimeSeparator): self
    {
        $this->dateTimeSeparator = $dateTimeSeparator;

        return $this;
    }

    public function getTimeDelimiter(): ?string
    {
        return $this->timeDelimiter;
    }

    public function setTimeDelimiter(?string $timeDelimiter): self
    {
        $this->timeDelimiter = $timeDelimiter;

        return $this;
    }

    public function getIs12HourFormat(): ?bool
    {
        return $this->is12HourFormat;
    }

    public function setIs12HourFormat(?bool $is12HourFormat): self
    {
        $this->is12HourFormat = $is12HourFormat;

        return $this;
    }

    public function getHasMeridian(): ?bool
    {
        return $this->hasMeridian;
    }

    public function setHasMeridian(?bool $hasMeridian): self
    {
        $this->hasMeridian = $hasMeridian;

        return $this;
    }

    public function getMeridianSeparator(): ?string
    {
        return $this->meridianSeparator;
    }

    public function setMeridianSeparator(?string $meridianSeparator): self
    {
        $this->meridianSeparator = $meridianSeparator;

        return $this;
    }

    public function getHasLeadingZerosInHour(): ?bool
    {
        return $this->hasLeadingZerosInHour;
    }

    public function setHasLeadingZerosInHour(?bool $hasLeadingZerosInHour): self
    {
        $this->hasLeadingZerosInHour = $hasLeadingZerosInHour;

        return $this;
    }

    public function getTimeFormat(): ?string
    {
        return $this->timeFormat;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function setTimeFormat(): self
    {
        $format = [
            'H' => null,
            'M' => 'i',
            'S' => 's',
        ];


        $format['H'] = self::TIME_FORMATS['hour'][$this->getIs12HourFormat() ? 12 : 24][$this->getHasLeadingZerosInHour()];

        $timeFormat = $format[$this->getTimeOrder()[0]] .
            $this->getTimeDelimiter() .
            $format[$this->getTimeOrder()[1]];

        if (3 === mb_strlen($this->getTimeOrder())) {
            $timeFormat .= $this->getTimeDelimiter().$format[$this->getTimeOrder()[2]];
        }

        if ($this->getHasMeridian()) {
            $timeFormat .= $this->getMeridianSeparator() . 'a';
        }

        $this->timeFormat = $timeFormat;

        return $this;
    }

    public function getFormatted(): ?string
    {
        $dateFormat = parent::getDateFormat();
        $dtSeparator = $this->getDateTimeSeparator();
        $timeFormat = $this->getTimeFormat();

        if (!empty($dtSeparator) && !in_array($dtSeparator, [' ', "\t"])) {
            $dtSeparator = '\\'.$dtSeparator;
        }

        return $dateFormat . $dtSeparator . $timeFormat;
    }

    function cast(?string $data): ?\DateTimeInterface
    {
        if (empty($data)) {
            return null;
        }

        return \DateTime::createFromFormat($this->getFormatted(), $data);
    }
}
