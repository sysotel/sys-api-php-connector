<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyCancellationPolicy\PropertyCancellationPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckInPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CheckOutPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\CustomPolicyItem;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\PropertyRules;

class PropertyPolicy extends Data
{
    /**
     * @param int $propertyId
     * @param string|null $status
     * @param CheckInPolicy|null $checkIn
     * @param CheckOutPolicy|null $checkOut
     * @param CustomPolicyItem|null $general
     * @param PropertyRules|null $rules
     * @param DataCollection|null $cancellationPolicies
     */
    public function __construct(
        public int $propertyId,
        public ?string $status = null,
        public ?CheckInPolicy $checkIn = null,
        public ?CheckOutPolicy $checkOut = null,
        public ?CustomPolicyItem $general = null,
        public ?PropertyRules $rules = null,

        #[DataCollectionOf(PropertyCancellationPolicy::class)]
        public ?DataCollection                    $cancellationPolicies = null,

    )
    {
    }

    /**
     * @return PropertyCancellationPolicy|null
     * @var Carbon $date
     */
    public function getApplicableCancellationPolicyByStayDate(Carbon $date): ?PropertyCancellationPolicy
    {
        $date = $date->copy()->startOfDay();

        foreach ($this->cancellationPolicies as $cancellationPolicy) {
            $startDate = Carbon::parse($cancellationPolicy->applicableDates->startDate);
            $endDate = Carbon::parse($cancellationPolicy->applicableDates->endDate);
            if ($date->betweenIncluded($startDate, $endDate)) {
                return $cancellationPolicy;
            }
        }

        return null;
    }
}
