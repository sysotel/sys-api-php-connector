<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Data;

class GoogleMapDetails extends Data
{
    /**
     * @param string $placeId
     * @param string $placeIdDisplayName
     * @param string $name
     * @param string $addr1
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string $postalCode
     * @param float $longitude
     * @param float $latitude
     * @param float $phone
     * @param float $internationalPhone
     * @param float $url
     * @param float $formattedAddress
     */
    public function __construct(
        public string   $placeId,
        public string   $placeIdDisplayName,
        public string   $name,
        public string   $addr1,
        public string   $city,
        public string   $province,
        public string   $country,
        public string   $postalCode,
        public float   $longitude,
        public float   $latitude,
        public float   $phone,
        public float   $internationalPhone,
        public float   $url,
        public float   $formattedAddress,
    )
    {
    }
}


