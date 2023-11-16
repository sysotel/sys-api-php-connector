<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\PropertyCancellationPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\AgePolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckInPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckOutPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\PropertyRules;

class PropertyPolicy extends Data
{
    /**
     * @param string $id
     * @param int $propertyId
     * @param CheckInPolicy|null $checkInPolicy
     * @param CheckOutPolicy|null $checkOutPolicy
     * @param AgePolicy|null $agePolicy
     * @param PropertyRules|null $rules
     * @param DataCollection|null $cancellationPolicy
     */
    public function __construct(
        public string $id,
        public int $propertyId,
        public ?CheckInPolicy $checkInPolicy = null,
        public ?CheckOutPolicy $checkOutPolicy = null,
        public ?AgePolicy $agePolicy = null,
        public ?PropertyRules $rules = null,

        #[DataCollectionOf(PropertyCancellationPolicy::class)]
        public ?DataCollection                    $cancellationPolicy = null,

    )
    {
    }
}
