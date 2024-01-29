<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common\Amenity;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common\AmenityCategory;

class AmenityDetails extends Data
{
    /**
     * @param DataCollection|null $amenityCategories
     */
    public function __construct(

        #[DataCollectionOf(AmenityCategory::class)]
        public ?DataCollection $amenityCategories = null,
    )
    {
    }

    /**
     * @return Amenity[]
     */
    public function getFeaturedAmenities(): array
    {
        $propertiesAmenities = $this->amenityCategories;

        $featuredAmenities = [];

        foreach ($propertiesAmenities as $amenityItem) {
            $amenities = $amenityItem->amenities;

            foreach ($amenities as $amenity) {

                if ($amenity->isFeatured) {
                    $featuredAmenities[] = $amenity;
                }
            }
        }

        return $featuredAmenities;
    }
}
