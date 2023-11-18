<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\DataProperty;

class PromotionDetailsCast implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $context): mixed
    {
        if(empty($value)) {
            return null;
        }

        return null;
    }
}
