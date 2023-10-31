<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common;

use Spatie\LaravelData\Data;

class LocationChannel extends Data
{
    public function __construct(
        public string $channelId,
        public string $mappedId,
        public string $mappedName,
    )
    {
    }
}
