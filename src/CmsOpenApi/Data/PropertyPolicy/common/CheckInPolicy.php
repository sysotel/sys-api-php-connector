<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CheckInPolicy extends Data
{
    /**
     * @param string|null $standardTime
     * @param string|null $earlyCheckIn
     * @param string|null $additionalDetails
     * @param string|null $description
     */
    public function __construct(
        public string|null $standardTime,
        public string|null $earlyCheckIn,
        public string|null $additionalDetails = null,
        public string|null $description = null

    )
    {
    }
}

