<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class SpaceCategories extends Data
{
    public function __construct(
        public ?string $categoryId,
        public ?string $categoryName,

        #[DataCollectionOf(Amenities::class)]
        public ?DataCollection   $amenities = null,

    )
    {
    }
}
