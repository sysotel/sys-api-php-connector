<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class AmenityCategory extends Data
{
    /**
     * @param string|null $categoryId
     * @param string|null $categoryName
     * @param DataCollection<Amenity>|null $amenities
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryName = null,

        #[DataCollectionOf(Amenity::class)]
        public ?DataCollection    $amenities = null,
    )
    {
    }
}
