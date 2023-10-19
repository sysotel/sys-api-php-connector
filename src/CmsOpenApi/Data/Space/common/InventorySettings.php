<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Space\common;

use Spatie\LaravelData\Data;

class InventorySettings extends Data
{
    public function __construct(
        public string $accuracy,
        public array|null $hourlySlots = null,
    )
    {
    }
}
