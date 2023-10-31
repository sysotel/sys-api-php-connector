<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\GeoPoint;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\LocationReference;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class Location extends Data
{
    /**
     * @param int $id
     * @param string $name
     * @param int $categorySlug
     * @param string $type
     * @param string $createdAt
     * @param string|null $code
     * @param array $searchKeywords
     * @param string|null $postalCode
     * @param GeoPoint|null $geoPoint
     * @param LocationReference|null $city
     * @param LocationReference|null $state
     * @param LocationReference|null $country
     * @param DataCollection|null $channels
     */
    public function __construct(
        public int $id,
        public string $name,
        public int $categorySlug,
        public string $type,
        public string $createdAt,
        public ?string $code = null,
        public array $searchKeywords = [],
        public ?string $postalCode = null,
        public ?GeoPoint $geoPoint = null,
        public ?LocationReference $city = null,
        public ?LocationReference $state = null,
        public ?LocationReference $country = null,

        #[DataCollectionOf(LocationChannel::class)]
        public ?DataCollection $channels = null,
    )
    {
    }
}
