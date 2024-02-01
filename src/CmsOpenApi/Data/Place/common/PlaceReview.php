<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class PlaceReview extends Data
{
    /**
     * @param string|null $authorName
     * @param string|null $authorUrl
     * @param string|null $authorProfilePhotoUrl
     * @param string|null $language
     * @param string|null $originalLanguage
     * @param int|null $rating
     * @param string|null $text
     * @param bool|null $translated
     * @param string|null $timestamp
     * @param int|null $userRatingsTotal
     */
    public function __construct(
        public ?string   $authorName,
        public ?string   $authorUrl,
        public ?string   $authorProfilePhotoUrl,
        public ?string   $language,
        public ?string   $originalLanguage,
        public ?int   $rating,
        public ?string   $text,
        public ?bool   $translated,
        public ?string   $timestamp,
        public ?int    $userRatingsTotal,


    )
    {
    }


}


