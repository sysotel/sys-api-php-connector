<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\common;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\AgePolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckInPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckOutPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\PropertyRules;

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
     */
    public function __construct(
        public ?string $checkInTime,
        public ?string $bookingTime = null,
        public ?array $description = [],
        public ?bool $isNonRefundable = null,
        public ?bool $isFreeCancellationAvailable = null,
        public ?string $freeCancellationSentence = null,
        public ?CancellationExample $cancellation = null,
    )
    {
    }
}
