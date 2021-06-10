<?php

namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataDump
 *
 * @ORM\Table(indexes={
 *      @ORM\Index(name="segment", columns={"segment", "subsegment", "loaddate"})
 *     })
 * @ORM\MappedSuperclass
 */
abstract class BaseDataDump extends BaseDialerFields
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="actiondate", type="date", nullable=true, options={"default"="0000-00-00"})
     */
    protected $actionDate = '0000-00-00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phonetype", type="string", length=45, nullable=true)
     */
    protected $phoneType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="loaddate", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    protected $loadDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedate", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    protected $updateDate = '0000-00-00 00:00:00';

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
