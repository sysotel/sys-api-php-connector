<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Data;

class PromotionOfferDiscount extends Data
{
    public function __construct(
        public ?string $type = null,
        public ?float  $value = null,
    )
    {
    }
}
