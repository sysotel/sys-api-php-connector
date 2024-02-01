<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Images;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\PlaceWebsite;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Properties;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\PlaceReputation;

class Place extends Data
{
    /**
     * @param string $id
     * @param string $name
     * @param string $businessStatus
     * @param string|null $description
     * @param PlaceReputation|null $reputation
     * @param PlaceWebsite|null $website
     * @param DataCollection|null $properties
     * @param DataCollection|null $images
     */
    public function __construct(
        public string           $id,
        public string           $name,
        public string           $businessStatus,
        public ?string          $description,
        public ?PlaceReputation $reputation = null,
        public ?PlaceWebsite $website = null,

        #[DataCollectionOf(Properties::class)]
        public ?DataCollection  $properties = null,

        #[DataCollectionOf(Images::class)]
        public ?DataCollection  $images = null,
    )
    {
    }
}
