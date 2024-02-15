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

class Witness extends Data
{
    /**
     * @param string $companyName
     * @param string $designation
     * @param string $firstName
     * @param string $lastName
     * @param string $fullName
     * @param string $title

     */
    public function __construct(
        public string            $companyName,
        public string            $designation,
        public string            $firstName,
        public string            $lastName,
        public string            $fullName,
        public string            $title,


    )
    {
    }
}
