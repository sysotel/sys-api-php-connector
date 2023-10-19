<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Property;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiEnums;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\Address;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Product\Product;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Property\common\PropertyLabels;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\Space;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class Property extends Data
{
    /**
     * @param int $id
     * @param string $accountId
     * @param string $name
     * @param string $slug
     * @param string $type
     * @param string $baseCurrency
     * @param string $timezone
     * @param int $noOfSpaces
     * @param string $status
     * @param PropertyLabels $labels
     * @param Address $address
     * @param array $allowedBookingTypes
     * @param string[] $socialMediaUrls
     * @param DataCollection<Space>|null $spaces
     * @param int|null $starRating
     * @param string|null $description
     * @param int|null $noOfFloors
     * @param int|null $buildYear
     */
    public function __construct(
        public int             $id,
        public string          $accountId,
        public string          $slug,
        public string          $name,
        public string          $type,
        public string          $baseCurrency,
        public string          $timezone,
        public int             $noOfSpaces,
        public string          $status,
        public PropertyLabels  $labels,
        public Address         $address,
        public array           $allowedBookingTypes,
        public array           $socialMediaUrls,

//        #[WithCast(DateTimeInterfaceCast::class)]
        public string          $createdAt,

        #[DataCollectionOf(Space::class)]
        public ?DataCollection $spaces = null,

        public ?int            $starRating = null,
        public ?string         $description = null,
        public ?int            $noOfFloors = null,
        public ?int            $buildYear = null,
    )
    {
    }

    /**
     * @param array $responseData
     * @return Property
     */
    public static function createFromApiResponse(array $responseData): Property
    {
        if (isset($responseData['spaces'])) {

            foreach ($responseData['spaces'] as $i => $spaceData) {
                if (isset($spaceData['products'])) {
                    $responseData['spaces'][$i]['products'] = Product::collection($spaceData['products']);
                }
            }

            $responseData['spaces'] = Space::collection($responseData['spaces']);
        }

        return static::from($responseData);
    }

    /**
     * @param int $id
     * @return Space|null
     */
    public function getSpaceById(int $id): ?Space
    {
        foreach (($this->spaces ?? []) as $space) {
            if ($space->id === $id) {
                return $space;
            }
        }

        return null;
    }

    /**
     * @param array $ids
     * @return array<Space>
     */
    public function getSpacesByIds(array $ids): array
    {
        $spaces = [];
        foreach (($this->spaces ?? []) as $space) {
            if (in_array($space->id, $ids)) {
                $spaces[] = $space;
            }
        }

        return $spaces;
    }


    /**
     * @return array<Space>
     */
    public function getActiveSpaces(): array
    {
        $spaces = [];

        foreach (($this->spaces ?? []) as $space) {
            if ($space->status === CmsOpenApiEnums::SPACE_STATUS_ACTIVE) {
                $spaces[] = $space;
            }
        }

        return $spaces;
    }


    /**
     * @return array<Space>
     */
    public function getDailySpaces(): array
    {
        $spaces = [];

        foreach (($this->spaces ?? []) as $space) {
            if ($space->inventorySettings->accuracy === CmsOpenApiEnums::INVENTORY_ACCURACY_DAILY) {
                $spaces[] = $space;
            }
        }

        return $spaces;
    }


    /**
     * @return array<Space>
     */
    public function getHourlySpaces(): array
    {
        $spaces = [];

        foreach (($this->spaces ?? []) as $space) {
            if ($space->inventorySettings->accuracy === CmsOpenApiEnums::INVENTORY_ACCURACY_HOURLY) {
                $spaces[] = $space;
            }
        }

        return $spaces;
    }

    /**
     * @return array<Space>
     */
    public function getActiveDailySpaces(): array
    {
        $spaces = [];

        foreach ($this->getActiveSpaces() as $space) {
            if ($space->inventorySettings->accuracy === CmsOpenApiEnums::INVENTORY_ACCURACY_DAILY) {
                $spaces[] = $space;
            }
        }
        return $spaces;
    }

    /**
     * @return array<Space>
     */
    public function getActiveHourlySpaces(): array
    {
        $spaces = [];

        foreach ($this->getActiveSpaces() as $space) {
            if ($space->inventorySettings->accuracy === CmsOpenApiEnums::INVENTORY_ACCURACY_HOURLY) {
                $spaces[] = $space;
            }
        }
        return $spaces;
    }

    /**
     * @param int $id
     * @return Product|null
     */
    public function getProductById(int $id): ?Product
    {
        foreach (($this->spaces ?? []) as $space) {
            foreach (($space->products ?? []) as $product) {
                if ($product->id === $id) {
                    return $product;
                }
            }
        }

        return null;
    }

    /**
     * @param string $type
     * @return bool
     */
    public function isBookingTypeAllowed(string $type): bool
    {
        return in_array($type, $this->allowedBookingTypes);
    }

    /**
     * @return array
     */
    public function getActiveHourlySlots(): array
    {
        $slots = [];
        foreach ($this->getActiveHourlySpaces() as $space) {
            $slots = array_merge($slots, $space->inventorySettings->hourlySlots ?? []);
        }

        return array_unique($slots);
    }
}
