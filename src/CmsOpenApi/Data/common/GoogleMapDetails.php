<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class GoogleMapDetails extends Data
{
    public function __construct(
        public ?string $placeId = null,
        public ?string $businessName = null,
        public ?string $addr1 = null,
        public ?string $city = null,
        public ?string $province = null,
        public ?string $country = null,
        public ?string $postalCode = null,
        public ?string $phone = null,
        public ?float  $latitude = null,
        public ?float  $longitude = null,
    )
    {
    }
}
