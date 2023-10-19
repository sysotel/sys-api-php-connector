<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Product;

use Spatie\LaravelData\Data;

class Product extends Data
{
    /**
     * @param int $id
     * @param string $name
     * @param string $internalName
     * @param int $propertyId
     * @param string $spaceId
     * @param string $mealPlanCode
     * @param string $status
     * @param string[]|null $inclusions
     * @param string[]|null $inclusionsExtended
     * @param string $createdAt
     * @param string|null $description
     */
    public function __construct(
        public int $id,
        public string $name,
        public string $internalName,
        public int $propertyId,
        public string $spaceId,
        public string $mealPlanCode,
        public string $status,
        public array $inclusions,
        public array $inclusionsExtended,

//        #[WithCast(DateTimeInterfaceCast::class)]
        public string           $createdAt,

        public ?string $description = null,
    )
    {
    }
}
