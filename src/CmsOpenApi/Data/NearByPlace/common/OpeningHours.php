<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class OpeningHours extends Data
{
    /**
     * @param array|null $text
     * @param DataCollection|null $periods
     */
    public function __construct(
        public ?array   $text,


        #[DataCollectionOf(Periods::class)]
        public ?DataCollection    $periods = null,
    )
    {
    }


}


