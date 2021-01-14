<?php

namespace Naugrim\OpenTrans\Nodes\Product;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class PriceFix implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("bme:PRICE_AMOUNT")
     *
     * @var float
     */
    protected $amount;

    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("bme:PRICE_FLAG")
     *
     * @var bool
     */
    protected $flag;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Product\TaxDetailsFix")
     * @Serializer\SerializedName("TAX_DETAILS_FIX")
     *
     * @var TaxDetailsFix
     */
    protected $taxDetailsFix;


    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Product\PriceBaseFix")
     * @Serializer\SerializedName("PRICE_BASE_FIX")
     *
     * @var PriceBaseFix
     */
    protected $priceBaseFix;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return PriceFix
     */
    public function setAmount(float $amount): PriceFix
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFlag(): bool
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     * @return PriceFix
     */
    public function setFlag(bool $flag): PriceFix
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * @return TaxDetailsFix
     */
    public function getTaxDetailsFix(): TaxDetailsFix
    {
        return $this->taxDetailsFix;
    }

    /**
     * @param TaxDetailsFix $taxDetailsFix
     * @return PriceFix
     */
    public function setTaxDetailsFix(TaxDetailsFix $taxDetailsFix): PriceFix
    {
        $this->taxDetailsFix = $taxDetailsFix;
        return $this;
    }

    /**
     * @return PriceBaseFix
     */
    public function getPriceBaseFix(): PriceBaseFix
    {
        return $this->priceBaseFix;
    }

    /**
     * @param PriceBaseFix $priceBaseFix
     * @return $this
     */
    public function setPriceBaseFix(PriceBaseFix $priceBaseFix): PriceFix
    {
        $this->priceBaseFix = $priceBaseFix;
        return $this;
    }
}
