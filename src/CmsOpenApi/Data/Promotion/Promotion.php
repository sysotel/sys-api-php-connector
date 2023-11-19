<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion;

use Spatie\LaravelData\Attributes\WithCastable;
use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast\PromotionDetailsCast;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\ApplicableSpaceDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\BasicPromotionDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\EarlyBirdPromotionDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\LastMinutePromotionDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common\TimeSpan;

class Promotion extends Data
{
    /**
     * @param string $id
     * @param int $promoId
     * @param string $category
     * @param string $type
     * @param string $status
     * @param int $propertyId
     * @param string $internalName
     * @param string $displayName
     * @param string $createdAt
     * @param BasicPromotionDetails|EarlyBirdPromotionDetails|LastMinutePromotionDetails|null $details
     * @param TimeSpan|null $bookingTimeSpan
     * @param TimeSpan|null $stayTimeSpan
     * @param ApplicableSpaceDetails|null $applicableSpaceDetails
     * @param string|null $dateRestrictionType
     * @param string|null $code
     */
    public function __construct(
        public string                  $id,
        public int                     $promoId,
        public string                  $category,
        public string                  $type,
        public string                  $status,
        public int                     $propertyId,
        public string                  $internalName,
        public string                  $displayName,
        public string                  $createdAt,

        #[WithCastable(PromotionDetailsCast::class)]
        public mixed                   $details = null,

        public ?TimeSpan               $bookingTimeSpan = null,
        public ?TimeSpan               $stayTimeSpan = null,
        public ?ApplicableSpaceDetails $applicableSpaceDetails = null,
        public ?string                 $dateRestrictionType = null,
        public ?string                 $code = null,
    )
    {
    }

    /**
     * @param int $spaceId
     * @return bool
     */
    public function isSpaceApplicable(int $spaceId): bool
    {
        if ($this->applicableSpaceDetails?->applicableOnAllSpaces === true) {
            return true;
        }

        foreach (($this->applicableSpaceDetails?->applicableSpaces ?? []) as $applicableSpace) {
            if ($applicableSpace->spaceId === $spaceId) {
                return true;
            }
        }

        return false;
    }


    /**
     * @param int $spaceId
     * @param int $productId
     * @return bool
     */
    public function isProductApplicable(int $spaceId, int $productId): bool
    {
        if ($this->applicableSpaceDetails?->applicableOnAllSpaces === true) {
            return true;
        }

        foreach (($this->applicableSpaceDetails?->applicableSpaces ?? []) as $applicableSpace) {
            if ($applicableSpace->spaceId === $spaceId) {
                if ($applicableSpace->applicableOnAllProducts === true) {
                    return true;
                }
                foreach (($applicableSpace->applicableProducts ?? []) as $applicableProduct) {
                    if ($applicableProduct->productId === $productId) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * @param int $spaceId
     * @return bool
     */
    public function isAllProductApplicableForSpace(int $spaceId): bool
    {
        if ($this->applicableSpaceDetails?->applicableOnAllSpaces === true) {
            return true;
        }

        foreach (($this->applicableSpaceDetails?->applicableSpaces ?? []) as $applicableSpace) {
            if ($applicableSpace->spaceId === $spaceId) {
                if ($applicableSpace->applicableOnAllProducts === true) {
                    return true;
                }
            }
        }

        return false;
    }
}
