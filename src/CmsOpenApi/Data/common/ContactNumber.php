<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class ContactNumber extends Data
{
    public function __construct(
        public string $countryCode,
        public string $number,
        public string $value,
    )
    {
    }
}
