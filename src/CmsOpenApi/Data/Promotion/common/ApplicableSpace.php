<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ApplicableSpace extends Data
{
    public function __construct(
        public int $spaceId,

        #[DataCollectionOf(ApplicableProduct::class)]
        public ?DataCollection $applicableProducts = null,

        public ?bool $applicableOnAllProducts = null,
    )
    {
    }
}
