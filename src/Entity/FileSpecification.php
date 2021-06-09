<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FileSpecificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FileSpecificationRepository::class)
 */
class FileSpecification
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $name = null;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private ?string $fieldSeparator = null;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private ?string $textSeparator = null;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $hasHeader = true;

    /**
     * @ORM\OneToMany(targetEntity=FileColumn::class, mappedBy="specification", orphanRemoval=true)
     */
    private Collection $columns;

    public function __construct()
    {
        $this->columns = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFieldSeparator(): ?string
    {
        return $this->fieldSeparator;
    }

    public function setFieldSeparator(string $fieldSeparator): self
    {
        $this->fieldSeparator = $fieldSeparator;

        return $this;
    }

    public function getTextSeparator(): ?string
    {
        return $this->textSeparator;
    }

    public function setTextSeparator(string $textSeparator): self
    {
        $this->textSeparator = $textSeparator;

        return $this;
    }

    public function getHasHeader(): ?bool
    {
        return $this->hasHeader;
    }

    public function setHasHeader(bool $hasHeader): self
    {
        $this->hasHeader = $hasHeader;

        return $this;
    }

    /**
     * @return Collection|FileColumn[]
     */
    public function getColumns(): Collection
    {
        return $this->columns;
    }

    public function addColumn(FileColumn $column): self
    {
        if (!$this->columns->contains($column)) {
            $this->columns[] = $column;
            $column->setSpecification($this);
        }

        return $this;
    }

    public function removeColumn(FileColumn $column): self
    {
        if ($this->columns->removeElement($column)) {
            // set the owning side to null (unless already changed)
            if ($column->getSpecification() === $this) {
                $column->setSpecification(null);
            }
        }

        return $this;
    }
}
