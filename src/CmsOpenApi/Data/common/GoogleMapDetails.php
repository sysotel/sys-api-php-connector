<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

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
        public ?string $internationalPhone = null,
        public ?string $url = null,
        public ?string $formattedAddress = null,
        public ?float  $latitude = null,
        public ?float  $longitude = null,
        public ?string  $name = null,
        public ?GeoPoint  $geoPoint = null,

        #[DataCollectionOf(AddressComponents::class)]
        public ?DataCollection    $addressComponent = null,

    )
    {
    }
}
