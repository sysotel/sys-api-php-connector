<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\GoogleMapDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class Address extends Data
{
    /**
     * @param string $fullAddress
     * @param string $line1
     * @param string $postalCode
     * @param string $area
     * @param string $areaId
     * @param string $city
     * @param string $cityId
     * @param string $state
     * @param string $stateId
     * @param string $country
     * @param string $countryId
     * @param string $googleMapUrl
     */
    public function __construct(
        public string $fullAddress,
        public string $line1,
        public string $postalCode,
        public ?LocationReference $area,
        public ?LocationReference $city,
        public ?LocationReference $state,
        public ?LocationReference $country,
        public ?GoogleMapDetails $googleMapDetails,
    )
    {
    }


}


