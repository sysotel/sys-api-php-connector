<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\common;

use Spatie\LaravelData\Data;

class SpaceOccupancy extends Data
{
    /**
     * @param int $minCount
     * @param int $baseCount
     * @param int $maxCount
     * @param int $minAdultCount
     * @param int $maxAdultCount
     * @param int $minChildCount
     * @param int $maxChildCount
     * @param bool $isExtraGuestAllowed
     * @param bool $isExtraAdultAllowed
     * @param bool $isExtraChildAllowed
     * @param int[] $baseRateCounts
     * @param array $baseRateCountDetails
     * @param int[] $extraChildRateCounts
     * @param array $extraChildRateCountDetails
     * @param int[] $extraAdultRateCounts
     * @param array $extraAdultRateCountDetails
     */
    public function __construct(
        public int $minCount,
        public int $baseCount,
        public int $maxCount,
        public int $minAdultCount,
        public int $maxAdultCount,
        public int $minChildCount,
        public int $maxChildCount,
        public bool $isExtraGuestAllowed,
        public bool $isExtraAdultAllowed,
        public bool $isExtraChildAllowed,
        public array $baseRateCounts,
        public array $baseRateCountDetails,
        public array $extraChildRateCounts,
        public array $extraChildRateCountDetails,
        public array $extraAdultRateCounts,
        public array $extraAdultRateCountDetails,
    )
    {
    }
}
