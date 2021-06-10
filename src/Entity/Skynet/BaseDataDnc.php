<?php

namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataDnc
 *
 * @ORM\Table(indexes={
 *      @ORM\Index(name="full_address", columns={"full_address"}),
 *      @ORM\Index(name="full_name", columns={"full_name"})
 *     })
 * @ORM\MappedSuperclass
 */
abstract class BaseDataDnc extends BaseDialerFields
{
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $fullName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="full_address", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $fullAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $segment = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subsegment", type="string", length=45, nullable=true)
     */
    protected $subSegment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rec_owner", type="string", length=45, nullable=true)
     */
    protected $recOwner;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="loaddate", type="date", nullable=true)
     */
    protected $loadDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedate", type="date", nullable=true)
     */
    protected $updateDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fileout", type="date", nullable=true)
     */
    protected $fileOut;
}
