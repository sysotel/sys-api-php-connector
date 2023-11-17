<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;

class CheckOutPolicy extends Data
{
    /**
     * @param string|null $standardTime
     * @param string|null $lateCheckOut
     * @param string|null $additionalDetails
     * @param string|null $description
     */
    public function __construct(
        public string|null $standardTime =  null,
        public string|null $lateCheckOut =  null,
        public string|null $additionalDetails = null,
        public string|null $description = null,

    )
    {
    }
}
