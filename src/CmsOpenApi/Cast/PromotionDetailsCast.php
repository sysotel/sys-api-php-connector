<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Support\DataProperty;

class PromotionDetailsCast implements Castable
{
    public static function dataCastUsing(array $arguments): Cast
    {
        return new class implements Cast {
            public function cast(DataProperty $property, mixed $value, array $context): mixed
            {
                if (empty($value)) {
                    return null;
                }

                return null;

            }
        };
    }
}
