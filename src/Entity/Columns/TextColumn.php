<?php

namespace App\Entity\Columns;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\FileColumn;
use App\Repository\Columns\TextColumnRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TextColumnRepository::class)
 */
class TextColumn extends FileColumn
{
    function cast(?string $data): ?string
    {
        if (empty($data)) {
            return null;
        }

        return (string) $data;
    }
}
