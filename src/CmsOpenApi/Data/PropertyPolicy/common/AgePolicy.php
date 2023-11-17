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
     * @param string|null $description
     */
    public function __construct(
        public int|null $infantAgeThreshold = null,
        public int|null $childAgeThreshold = null,
        public int|null $freeChildAgeThreshold = null,
        public int|null $noOfFreeChildGranted = null,
        public string|null $description = null ,

    )
    {
    }
}

