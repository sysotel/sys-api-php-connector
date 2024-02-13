<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\ImageUrls;

class Images extends Data
{
    /**
     * @param string|null $_id
     * @param string|null $status
     * @param string|null $isFeatured
     * @param ImageUrls|null $urls
     */
    public function __construct(
        public ?string    $_id,
        public ?string    $status = null,
        public ?string    $isFeatured = null,
        public ?ImageUrls $urls = null,
    )
    {
    }
}


