<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\ImageUrls;

class Images extends Data
{
    /**
     * @param string|null $id
     * @param string|null $source
     * @param string|null $sourceUrl
     * @param ImageUrls|null $urls
     */
    public function __construct(
        public ?string    $id,
        public ?string    $source = null,
        public ?string    $sourceUrl = null,
        public ?ImageUrls $urls = null,
    )
    {
    }
}


