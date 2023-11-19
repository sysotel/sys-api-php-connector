<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\DataProperty;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiEnums;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\BasicPromotionDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\EarlyBirdPromotionDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\LastMinutePromotionDetails;

class PromotionDetailsCast implements Castable
{
    public static function dataCastUsing(...$arguments): Cast
    {
        return new class implements Cast {
            public function cast(DataProperty $property, mixed $value, array $context): mixed
            {
                $promotionType = $context['type'] ?? null;

                /** @var ?Data $dataClass */
                $dataClass = match($promotionType) {
                    CmsOpenApiEnums::PROMOTION_TYPE_BASIC => BasicPromotionDetails::class,
                    CmsOpenApiEnums::PROMOTION_TYPE_LAST_MINUTE => LastMinutePromotionDetails::class,
                    CmsOpenApiEnums::PROMOTION_TYPE_EARLY_BIRD => EarlyBirdPromotionDetails::class,
                    default => null
                };

                if($dataClass) {
                    return $dataClass::from($value);
                }

                return null;
            }
        };
    }
}
