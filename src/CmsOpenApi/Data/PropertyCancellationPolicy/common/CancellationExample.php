<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\Space;

class CancellationExample extends Data
{
    /**
     * @param string|null $cancellationDate
     * @param string|null $description
     * @param bool|null $isFreeCancellationAvailable
     * @param bool|null $isNonRefundable
     */
    public function __construct(
        public ?string $cancellationDate = null,
        public ?string $description = null,
        public ?bool $isFreeCancellationAvailable = null,
        public ?bool $isNonRefundable = null,

        #[DataCollectionOf(Timeline::class)]
        public ?Timeline     $timeline = null,
    )
    {
    }
}
