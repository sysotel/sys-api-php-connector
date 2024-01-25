<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class Reputation extends Data
{
    /**
     * @param float|null $rating
     * @param int|null $userRatingsTotal
     * @param Meta|null $meta
     */
    public function __construct(
        public ?float   $rating,
        public ?int    $userRatingsTotal,

        #[DataCollectionOf(LocationChannel::class)]
        public ?DataCollection    $reviews = null,

    )
    {
    }


}


