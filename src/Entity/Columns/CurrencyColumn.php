<?php

namespace App\Entity\Columns;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\FileColumn;
use App\Repository\Columns\CurrencyColumnRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CurrencyColumnRepository::class)
 */
class CurrencyColumn extends FileColumn
{
    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $marking = '$';

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $changeSeparator = '.';

    public function getMarking(): ?string
    {
        return $this->marking;
    }

    public function setMarking(?string $marking): self
    {
        $this->marking = $marking;

        return $this;
    }

    public function getChangeSeparator(): ?string
    {
        return $this->changeSeparator;
    }

    public function setChangeSeparator(?string $changeSeparator): self
    {
        $this->changeSeparator = $changeSeparator;

        return $this;
    }

    function cast(?string $data): ?float
    {
        if (empty($data)) {
            return null;
        }

        return (float) str_replace($this->getMarking(), '', $data);
    }
}
