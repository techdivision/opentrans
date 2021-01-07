<?php

namespace Naugrim\OpenTrans\Nodes\Party;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Account implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("HOLDER")
     *
     * @var string
     */
    protected $holder;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BANK_ACCOUNT")
     *
     * @var string
     */
    protected $bankAccount;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BANK_CODE")
     *
     * @var string
     */
    protected $bankCode;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BANK_NAME")
     *
     * @var string
     */
    protected $bankName;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BANK_COUNTRY")
     *
     * @var string
     */
    protected $bankCountry;

    /**
     * @return string
     */
    public function getHolder(): string
    {
        return $this->holder;
    }

    /**
     * @param string $holder
     */
    public function setHolder(string $holder): void
    {
        $this->holder = $holder;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     */
    public function setBankAccount(string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string
     */
    public function getBankCode(): string
    {
        return $this->bankCode;
    }

    /**
     * @param string $bankCode
     */
    public function setBankCode(string $bankCode): void
    {
        $this->bankCode = $bankCode;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     */
    public function setBankName(string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * @return string
     */
    public function getBankCountry(): string
    {
        return $this->bankCountry;
    }

    /**
     * @param string $bankCountry
     */
    public function setBankCountry(string $bankCountry): void
    {
        $this->bankCountry = $bankCountry;
    }
}
