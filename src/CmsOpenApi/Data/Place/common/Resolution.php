<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Data;

class Resolution extends Data
{
    /**
     * @param int $widthInPX
     * @param int $heightInPX
     */
    public function __construct(
        public int    $widthInPX,
        public int    $heightInPX,
    )
    {
    }
}
