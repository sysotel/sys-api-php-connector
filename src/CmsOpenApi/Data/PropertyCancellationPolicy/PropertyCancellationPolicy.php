<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyApplicableDates;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyDefaultRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationPolicyExample;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common\CancellationTimelineItem;

class PropertyCancellationPolicy extends Data
{
    /**
     * @param string $id
     * @param int $propertyId
     * @param string|null $name
     * @param CancellationPolicyDefaultRule|null $defaultRule
     * @param CancellationPolicyApplicableDates|null $applicableDates
     * @param string|null $status
     * @param array|null $description
     * @param bool|null $isNonRefundable
     * @param bool|null $isFreeCancellationAvailable
     * @param string|null $freeCancellationDescription
     * @param string|null $createdAt
     * @param CancellationPolicyExample|null $example
     * @param DataCollection<CancellationTimelineItem>|null $timeline
     */
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
        #[DataCollectionOf(CancellationTimelineItem::class)]
        public ?DataCollection                    $timeline = null,

    )
    {
    }
}

