<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class CancellationPolicyApplicableDates extends Data
{
    public function __construct(
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d\TH:i')]
        public ?Carbon $startDate,

        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d\TH:i')]
        public ?Carbon $endDate,

    )
    {
    }
}
