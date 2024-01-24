<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyFaq;

use Spatie\LaravelData\Data;

class PropertyFaq extends Data
{
    /**
     * @param string|null $propertyId
     * @param string|null $question
     * @param string|null $answer
     * @param string|null $categoryId
     * @param string|null $categoryName
     * @param string|null $id
     * @param string|null $category
     */
    public function __construct(
        public ?string $propertyId,
        public ?string $question,
        public ?string $answer,
        public ?string $categoryId,
        public ?string $categoryName,
        public ?string $id = null,
        public ?string $category = null,
    )
    {
    }
}
