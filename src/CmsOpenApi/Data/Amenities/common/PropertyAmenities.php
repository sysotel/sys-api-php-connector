<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class PropertyAmenities extends Data
{
    /**
     * @param string|null $categoryId
     * @param string|null $categoryName
     * @param DataCollection|null $amenities
     */
    public function __construct(
        public ?string $categoryId = null,
        public ?string $categoryName = null,

        #[DataCollectionOf(Amenities::class)]
        public ?DataCollection    $amenities = null,

    )
    {
    }
}
