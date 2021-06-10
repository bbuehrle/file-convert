<?php

namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * AberdeenAmericanNews
 *
 * @ORM\Table(name="aberdeen_american_news",
 *     indexes={
 *      @ORM\Index(name="PHONE", columns={"phone"}),
 *      @ORM\Index(name="acctnbr", columns={"acctnbr"}),
 *      @ORM\Index(name="x_load_pull", columns={"segment", "subsegment", "actiondate"})
 *     })
 * @ORM\Entity
 */
class AberdeenAmericanNews
{
    /**
     * @var int
     *
     * @ORM\Column(name="PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=true, options={"default"="0000000000"})
     */
    private $phone = '0000000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pad", type="string", length=45, nullable=true)
     */
    private $pad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=45, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hsenbr", type="string", length=45, nullable=true)
     */
    private $hsenbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="predir", type="string", length=45, nullable=true)
     */
    private $predir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=45, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="strtype", type="string", length=45, nullable=true)
     */
    private $strtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postdir", type="string", length=45, nullable=true)
     */
    private $postdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dwltype", type="string", length=45, nullable=true)
     */
    private $dwltype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aptnbr", type="string", length=45, nullable=true)
     */
    private $aptnbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=2, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zipcode", type="string", length=5, nullable=true)
     */
    private $zipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plus4", type="string", length=45, nullable=true)
     */
    private $plus4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fod", type="string", length=45, nullable=true)
     */
    private $fod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="term", type="string", length=45, nullable=true)
     */
    private $term;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ttlcost", type="string", length=45, nullable=true)
     */
    private $ttlcost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fstdate", type="string", length=45, nullable=true)
     */
    private $fstdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="piatype", type="string", length=45, nullable=true)
     */
    private $piatype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cccdacctnb", type="string", length=45, nullable=true)
     */
    private $cccdacctnb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccv", type="string", length=45, nullable=true)
     */
    private $ccv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rtenbr", type="string", length=45, nullable=true)
     */
    private $rtenbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chknbr", type="string", length=45, nullable=true)
     */
    private $chknbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expdatecc", type="string", length=45, nullable=true)
     */
    private $expdatecc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nameoncard", type="string", length=45, nullable=true)
     */
    private $nameoncard;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verified", type="string", length=45, nullable=true)
     */
    private $verified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailadd", type="string", length=45, nullable=true)
     */
    private $mailadd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promocode", type="string", length=45, nullable=true)
     */
    private $promocode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acctnbr", type="string", length=45, nullable=true)
     */
    private $acctnbr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopdate", type="string", length=45, nullable=true)
     */
    private $stopdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopreason", type="string", length=45, nullable=true)
     */
    private $stopreason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prevfod", type="string", length=45, nullable=true)
     */
    private $prevfod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prevterm", type="string", length=45, nullable=true)
     */
    private $prevterm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balancedue", type="string", length=45, nullable=true)
     */
    private $balancedue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailaddy", type="string", length=45, nullable=true)
     */
    private $emailaddy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delins", type="string", length=45, nullable=true)
     */
    private $delins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments1", type="string", length=45, nullable=true)
     */
    private $comments1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments2", type="string", length=45, nullable=true)
     */
    private $comments2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balwaived", type="string", length=45, nullable=true)
     */
    private $balwaived;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actcmp", type="string", length=45, nullable=true)
     */
    private $actcmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="holduntil", type="string", length=45, nullable=true)
     */
    private $holduntil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=45, nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="segment", type="string", length=45, nullable=true)
     */
    private $segment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subsegment", type="string", length=45, nullable=true)
     */
    private $subsegment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="actiondate", type="date", nullable=true)
     */
    private $actiondate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phonetype", type="string", length=45, nullable=true)
     */
    private $phonetype;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="loaddate", type="datetime", nullable=true)
     */
    private $loaddate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updatedate", type="datetime", nullable=true)
     */
    private $updatedate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_name", type="string", length=255, nullable=true)
     */
    private $fullName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_address", type="string", length=255, nullable=true)
     */
    private $fullAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cname", type="string", length=1024, nullable=true)
     */
    private $cname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caddress", type="string", length=1024, nullable=true)
     */
    private $caddress;


}
