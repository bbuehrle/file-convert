<?php

namespace App\Entity\Columns;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\FileColumn;
use App\Repository\Columns\BooleanColumnRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BooleanColumnRepository::class)
 */
class BooleanColumn extends FileColumn
{
    function cast(?string $data): ?bool
    {
        if (empty($data)) {
            return null;
        }

        return (bool) $data;
    }
}
