<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Data;

class EarlyBirdPromotionDetails extends Data
{
    public function __construct(
        public ?int                    $windowThresholdInDays = null,
        public ?PromotionOfferDiscount $discountForAllUsers = null,
        public ?PromotionOfferDiscount $discountForLoggedInUsers = null,
    )
    {
    }
}
