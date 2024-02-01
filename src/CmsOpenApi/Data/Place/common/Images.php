<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\common\LocationChannel;

class Images extends Data
{
    /**
     * @param string|null $_id
     * @param string|null $source
     * @param string|null $sourceUrl
     * @param bool|null $isFeatured
     * @param Type|null $type
     * @param int|null $rating
     * @param string|null $text
     * @param bool|null $translated
     * @param string|null $timestamp
     * @param int|null $userRatingsTotal
     * @param DataCollection|null $items
     */
    public function __construct(
        public ?string   $_id,
        public ?string   $source,
        public ?string   $sourceUrl,
        public ?bool   $isFeatured,
        public ?Type   $type,
        public ?int   $rating,
        public ?string   $text,
        public ?bool   $translated,
        public ?string   $timestamp,
        public ?int    $userRatingsTotal,


        #[DataCollectionOf(Items::class)]
        public ?DataCollection    $items = null,

    )
    {
    }


}


