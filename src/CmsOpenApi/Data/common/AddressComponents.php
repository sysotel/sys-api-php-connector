<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class AddressComponents extends Data
{
    public function __construct(
        public ?string $longName = null,
        public ?string $shortName = null,
        public ?array $types = null,

    )
    {
    }
}
