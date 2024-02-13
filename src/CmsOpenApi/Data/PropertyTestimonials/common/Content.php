<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\GoogleMapDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\Images;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlacePrimaryType;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlaceType;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlaceWebsite;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\Properties;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common\PlaceReputation;

class Content extends Data
{
    /**
     * @param string $title
     * @param string $description
     * @param int $rating
     */
    public function __construct(
        public string            $title,
        public string            $description,
        public int            $rating,
    )
    {
    }
}
