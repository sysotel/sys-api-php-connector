<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyApplicableDates;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyDefaultRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyExample;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\Timeline;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\Space;

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
        public ?CancellationPolicyExample         $example = null,

        #[DataCollectionOf(Timeline::class)]
        public ?Timeline     $timeline = null,

    )
    {
    }
}

