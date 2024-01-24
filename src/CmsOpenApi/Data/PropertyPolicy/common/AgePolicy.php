<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class AgePolicy extends Data
{
    /**
     * @param int|null $infantAgeThreshold
     * @param int|null $childAgeThreshold
     * @param int|null $freeChildAgeThreshold
     * @param int|null $noOfFreeChildGranted
     * @param string|null $adultAgeDescription
     * @param string|null $infantAgeThresholdDescription
     * @param string|null $childAgeThresholdDescription
     * @param string|null $freeChildAgeThresholdDescription
     * @param string|null $ageDescription
     * @param array|null $description
     */
    public function __construct(
        public int|null $infantAgeThreshold = null,
        public int|null $childAgeThreshold = null,
        public int|null $freeChildAgeThreshold = null,
        public int|null $noOfFreeChildGranted = null,
        public string|null $adultAgeDescription = null,
        public string|null $infantAgeThresholdDescription = null,
        public string|null $childAgeThresholdDescription = null,
        public string|null $freeChildAgeThresholdDescription = null,
        public string|null $ageDescription = null,
        public array|null $description = [] ,

    )
    {
    }
}

