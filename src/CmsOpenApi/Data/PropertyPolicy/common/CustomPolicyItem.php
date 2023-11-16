<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CustomPolicyItem extends Data
{
    /**
     * @param string|null $showcaseType
     * @param string|null $details
     */
    public function __construct(
        public ?string $showcaseType,
        public ?string $details = null,

    )
    {
    }
}
