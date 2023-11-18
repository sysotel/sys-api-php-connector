<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\TimeSpan;

class Promotion extends Data
{
    public function __construct(
        public string    $id,
        public int       $promoId,
        public string    $category,
        public string    $type,
        public string    $status,
        public int       $propertyId,
        public string    $internalName,
        public string    $displayName,
        public string    $createdAt,

        public ?TimeSpan $bookingTimeSpan = null,
        public ?TimeSpan $stayTimeSpan = null,
        public ?string   $dateRestrictionType = null,
        public ?string   $code = null,
    )
    {
    }
}
