<?php

namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataDrop
 *
 * @ORM\Table(name="data_drop",
 *     indexes={
 *      @ORM\Index(name="phone_2", columns={"phone", "dropdate"}),
 *      @ORM\Index(name="index_db_scrub", columns={"phone", "reason", "dropdate"})
 *     })
 * @ORM\Entity
 */
class DataDrop
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
     * @ORM\Column(name="firstname", type="string", length=45, nullable=true)
     */
    protected $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    protected $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_address", type="string", length=255, nullable=true)
     */
    protected $fullAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hsenbr", type="string", length=45, nullable=true)
     */
    protected $hsenbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="predir", type="string", length=45, nullable=true)
     */
    protected $predir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=45, nullable=true)
     */
    protected $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="strtype", type="string", length=45, nullable=true)
     */
    protected $strtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postdir", type="string", length=45, nullable=true)
     */
    protected $postdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dwltype", type="string", length=45, nullable=true)
     */
    protected $dwltype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aptnbr", type="string", length=45, nullable=true)
     */
    protected $aptnbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=true)
     */
    protected $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=45, nullable=true)
     */
    protected $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zipcode", type="string", length=45, nullable=true)
     */
    protected $zipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plus4", type="string", length=45, nullable=true)
     */
    protected $plus4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fod", type="string", length=45, nullable=true)
     */
    protected $fod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="term", type="string", length=45, nullable=true)
     */
    protected $term;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ttlcost", type="string", length=45, nullable=true)
     */
    protected $ttlcost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fstdate", type="string", length=45, nullable=true)
     */
    protected $fstdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="piatype", type="string", length=45, nullable=true)
     */
    protected $piatype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cccdacctnb", type="string", length=45, nullable=true)
     */
    protected $cccdacctnb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccv", type="string", length=45, nullable=true)
     */
    protected $ccv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rtenbr", type="string", length=45, nullable=true)
     */
    protected $rtenbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chknbr", type="string", length=45, nullable=true)
     */
    protected $chknbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expdatecc", type="string", length=45, nullable=true)
     */
    protected $expdatecc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nameoncard", type="string", length=45, nullable=true)
     */
    protected $nameoncard;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verified", type="string", length=45, nullable=true)
     */
    protected $verified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailadd", type="string", length=45, nullable=true)
     */
    protected $mailadd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promocode", type="string", length=45, nullable=true)
     */
    protected $promocode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acctnbr", type="string", length=45, nullable=true)
     */
    protected $acctnbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopdate", type="string", length=45, nullable=true)
     */
    protected $stopdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopreason", type="string", length=45, nullable=true)
     */
    protected $stopreason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prevfod", type="string", length=45, nullable=true)
     */
    protected $prevfod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prevterm", type="string", length=45, nullable=true)
     */
    protected $prevterm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balancedue", type="string", length=45, nullable=true)
     */
    protected $balancedue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailaddy", type="string", length=45, nullable=true)
     */
    protected $emailaddy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delins", type="string", length=45, nullable=true)
     */
    protected $delins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments1", type="string", length=45, nullable=true)
     */
    protected $comments1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments2", type="string", length=45, nullable=true)
     */
    protected $comments2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balwaived", type="string", length=45, nullable=true)
     */
    protected $balwaived;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actcmp", type="string", length=45, nullable=true)
     */
    protected $actcmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="holduntil", type="string", length=45, nullable=true)
     */
    protected $holduntil;

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
    protected $subsegment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="actiondate", type="date", nullable=true)
     */
    protected $actiondate;

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
    protected $loaddate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedate", type="date", nullable=true)
     */
    protected $updatedate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fileout", type="date", nullable=true)
     */
    protected $fileout;

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
    protected $dropdate;


}
