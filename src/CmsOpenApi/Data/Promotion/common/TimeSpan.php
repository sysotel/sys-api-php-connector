<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCastable;
use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast\CarbonDateCast;

class TimeSpan extends Data
{
    public function __construct(

        #[WithCastable(CarbonDateCast::class)]
        public ?Carbon $start = null,

        #[WithCastable(CarbonDateCast::class)]
        public ?Carbon $end = null,
    )
    {
    }
}
