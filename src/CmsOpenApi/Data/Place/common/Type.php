<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class Type extends Data
{
    /**
     * @param string|null $name
     * @param string|null $value
     */
    public function __construct(
        public ?string   $name,
        public ?string   $value,
    )
    {
    }


}


