<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyApplicableDates;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyDefaultRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyRule;

class PropertyCancellationPolicy extends Data
{
    public function __construct(
        public string                             $id,
        public int                                $propertyId,
        public ?CancellationPolicyDefaultRule     $defaultRule,
        public ?CancellationPolicyApplicableDates $applicableDates,
        public ?string                            $status,

        #[DataCollectionOf(CancellationPolicyRule::class)]
        public ?DataCollection                    $rules = null,

    )
    {
    }
}
