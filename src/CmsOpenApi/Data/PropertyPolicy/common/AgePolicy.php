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
     */
    public function __construct(
        public int|null $infantAgeThreshold,
        public int|null $childAgeThreshold,
        public int|null $freeChildAgeThreshold,
        public int|null $noOfFreeChildGranted,

    )
    {
    }
}

