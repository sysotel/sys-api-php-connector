<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Property;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiEnums;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\Amenities;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\Address;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Product\Product;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\Promotion;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Property\common\PropertyLabels;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyContact\PropertyContact;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyImage\PropertyImage;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\PropertyPolicy;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\Space;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class Property extends Data
{
    /**
     * @param int $id
     * @param string $accountId
     * @param string $slug
     * @param string $name
     * @param string $type
     * @param string $baseCurrency
     * @param string $timezone
     * @param int $noOfSpaces
     * @param string $status
     * @param PropertyLabels $labels
     * @param Address $address
     * @param array $allowedBookingTypes
     * @param string[] $socialMediaUrls
     * @param string $createdAt
     * @param PropertyPolicy|null $policy
     * @param Amenities|null $amenities
     * @param DataCollection|null $spaces
     * @param DataCollection|null $images
     * @param DataCollection|null $promotions
     * @param DataCollection|null $contacts
     * @param PropertyImage|null $logo
     * @param PropertyImage|null $bannerImage
     * @param int|null $starRating
     * @param string|null $description
     * @param int|null $noOfFloors
     * @param int|null $buildYear
     */
    public function __construct(
        public int                 $id,
        public string              $accountId,
        public string              $slug,
        public string              $name,
        public string              $type,
        public string              $baseCurrency,
        public string              $timezone,
        public int                 $noOfSpaces,
        public string              $status,
        public PropertyLabels      $labels,
        public Address             $address,
        public array               $allowedBookingTypes,
        public array               $socialMediaUrls,

//        #[WithCast(DateTimeInterfaceCast::class)]
        public string              $createdAt,
        public PropertyPolicy|null $policy = null,
        public Amenities|null      $amenities = null,

        #[DataCollectionOf(Space::class)]
        public ?DataCollection     $spaces = null,

        #[DataCollectionOf(PropertyImage::class)]
        public ?DataCollection     $images = null,

        #[DataCollectionOf(Promotion::class)]
        public ?DataCollection     $promotions = null,

        #[DataCollectionOf(PropertyContact::class)]
        public ?DataCollection     $contacts = null,


        public ?PropertyImage      $logo = null,
        public ?PropertyImage      $bannerImage = null,

        public ?int                $starRating = null,
        public ?string             $description = null,
        public ?int                $noOfFloors = null,
        public ?int                $buildYear = null,
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

                if (isset($spaceData['images'])) {
                    $responseData['spaces'][$i]['images'] = PropertyImage::collection($spaceData['images']);
                }
            }

            $responseData['spaces'] = Space::collection($responseData['spaces']);
        }

        if (isset($responseData['images'])) {
            $responseData['images'] = PropertyImage::collection($responseData['images']);
        }

        if (isset($responseData['promotions'])) {
            $responseData['promotions'] = Promotion::collection($responseData['promotions']);
        }

        if (isset($responseData['contacts'])) {
            $responseData['contacts'] = PropertyContact::collection($responseData['contacts']);
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

    public function getActivePolicy(): PropertyPolicy|null
    {
        if ($this->policy?->status === CmsOpenApiEnums::PROPERTY_POLICY_STATUS_ACTIVE) {
            return $this->policy;
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

    /**
     * @return PropertyImage|null
     */
    public function getFeaturedPropertyImage(): PropertyImage|null
    {
        if (!$this->images) return null;

        foreach ($this->images as $image) {
            if ($image->isFeatured) {
                return $image;
            }
        }

        return null;
    }

    /**
     * @return PropertyImage|null
     */
    public function getFirstOfFeaturedPropertyImage(): PropertyImage|null
    {
        $featuredImage = $this->getFeaturedPropertyImage();
        if ($featuredImage) {
            return $featuredImage;
        }

        if (is_array($this->images) && $this->images->count() > 0) {
            return $this->images[0];
        }

        return null;
    }

    /**
     * @return array<PropertyImage>
     */
    public function getActivePropertyImages(): array
    {
        if (!$this->images) {
            return [];
        }

        return $this->images->filter(function (PropertyImage $image) {
            return $image->status === CmsOpenApiEnums::PROPERTY_IMAGE_STATUS_ACTIVE;
        })->all();
    }

    /**
     * @return array<PropertyImage>
     */
    public function getActivePropertyAndSpaceImages(): array
    {
        $images = $this->getActivePropertyImages();

        if ($this->spaces) {
            foreach ($this->spaces as $space) {
                $images = array_merge($images, $space->getActiveImages());
            }
        }

        return $images;
    }

    /**
     * @return array
     */
    public function getContactsToPrintOnBookingVoucher(): array
    {
        if (!$this->contacts) return [];

        return $this->contacts->filter(function (PropertyContact $contact) {
            return $contact->printOnBookingVoucher === true;
        })->all();
    }

    /**
     * @return array<Promotion>
     */
    public function getAllActivePromotions(): array
    {
        $promotions = [];

        foreach ($this->promotions ?? [] as $promotion) {
            if ($promotion->status === CmsOpenApiEnums::PROMOTION_STATUS_ACTIVE) {
                $promotions[] = $promotion;
            }
        }

        return $promotions;
    }

    /**
     * @param string $type
     * @return array<Promotion>
     */
    public function getAllPromotionsOfType(string $type): array
    {
        $promotions = [];

        foreach ($this->promotions ?? [] as $promotion) {
            if ($promotion->type === $type) {
                $promotions[] = $promotion;
            }
        }

        return $promotions;
    }

    /**
     * @param string $type
     * @return array<Promotion>
     */
    public function getAllActivePromotionsOfType(string $type): array
    {
        $promotions = [];

        foreach ($this->promotions ?? [] as $promotion) {
            if ($promotion->status === CmsOpenApiEnums::PROMOTION_STATUS_ACTIVE && $promotion->type === $type) {
                $promotions[] = $promotion;
            }
        }

        return $promotions;
    }

    /**
     * @param string $id
     * @return Promotion|null
     */
    public function getPromotionById(string $id): ?Promotion
    {
        foreach ($this->promotions ?? [] as $promotion) {
            if ($promotion->id === $id) {
                return $promotion;
            }
        }

        return null;
    }

    /**
     * @param string $code
     * @return Promotion|null
     */
    public function getPromotionByPromoCode(string $code): ?Promotion
    {
        foreach ($this->promotions ?? [] as $promotion) {
            if ($promotion->code === $code) {
                return $promotion;
            }
        }

        return null;
    }

    /**
     * @return array|null
     */
    public function getFeaturedPropertyAmenities(): ?array
    {
        $propertiesAmenities = $this->amenities->propertyAmenities;

        $featuredAmenities = [];

        foreach ($propertiesAmenities as $amenityItem) {
            $amenities = $amenityItem->amenities;

            foreach ($amenities as $amenity) {
                $amenityData = [
                    'id' => $amenity->id,
                    'name' => $amenity->name,
                    'description' => $amenity->description,
                    'isFeatured' => $amenity->isFeatured,
                    'value' => [
                        'flag' => $amenity->value->flag ?? false
                    ]
                ];

                if ($amenity->isFeatured) {
                    $featuredAmenities[] = $amenityData;
                }
            }
        }

        return $featuredAmenities;
    }

}
