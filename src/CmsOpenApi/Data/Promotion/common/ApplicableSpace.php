<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ApplicableSpace extends Data
{
    /**
     * @param int|null $spaceId
     * @param DataCollection<ApplicableProduct>|null $applicableProducts
     * @param bool|null $applicableOnAllProducts
     */
    public function __construct(
        public ?int $spaceId = null,

        #[DataCollectionOf(ApplicableProduct::class)]
        public ?DataCollection $applicableProducts = null,

        public ?bool $applicableOnAllProducts = null,
    )
    {
    }
}
