<?php

namespace Naugrim\OpenTrans\Nodes\Product;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class PriceBaseFix implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("PRICE_UNIT_VALUE")
     *
     * @var float
     */
    protected $unitValue;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:PRICE_UNIT")
     *
     * @var string
     */
    protected $unit;

    /**
     * @return float
     */
    public function getUnitValue(): float
    {
        return $this->unitValue;
    }

    /**
     * @param $unitValue
     * @return $this
     */
    public function setUnitValue(float $unitValue): PriceBaseFix
    {
        $this->unitValue = $unitValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return $this
     */
    public function setUnit(string $unit): PriceBaseFix
    {
        $this->unit = $unit;
        return $this;
    }
}
