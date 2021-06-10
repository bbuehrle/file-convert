<?php

namespace App\Entity\Columns;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\FileColumn;
use App\Repository\Columns\IntegerColumnRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=IntegerColumnRepository::class)
 */
class IntegerColumn extends FileColumn
{
    function cast(?string $data): ?int
    {
        if (empty($data)) {
            return null;
        }

        return (int) preg_replace('/[\D]/', '', $data);
    }
}
