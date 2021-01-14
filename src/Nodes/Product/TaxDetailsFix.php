<?php

namespace Naugrim\OpenTrans\Nodes\Product;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class TaxDetailsFix implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bme:TAX_TYPE")
     *
     * @var string
     */
    protected $type;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("bme:TAX")
     *
     * @var float
     */
    protected $tax;

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return $this
     */
    public function setTax(float $tax): TaxDetailsFix
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): TaxDetailsFix
    {
        $this->type = $type;
        return $this;
    }
}
