<?php


namespace Naugrim\OpenTrans\Nodes\Order;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Payment implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("DEBIT")
     *
     * @var bool
     */
    protected $debit;

    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("CHECK")
     *
     * @var bool
     */
    protected $check;

    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("CASH")
     *
     * @var bool
     */
    protected $cash;

    /**
     * @return bool
     */
    public function getDebit(): bool
    {
        return $this->debit;
    }

    /**
     * @param bool $debit
     * @return $this
     */
    public function setDebit(bool $debit): Payment
    {
        $this->debit = $debit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCheck(): bool
    {
        return $this->check;
    }

    /**
     * @param bool $check
     * @return $this
     */
    public function setCheck(bool $check): Payment
    {
        $this->check = $check;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCash(): bool
    {
        return $this->cash;
    }

    /**
     * @param bool $cash
     * @return $this
     */
    public function setCash(bool $cash): Payment
    {
        $this->cash = $cash;
        return $this;
    }
}
