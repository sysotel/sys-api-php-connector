<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\AgePolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckInPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckOutPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\PropertyRules;

class CancellationPolicyExample extends Data
{
    public function __construct(
        public ?string $checkInTime,
        public ?array $description = null,
        public ?bool $isNonRefundable = null,
        public ?bool $iFreeCancellationAvailable = null,

    )
    {
    }
}
