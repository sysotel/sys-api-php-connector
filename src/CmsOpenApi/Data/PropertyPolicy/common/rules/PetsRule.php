<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules;

use Spatie\LaravelData\Data;

class PetsRule extends Data
{
    /**
     * @param bool|null $isAllowed
     * @param string|null $description
     */
    public function __construct(
        public ?bool $isAllowed = null,
        public  ?string $description = null
    )
    {
    }
}

