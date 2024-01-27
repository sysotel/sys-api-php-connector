<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\Space;

class CancellationExample extends Data
{
    /**
     * @param string|null $cancellationDate
     * @param string|null $description
     * @param bool|null $isFreeCancellationAvailable
     * @param bool|null $isNonRefundable
     * @param CancellationTimelineItem[]|DataCollection|null $timeline
     */
    public function __construct(
        public ?string                   $cancellationDate = null,
        public ?string                   $description = null,
        public ?bool                     $isFreeCancellationAvailable = null,
        public ?bool                     $isNonRefundable = null,

        #[DataCollectionOf(Space::class)]
        public ?DataCollection $timeline = null,
    )
    {
    }
}
