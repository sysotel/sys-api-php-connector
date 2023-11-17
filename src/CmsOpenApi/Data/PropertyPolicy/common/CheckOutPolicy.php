<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CheckOutPolicy extends Data
{
    /**
     * @param string|null $standardTime
     * @param string|null $lateCheckOut
     * @param array|null $additionalDetails
     * @param string|null $description
     */
    public function __construct(
        public string|null $standardTime,
        public string|null $lateCheckOut,
        public string|null $additionalDetails = null,
        public string|null $description = null,

    )
    {
    }
}
