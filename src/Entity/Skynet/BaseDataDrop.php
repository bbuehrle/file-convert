<?php

namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataDrop
 *
 * @ORM\Table(indexes={
 *      @ORM\Index(name="phone_2", columns={"phone", "dropdate"}),
 *      @ORM\Index(name="index_db_scrub", columns={"phone", "reason", "dropdate"})
 *     })
 * @ORM\MappedSuperclass
 */
abstract class BaseDataDrop extends BaseDialerFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=true)
     */
    protected $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_name", type="string", length=255, nullable=true)
     */
    protected $fullName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_address", type="string", length=255, nullable=true)
     */
    protected $fullAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="segment", type="string", length=45, nullable=true)
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

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=45, nullable=false)
     */
    protected $reason;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dropdate", type="datetime", nullable=true)
     */
    protected $dropDate;
}
