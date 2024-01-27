<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Data;

class CancellationTimelineItem extends Data
{
    public function __construct(
        public ?int $startInterval,
        public ?string $startTime,
        public ?int $endInterval,
        public ?string $endTime,
        public ?int $intervalSpan,
        public ?string $case,
        public ?string $shortCase,
        public ?string $fee,
        public ?string $sentence,
        public ?int $penaltyValue,
        public ?string $penaltyLabel,
    )
    {
    }
}

