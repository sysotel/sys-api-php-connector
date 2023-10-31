<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class LocationReference extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        public string $categorySlug,
        public string $type,
    )
    {
    }
}
