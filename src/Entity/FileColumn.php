<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FileColumnRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FileColumnRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type")
 */
abstract class FileColumn
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @Gedmo\SortableGroup()
     * @ORM\ManyToOne(targetEntity=FileSpecification::class, inversedBy="columns")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?FileSpecification $specification;

    /**
     * @Gedmo\SortablePosition()
     * @ORM\Column(type="integer")
     */
    protected ?int $position;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $name = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $start;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $width;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $isSkipped = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecification(): ?FileSpecification
    {
        return $this->specification;
    }

    public function setSpecification(?FileSpecification $specification): self
    {
        $this->specification = $specification;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
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

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setStart(?int $start): FileColumn
    {
        $this->start = $start;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): FileColumn
    {
        $this->width = $width;

        return $this;
    }

    public function getIsSkipped(): ?bool
    {
        return $this->isSkipped;
    }

    public function setIsSkipped(bool $isSkipped): self
    {
        $this->isSkipped = $isSkipped;

        return $this;
    }

    abstract function cast(?string $data);
}
