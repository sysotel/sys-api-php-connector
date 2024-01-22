<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyImage;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\ImageUrls;

class PropertyImage extends Data
{
    public function __construct(
        public string $id,
        public int $propertyId,
        public int|null $spaceId,
        public string $target,
        public bool $isFeatured,
        public string|null $title,
        public string|null $description,
        public string $status,
        public string $createdAt,
        public string $url,
        public string|null $thumbnailUrl = null,
        public ImageUrls|null $urls = null,
    )
    {
    }
}
