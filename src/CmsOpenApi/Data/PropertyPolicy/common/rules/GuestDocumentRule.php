<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules;

use Spatie\LaravelData\Data;

class GuestDocumentRule extends Data
{
    /**
     * @param string|null $details
     * @param bool|null $isDocumentsRequiredOnCheckIn
     * @param bool|null $isLocalIdAllowed
     * @param array $acceptableIdentityProofs
     */
    public function __construct(
        public ?bool   $isDocumentsRequiredOnCheckIn,
        public ?bool   $isLocalIdAllowed,
        public array   $acceptableIdentityProofs = [],
        public ?string $details = null,


    )
    {
    }
}

