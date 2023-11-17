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
        public ?CancellationPolicyDefaultRule     $defaultRule,
        public ?CancellationPolicyApplicableDates $applicableDates,
        public ?string                            $status,
        public  ?CancellationPolicyExample $example = null

    )
    {
    }
}
