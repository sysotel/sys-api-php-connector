<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Data;

class PlaceWebsite extends Data
{
    /**
     * @param string|null $url
     */
    public function __construct(
        public ?string   $url,
    )
    {
    }
}


