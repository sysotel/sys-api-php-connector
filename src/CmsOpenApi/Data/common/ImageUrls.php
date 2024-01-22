<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class ImageUrls extends Data
{
    public function __construct(
        public ?string $original = null,
        public ?string $smallThumbnail = null,
        public ?string $thumbnail = null,
        public ?string $largeThumbnail = null,
        public ?string $stdSmall = null,
        public ?string $stdMedium = null,
        public ?string $stdLarge = null,
    )
    {
    }
}
