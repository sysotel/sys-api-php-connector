<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CheckInPolicy extends Data
{
    /**
     * @param string|null $standardTime
     * @param string|null $earlyCheckIn
     * @param string|null $additionalDetails
     * @param string|null $earlyCheckInDescription
     * @param string|null $checkInTimeDescription
     * @param string|null $checkInDescription
     * @param array|null $description
     */
    public function __construct(
        public string|null $standardTime =  null,
        public string|null $earlyCheckIn =  null,
        public string|null $additionalDetails = null,
        public string|null $earlyCheckInDescription = null,
        public string|null $checkInTimeDescription = null,
        public string|null $checkInDescription = null,
        public array|null $description = []

    )
    {
    }
}

