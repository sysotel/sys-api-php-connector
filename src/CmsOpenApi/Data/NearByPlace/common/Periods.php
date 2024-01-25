<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Data;

class Periods extends Data
{
    /**
     * @param string|null $day
     * @param string|null $openingTime
     * @param string|null $closingTime
     */
    public function __construct(
        public ?string   $day,
        public ?string   $openingTime,
        public ?string   $closingTime,

    )
    {
    }


}


