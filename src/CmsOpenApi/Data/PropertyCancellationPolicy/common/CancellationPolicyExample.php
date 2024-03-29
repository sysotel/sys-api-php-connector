<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CancellationPolicyExample extends Data
{
    /**
     * @param string|null $checkInTime
     * @param string|null $bookingTime
     * @param array|null $description
     * @param bool|null $isNonRefundable
     * @param bool|null $isFreeCancellationAvailable
     * @param string|null $freeCancellationSentence
     * @param CancellationExample|null $cancellation
     * @param DataCollection<CancellationTimelineItem>|null $timeline
     */
    public function __construct(
        public ?string                   $checkInTime,
        public ?string                   $bookingTime = null,
        public ?array                    $description = [],
        public ?bool                     $isNonRefundable = null,
        public ?bool                     $isFreeCancellationAvailable = null,
        public ?string                   $freeCancellationSentence = null,
        public ?CancellationExample      $cancellation = null,

        #[DataCollectionOf(CancellationTimelineItem::class)]
        public ?DataCollection                    $timeline = null,
    )
    {
    }
}
