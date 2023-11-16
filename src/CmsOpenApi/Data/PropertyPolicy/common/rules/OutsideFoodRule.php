<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules;

use Spatie\LaravelData\Data;

class OutsideFoodRule extends Data
{
    /**
     * @param bool|null $isAllowed
     * @param string|null $details
     */
    public function __construct(
        public ?bool $isAllowed,
        public ?string $details = null

    )
    {
    }
}

