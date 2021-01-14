<?php


namespace Naugrim\OpenTrans\Nodes\Product;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\Concerns\HasTypeAttribute;;

class Flag implements NodeInterface
{
    use HasTypeAttribute;
}
