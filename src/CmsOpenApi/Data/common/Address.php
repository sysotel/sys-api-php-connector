<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class Address extends Data
{
    public function __construct(
        public string $fullAddress,
        public string $line1,
        public string $postalCode,
        public string $area,
        public string $areaId,
        public string $city,
        public string $cityId,
        public string $state,
        public string $stateId,
        public string $country,
        public string $countryId,
        public string $googleMapUrl,
        public GeoPoint $geoPoint,
        public GoogleMapDetails $googleMapDetails,
    )
    {
    }
}
