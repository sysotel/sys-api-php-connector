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
     * @param array|null $description
     * @param string|null $guestDocumentRuleDescription
     */
    public function __construct(
        public ?bool   $isDocumentsRequiredOnCheckIn = null,
        public ?bool   $isLocalIdAllowed = null,
        public array   $acceptableIdentityProofs = [],
        public ?string $additionalDetails = null,
        public ?array $description = [],
        public ?string $guestDocumentRuleDescription= null,


    )
    {
    }
}

