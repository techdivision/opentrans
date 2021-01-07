<?php

namespace Naugrim\OpenTrans\Nodes;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Address;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\Mime;
use Naugrim\OpenTrans\Nodes\Party\Account;

class Party implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:PARTY_ID")
     *
     * @var string
     */
    protected $id;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Party\Account")
     * @Serializer\SerializedName("ACCOUNT")
     *
     * @var Account
     */
    protected $account;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PARTY_ROLE")
     *
     * @var string
     */
    protected $role;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Address")
     * @Serializer\SerializedName("ADDRESS")
     *
     * @var Address
     */
    protected $address;

    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("MIME_INFO")
     * @Serializer\Type("array<Naugrim\BMEcat\Nodes\Mime>")
     * @Serializer\XmlList( entry="MIME")
     *
     * @var Mime[]
     */
    protected $mimes = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }

    /**
     * @param Account $account
     * @return Party
     */
    public function setAccount(Account $account): Party
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return Party
     */
    public function setRole(string $role): Party
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @param Address $address
     * @return Party
     */
    public function setAddress(Address $address): Party
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Mime[] $mimes
     * @return Party
     */
    public function setMimes(array $mimes): Party
    {
        $this->mimes = $mimes;
        return $this;
    }

    /**
     * @return Mime[]
     */
    public function getMimes(): array
    {
        return $this->mimes;
    }
}
