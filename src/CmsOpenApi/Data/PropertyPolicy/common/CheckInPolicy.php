<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CheckInPolicy extends Data
{
    /**
     * @param string|null $dailyStandardTime
     * @param string|null $details
     * @param bool|null $is24HourCheckinAvailable
     * @param string|null $earlyCheckInStatus
     */
    public function __construct(
        public string|null $dailyStandardTime,
        public bool|null $is24HourCheckinAvailable,
        public string|null $earlyCheckInStatus,
        public string|null $details = null,

    )
    {
    }
}

