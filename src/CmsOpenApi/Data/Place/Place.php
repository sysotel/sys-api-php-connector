<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\GoogleMapDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\Images;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlacePrimaryType;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlaceType;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlaceWebsite;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\Properties;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlaceReputation;

class Place extends Data
{
    /**
     * @param string $id
     * @param string $name
     * @param string $businessStatus
     * @param PlacePrimaryType $primaryType
     * @param DataCollection $types
     * @param string|null $description
     * @param PlaceReputation|null $reputation
     * @param PlaceWebsite|null $website
     * @param GoogleMapDetails|null $googleMapDetails
     * @param DataCollection|null $properties
     * @param DataCollection|null $images
     */
    public function __construct(
        public string            $id,
        public string            $name,
        public string            $businessStatus,

        public PlacePrimaryType  $primaryType,

        #[DataCollectionOf(PlaceType::class)]
        public DataCollection    $types,

        public ?string           $description,
        public ?PlaceReputation  $reputation = null,
        public ?PlaceWebsite     $website = null,
        public ?GoogleMapDetails $googleMapDetails = null,

        #[DataCollectionOf(Properties::class)]
        public ?DataCollection   $properties = null,

        #[DataCollectionOf(Images::class)]
        public ?DataCollection   $images = null,
    )
    {
    }
}
