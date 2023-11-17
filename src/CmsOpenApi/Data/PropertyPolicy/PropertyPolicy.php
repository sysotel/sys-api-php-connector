<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\PropertyCancellationPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\AgePolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckInPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckOutPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CustomPolicyItem;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\PropertyRules;

class PropertyPolicy extends Data
{
    /**
     * @param int $propertyId
     * @param CheckInPolicy|null $checkIn
     * @param CheckOutPolicy|null $checkOut
     * @param PropertyRules|null $rules
     * @param DataCollection|null $cancellationPolicy
     */
    public function __construct(
        public int $propertyId,
        public ?CheckInPolicy $checkIn = null,
        public ?CheckOutPolicy $checkOut = null,
        public ?PropertyRules $rules = null,

        #[DataCollectionOf(PropertyCancellationPolicy::class)]
        public ?DataCollection                    $cancellationPolicy = null,

    )
    {
    }
}