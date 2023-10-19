<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Property\common;

use Spatie\LaravelData\Data;

class PropertyLabels extends Data
{
    public function __construct(
        public string $propertyLabel,
        public string $spaceLabel,
        public string $productLabel,
    )
    {
    }
}
