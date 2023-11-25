<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common\PropertyAmenities;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common\SpaceAmenities;

class Amenities extends Data
{
    /**
     * @param DataCollection|null $propertyAmenities
     * @param DataCollection|null $spaceAmenities
     */
    public function __construct(

        #[DataCollectionOf(PropertyAmenities::class)]
        public ?DataCollection    $propertyAmenities = null,

        #[DataCollectionOf(SpaceAmenities::class)]
        public ?DataCollection    $spaceAmenities = null,
    )
    {
    }

}
