<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiEnums;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Product\Product;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyImage\PropertyImage;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\common\InventorySettings;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\common\SpaceOccupancy;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class Space extends Data
{
    /**
     * @param int $id
     * @param string $name
     * @param string $internalName
     * @param int $propertyId
     * @param string $category
     * @param string $stayType
     * @param string $status
     * @param int $noOfUnits
     * @param SpaceOccupancy $occupancy
     * @param InventorySettings $inventorySettings
     * @param string $createdAt
     * @param DataCollection<Product>|null $products
     * @param DataCollection<PropertyImage>|null $images
     * @param float|null $rackRate
     * @param string|null $description
     */
    public function __construct(
        public int $id,
        public string $name,
        public string $internalName,
        public int $propertyId,
        public string $category,
        public string $stayType,
        public string $status,
        public int $noOfUnits,
        public SpaceOccupancy $occupancy,
        public InventorySettings $inventorySettings,

        public string           $createdAt,

        #[DataCollectionOf(Product::class)]
        public ?DataCollection $products = null,

        #[DataCollectionOf(PropertyImage::class)]
        public ?DataCollection $images = null,

        public ?float $rackRate = null,
        public ?string $description = null,
    )
    {
    }

    /**
     * @param int $id
     * @return Product|null
     */
    public function getProductById(int $id): ?Product
    {
        foreach(($this->products ?? []) as $product) {
            if($product->id === $id) {
                return $product;
            }
        }

        return null;
    }

    /**
     * @return array<Product>
     */
    public function getActiveProducts(): array
    {
        $products = [];

        foreach (($this->products ?? []) as $product) {
            if ($product->status === CmsOpenApiEnums::PROPERTY_STATUS_ACTIVE) {
                $products[] = $product;
            }
        }

        return $products;
    }

    /**
     * @param int $slot
     * @return bool
     */
    public function hasHourlySlot(int $slot): bool
    {
        if(!is_array($this->inventorySettings?->hourlySlots)) {
            return false;
        }

        return in_array($slot, $this->inventorySettings->hourlySlots);
    }



    /**
     * @return PropertyImage|null
     */
    public function getFeaturedPropertyImage(): PropertyImage|null
    {
        if(!$this->images) return null;

        foreach($this->images as $image) {
            if($image->isFeatured) {
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
        if($featuredImage) {
            return $featuredImage;
        }

        if(!empty($this->images)) {
            return $this->images[0];
        }

        return null;
    }

    /**
     * @return array<PropertyImage>
     */
    public function getActiveImages(): array
    {
        if(!$this->images) {
            return [];
        }

        return $this->images->filter(function(PropertyImage $image){
            return $image->status === CmsOpenApiEnums::PROPERTY_IMAGE_STATUS_ACTIVE;
        })->all();
    }
}
