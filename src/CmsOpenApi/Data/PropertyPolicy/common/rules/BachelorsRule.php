<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules;

use Spatie\LaravelData\Data;

class BachelorsRule extends Data
{
    /**
     * @param bool|null $isAllowed
     * @param array|null $description
     * @param string|null $bachelorDescription
     */
    public function __construct(
        public ?bool $isAllowed = null,
        public ?array $description = [],
        public ?string $bachelorDescription =  null

    )
    {
    }
}

