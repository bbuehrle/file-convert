<?php


namespace App\Entity\Skynet;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass()
 */
abstract class BaseDialerFields
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=45, nullable=true)
     */
    protected $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    protected $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hsenbr", type="string", length=45, nullable=true)
     */
    protected $houseNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="predir", type="string", length=45, nullable=true)
     */
    protected $preDirection;

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
    protected $streetType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postdir", type="string", length=45, nullable=true)
     */
    protected $postDirection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dwltype", type="string", length=45, nullable=true)
     */
    protected $dwellingType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aptnbr", type="string", length=45, nullable=true)
     */
    protected $dwellingNumber;

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
    protected $zipCode;

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
    protected $totalCost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fstdate", type="string", length=45, nullable=true)
     */
    protected $futureStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="piatype", type="string", length=45, nullable=true)
     */
    protected $piaType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cccdacctnb", type="string", length=45, nullable=true)
     */
    protected $cccdAccountNumber;

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
    protected $routingNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chknbr", type="string", length=45, nullable=true)
     */
    protected $checkNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expdatecc", type="string", length=45, nullable=true)
     */
    protected $ccExpirationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nameoncard", type="string", length=45, nullable=true)
     */
    protected $nameOnCard;

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
    protected $mailingAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promocode", type="string", length=45, nullable=true)
     */
    protected $promoCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acctnbr", type="string", length=45, nullable=true)
     */
    protected $accountNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopdate", type="string", length=45, nullable=true)
     */
    protected $stopDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopreason", type="string", length=45, nullable=true)
     */
    protected $stopReason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prevfod", type="string", length=45, nullable=true)
     */
    protected $prevFod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prevterm", type="string", length=45, nullable=true)
     */
    protected $prevTerm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balancedue", type="string", length=45, nullable=true)
     */
    protected $balanceDue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailaddy", type="string", length=45, nullable=true)
     */
    protected $emailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delins", type="string", length=45, nullable=true)
     */
    protected $deliveryInstructions;

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
    protected $balanceWaived;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actcmp", type="string", length=45, nullable=true)
     */
    protected $actCmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="holduntil", type="string", length=45, nullable=true)
     */
    protected $holdUntil;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="actiondate", type="date", nullable=true)
     */
    protected $actionDate;

}
