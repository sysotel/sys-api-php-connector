<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast;

use Carbon\Carbon;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Support\DataProperty;

class CarbonTimeCast implements Castable
{
    public static function dataCastUsing(...$arguments): Cast
    {
        return new class implements Cast {
            public function cast(DataProperty $property, mixed $value, array $context): mixed
            {
                if(!$value) {
                    return null;
                }

                return Carbon::createFromFormat($value, config('sys-api-connector.cms_open_api.timestamp_format'));
            }
        };
    }
}
