<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\common;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ApplicableSpaceDetails extends Data
{
    /**
     * @param bool|null $applicableOnAllSpaces
     * @param DataCollection<ApplicableSpace>|null $applicableSpaces
     */
    public function __construct(
        public ?bool $applicableOnAllSpaces = null,

        #[DataCollectionOf(ApplicableSpace::class)]
        public ?DataCollection $applicableSpaces = null,
    )
    {
    }
}
