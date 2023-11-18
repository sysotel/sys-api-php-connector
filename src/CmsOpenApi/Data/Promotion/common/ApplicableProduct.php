<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Data;

class ApplicableProduct extends Data
{
    public function __construct(
        public int $productId,
    )
    {
    }
}
