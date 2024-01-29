<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class Amenity extends Data
{
    public function __construct(
        public ?string       $id = null,
        public ?string       $name = null,
        public ?string       $description = null,
        public ?bool         $isFeatured = null,
        public ?AmenityValue $value = null,

    )
    {
    }
}
