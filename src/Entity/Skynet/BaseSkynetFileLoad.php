<?php

namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * AberdeenAmericanNews
 *
 * @ORM\Table(indexes={
 *      @ORM\Index(name="PHONE", columns={"phone"}),
 *      @ORM\Index(name="acctnbr", columns={"acctnbr"}),
 *      @ORM\Index(name="x_load_pull", columns={"segment", "subsegment", "actiondate"})
 *     })
 * @ORM\MappedSuperclass
 */
class BaseSkynetFileLoad extends BaseDialerFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=true, options={"default"="0000000000"})
     */
    protected $phone = '0000000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pad", type="string", length=45, nullable=true)
     */
    protected $pad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=45, nullable=true)
     */
    protected $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="segment", type="string", length=45, nullable=true)
     */
    protected $segment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subsegment", type="string", length=45, nullable=true)
     */
    protected $subSegment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phonetype", type="string", length=45, nullable=true)
     */
    protected $phoneType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="loaddate", type="datetime", nullable=true)
     */
    protected $loadDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedate", type="datetime", nullable=true)
     */
    protected $updateDate;

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
     * @ORM\Column(name="cname", type="string", length=1024, nullable=true)
     */
    protected $cName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caddress", type="string", length=1024, nullable=true)
     */
    protected $cAddress;
}
