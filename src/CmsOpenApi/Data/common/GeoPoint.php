<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class GeoPoint extends Data
{
    /**
     * @param float|null $longitude
     * @param float|null $latitude
     * @param array $coordinates
     */
    public function __construct(
        public ?float $longitude,
        public ?float $latitude,
        public array $coordinates,
    )
    {
    }
}
