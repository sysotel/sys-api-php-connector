<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Data;

class GoogleMapDetails extends Data
{
    /**
     * @param string $placeId
     * @param string|null $placeIdDisplayName
     * @param string|null $name
     * @param string|null $addr1
     * @param string|null $city
     * @param string|null $province
     * @param string|null $country
     * @param string|null $postalCode
     * @param float|null $longitude
     * @param float|null $latitude
     * @param string|null $phone
     * @param string|null $internationalPhone
     * @param string|null $url
     * @param string|null $formattedAddress
     */
    public function __construct(
        public string   $placeId,
        public ?string   $placeIdDisplayName = null,
        public ?string   $name = null,
        public ?string   $addr1 = null,
        public ?string   $city = null,
        public ?string   $province = null,
        public ?string   $country = null,
        public ?string   $postalCode = null,
        public ?float   $longitude = null,
        public ?float   $latitude = null,
        public ?string   $phone = null,
        public ?string   $internationalPhone = null,
        public ?string   $url = null,
        public ?string   $formattedAddress = null,
    )
    {
    }
}


