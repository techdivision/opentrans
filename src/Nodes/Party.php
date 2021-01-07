<?php

namespace Naugrim\OpenTrans\Nodes;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\Party as BmeParty;
use Naugrim\OpenTrans\Nodes\Party\Account;

class Party extends BmeParty implements NodeInterface
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
}
