<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Data;

class Icons extends Data
{
    /**
     * @param string $filePath
     * @param string $version
     * @param Meta|null $meta
     */
    public function __construct(
        public string    $filePath,
        public string    $version,
        public ?Meta $meta = null,

    )
    {
    }


}
