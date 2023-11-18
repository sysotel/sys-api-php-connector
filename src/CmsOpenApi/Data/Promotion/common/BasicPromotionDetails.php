<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Data;

class BasicPromotionDetails extends Data
{
    public function __construct(
        public ?PromotionOfferDiscount $discountForAllUsers = null,
        public ?PromotionOfferDiscount $discountForLoggedInUsers = null,
    )
    {
    }
}
