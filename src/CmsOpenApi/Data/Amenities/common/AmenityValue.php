<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Data;

class AmenityValue extends Data
{
    public function __construct(
        public ?bool $flag = null,

    )
    {
    }
}
