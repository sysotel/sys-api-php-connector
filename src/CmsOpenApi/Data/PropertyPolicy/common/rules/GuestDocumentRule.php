<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules;

use Spatie\LaravelData\Data;

class GuestDocumentRule extends Data
{
    /**
     * @param bool|null $isDocumentsRequiredOnCheckIn
     * @param bool|null $isLocalIdAllowed
     * @param array $acceptableIdentityProofs
     * @param string|null $additionalDetails
     * @param string|null $description
     */
    public function __construct(
        public ?bool   $isDocumentsRequiredOnCheckIn,
        public ?bool   $isLocalIdAllowed,
        public array   $acceptableIdentityProofs = [],
        public ?string $additionalDetails = null,
        public ?string $description = null,


    )
    {
    }
}

