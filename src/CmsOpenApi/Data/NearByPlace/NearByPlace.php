<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Address;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Icons;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Images;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\OpeningHours;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Properties;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common\Reputation;

class NearByPlace extends Data
{
    /**
     * @param string $id
     * @param string $name
     * @param string $businessStatus
     * @param string|null $description
     * @param bool|null $curbsidePickup
     * @param bool|null $delivery
     * @param bool|null $dineIn
     * @param bool|null $servesBeer
     * @param bool|null $servesLunch
     * @param bool|null $servesDinner
     * @param bool|null $servesWine
     * @param bool|null $takeout
     * @param bool|null $isDeleted
     * @param Icons|null $icon
     * @param Reputation|null $reputation
     * @param OpeningHours|null $openingHours
     * @param Address|null $address
     * @param DataCollection|null $properties
     * @param DataCollection|null $images
     */
    public function __construct(
        public string             $id,
        public string             $name,
        public string             $businessStatus,
        public ?string            $description,
        public ?bool              $curbsidePickup,
        public ?bool              $delivery,
        public ?bool              $dineIn,
        public ?bool              $servesBeer,
        public ?bool              $servesLunch,
        public ?bool              $servesDinner,
        public ?bool              $servesWine,
        public ?bool              $takeout,
        public ?bool              $isDeleted,
        public ?Icons             $icon = null,
        public ?Reputation $reputation = null,
        public ?OpeningHours $openingHours = null,
        public ?Address $address = null,


        #[DataCollectionOf(Properties::class)]
        public ?DataCollection    $properties = null,

        #[DataCollectionOf(Images::class)]
        public ?DataCollection    $images = null,
    )
    {
    }

}
