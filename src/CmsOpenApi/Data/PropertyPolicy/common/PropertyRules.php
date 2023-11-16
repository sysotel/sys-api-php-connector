<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules\BachelorsRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules\GuestDocumentRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules\OutsideFoodRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules\PetsRule;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\common\rules\UnmarriedCoupleRule;

class PropertyRules extends Data
{
    /**
     * @param GuestDocumentRule|null $guestDocumentRule
     * @param UnmarriedCoupleRule|null $unmarriedCoupleRule
     * @param BachelorsRule|null $bachelorsRule
     * @param OutsideFoodRule|null $outsideFoodRule
     * @param PetsRule|null $petsRule
     */
    public function __construct(
        public ?GuestDocumentRule $guestDocumentRule = null,
        public ?UnmarriedCoupleRule $unmarriedCoupleRule = null,
        public ?BachelorsRule $bachelorsRule = null,
        public ?OutsideFoodRule $outsideFoodRule = null,
        public ?PetsRule $petsRule = null,
    )
    {
    }
}
