<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Data;

class Properties extends Data
{
    /**
     * @param int $id
     * @param string $displayName
     */
    public function __construct(
        public int    $id,
        public string $displayName,

    )
    {
    }


}
