<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Data;

class CancellationPolicyDefaultRule extends Data
{
    public function __construct(
        public ?string $penaltyType,
        public ?int $penaltyPercentage,
        public int $interval,
    )
    {
    }
}

