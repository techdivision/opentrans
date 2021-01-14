<?php

namespace Naugrim\OpenTrans\Nodes\Party;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contact\Details;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\Crypto\PublicKey;
use Naugrim\BMEcat\Nodes\Fax;
use Naugrim\BMEcat\Nodes\Phone;

class Address implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:NAME")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:NAME2")
     *
     * @var string
     */
    protected $name2;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:NAME3")
     *
     * @var string
     */
    protected $name3;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:DEPARTMENT")
     *
     * @var string
     */
    protected $department;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Contact\Details")
     * @Serializer\SerializedName("CONTACT_DETAILS")
     *
     * @var Details
     */
    protected $contactDetails;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:STREET")
     *
     * @var string
     */
    protected $street;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:ZIP")
     *
     * @var string
     */
    protected $zip;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:BOXNO")
     *
     * @var string
     */
    protected $boxno;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:ZIPBOX")
     *
     * @var string
     */
    protected $zipbox;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:CITY")
     *
     * @var string
     */
    protected $city;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:COUNTRY")
     *
     * @var string
     */
    protected $country;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:COUNTRY_CODED")
     *
     * @var string
     */
    protected $countryCoded;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:VAT_ID")
     *
     * @var string
     */
    protected $vatId;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Phone")
     * @Serializer\SerializedName("bme:PHONE")
     *
     * @var Phone
     */
    protected $phone;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Fax")
     * @Serializer\SerializedName("bme:FAX")
     *
     * @var Fax
     */
    protected $fax;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:EMAIL")
     *
     * @var string
     */
    protected $email;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Crypto\PublicKey")
     * @Serializer\SerializedName("bme:PUBLIC_KEY")
     *
     * @var PublicKey
     */
    protected $publicKey;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:URL")
     *
     * @var string
     */
    protected $url;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:ADDRESS_REMARKS")
     *
     * @var string
     */
    protected $addressRemarks;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Address
     */
    public function setName(string $name): Address
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName2(): string
    {
        return $this->name2;
    }

    /**
     * @param string $name2
     * @return Address
     */
    public function setName2(string $name2): Address
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * @return string
     */
    public function getName3(): string
    {
        return $this->name3;
    }

    /**
     * @param string $name3
     * @return Address
     */
    public function setName3(string $name3): Address
    {
        $this->name3 = $name3;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return Address
     */
    public function setDepartment(string $department): Address
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return Details
     */
    public function getContactDetails(): Details
    {
        return $this->contactDetails;
    }

    /**
     * @param Details $contactDetails
     * @return Address
     */
    public function setContactDetails(Details $contactDetails): Address
    {
        $this->contactDetails = $contactDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return Address
     */
    public function setZip(string $zip): Address
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoxno(): string
    {
        return $this->boxno;
    }

    /**
     * @param string $boxno
     * @return Address
     */
    public function setBoxno(string $boxno): Address
    {
        $this->boxno = $boxno;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipbox(): string
    {
        return $this->zipbox;
    }

    /**
     * @param string $zipbox
     * @return Address
     */
    public function setZipbox(string $zipbox): Address
    {
        $this->zipbox = $zipbox;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCoded(): string
    {
        return $this->countryCoded;
    }

    /**
     * @param string $countryCoded
     * @return Address
     */
    public function setCountryCoded(string $countryCoded): Address
    {
        $this->countryCoded = $countryCoded;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }

    /**
     * @param string $vatId
     * @return Address
     */
    public function setVatId(string $vatId): Address
    {
        $this->vatId = $vatId;
        return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone(): Phone
    {
        return $this->phone;
    }

    /**
     * @param Phone $phone
     * @return Address
     */
    public function setPhone(Phone $phone): Address
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return Fax
     */
    public function getFax(): Fax
    {
        return $this->fax;
    }

    /**
     * @param Fax $fax
     * @return Address
     */
    public function setFax(Fax $fax): Address
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Address
     */
    public function setEmail(string $email): Address
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return PublicKey
     */
    public function getPublicKey(): PublicKey
    {
        return $this->publicKey;
    }

    /**
     * @param PublicKey $publicKey
     * @return Address
     */
    public function setPublicKey(PublicKey $publicKey): Address
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Address
     */
    public function setUrl(string $url): Address
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressRemarks(): string
    {
        return $this->addressRemarks;
    }

    /**
     * @param string $addressRemarks
     * @return Address
     */
    public function setAddressRemarks(string $addressRemarks): Address
    {
        $this->addressRemarks = $addressRemarks;
        return $this;
    }
}
