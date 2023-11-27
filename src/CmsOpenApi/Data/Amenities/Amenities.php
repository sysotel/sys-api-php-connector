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


    public function getFeaturedPropertiesAmenities(): array
    {
        $propertiesAmenities = $this->propertyAmenities;

        $featuredAmenities = [];

        foreach ($propertiesAmenities as $amenityItem){
            $amenities = $amenityItem->amenities;

            foreach ($amenities as $amenity){
                $amenityData = [
                    'id' => $amenity->id,
                    'name' => $amenity->name,
                    'description' => $amenity->description,
                    'isFeatured' => $amenity->isFeatured,
                    'value' => [
                        'flag' => $amenity->value->flag ?? false
                    ]
                ];

                if ($amenity->isFeatured){
                    $featuredAmenities[] = $amenityData;
                }
            }
        }

        return $featuredAmenities;
    }


}
