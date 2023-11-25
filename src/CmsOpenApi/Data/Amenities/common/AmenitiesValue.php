<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class AmenitiesValue extends Data
{
    public function __construct(
        public ?bool $flag = null,

    )
    {
    }
}
