<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class Items extends Data
{
    /**
     * @param string|null $version
     * @param string|null $filePath
     * @param Meta|null $meta
     */
    public function __construct(
        public ?string   $version,
        public ?string   $filePath,
        public ?Meta $meta,
    )
    {
    }


}


