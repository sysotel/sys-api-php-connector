<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class LocationReference extends Data
{
    /**
     * @param string $id
     * @param string $name
     * @param string $categorySlug
     * @param string $type
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $categorySlug,
        public string $type,

    )
    {
    }


}


