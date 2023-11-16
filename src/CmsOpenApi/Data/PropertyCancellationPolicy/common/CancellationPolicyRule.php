<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Data;

class CancellationPolicyRule extends Data
{
    public function __construct(
        public ?int $startInterval,
        public ?int $endInterval,
        public ?Penalty $penalty,
    )
    {
    }
}
