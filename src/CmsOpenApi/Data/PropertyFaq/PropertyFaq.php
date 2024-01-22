<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyFaq;

use Spatie\LaravelData\Data;

class PropertyFaq extends Data
{
    /**
     * @param string|null $id
     * @param string|null $propertyId
     * @param string|null $question
     * @param string|null $answer
     * @param string|null $category
     * @param string|null $isDeleted
     */
    public function __construct(
        public ?string $id,
        public ?string $propertyId,
        public ?string $question,
        public ?string $answer,
        public ?string $category,
        public ?string $isDeleted,
    )
    {
    }
}
