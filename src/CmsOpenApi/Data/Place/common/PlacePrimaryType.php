<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Data;

class PlacePrimaryType extends Data
{
    /**
     * @param string|null $id
     * @param string|null $displayName
     */
    public function __construct(
        public ?string   $id,
        public ?string   $displayName,
    )
    {
    }
}


