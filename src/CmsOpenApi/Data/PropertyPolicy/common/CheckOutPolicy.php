<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CheckOutPolicy extends Data
{
    /**
     * @param string|null $dailyStandardTime
     * @param string|null $details
     * @param string|null $lateCheckOutStatus
     */
    public function __construct(
        public string|null $dailyStandardTime,
        public string|null $lateCheckOutStatus,
        public string|null $details = null,

    )
    {
    }
}
