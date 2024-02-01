<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\NearByPlace\common;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Attributes\DataCollectionOf;

class PlaceReputation extends Data
{
    /**
     * @param float|null $rating
     * @param int|null $userRatingsTotal
     * @param DataCollection<PlaceReview>|null $reviews
     */
    public function __construct(
        public ?float   $rating,
        public ?int    $userRatingsTotal,

        #[DataCollectionOf(PlaceReview::class)]
        public ?DataCollection    $reviews = null,
    )
    {
    }
}


