<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyApplicableDates;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyDefaultRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyExample;

class PropertyCancellationPolicy extends Data
{
    public function __construct(
        public string                             $id,
        public int                                $propertyId,
        public ?string                            $name = null,
        public ?CancellationPolicyDefaultRule     $defaultRule = null,
        public ?CancellationPolicyApplicableDates $applicableDates = null,
        public ?string                            $status = null,
        public ?array                             $description = [],
        public ?bool                              $isNonRefundable = null,
        public ?bool                              $isFreeCancellationAvailable = null,
        public ?string                            $freeCancellationDescription = null,
        public ?string                            $createdAt = null,
        public ?CancellationPolicyExample         $example = null
    )
    {
    }
}

