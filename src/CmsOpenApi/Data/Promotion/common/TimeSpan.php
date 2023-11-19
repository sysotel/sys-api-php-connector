<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Data;

class TimeSpan extends Data
{
    public function __construct(
        public ?string $start = null,
        public ?string $end = null,
    )
    {
    }
}
