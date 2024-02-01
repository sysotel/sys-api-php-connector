<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Data;

class Meta extends Data
{
    /**
     * @param int $size
     * @param int $sizeInKb
     * @param string $extension
     * @param Resolution|null $resolution
     */
    public function __construct(
        public int    $size,
        public int    $sizeInKb,
        public string    $extension,
        public ?Resolution $resolution = null,
    )
    {
    }


}
