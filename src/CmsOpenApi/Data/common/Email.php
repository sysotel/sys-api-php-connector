<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common;

use Spatie\LaravelData\Data;

class Email extends Data
{
    public function __construct(
        public string $id,
    )
    {
    }
}
