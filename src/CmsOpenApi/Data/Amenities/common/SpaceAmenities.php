<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class SpaceAmenities extends Data
{
    public function __construct(
        public ?int $spaceId = null,
        public ?string $spaceDisplayName = null,

        #[DataCollectionOf(SpaceCategories::class)]
        public ?DataCollection    $categories = null,

    )
    {
    }
}
