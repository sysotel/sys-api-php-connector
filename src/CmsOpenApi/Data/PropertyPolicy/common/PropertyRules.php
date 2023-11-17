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
     * @param AgePolicy|null $age
     * @param GuestDocumentRule|null $documents
     * @param UnmarriedCoupleRule|null $unmarriedCouple
     * @param BachelorsRule|null $bachelors
     * @param OutsideFoodRule|null $foodRestrictions
     * @param PetsRule|null $pets
     */
    public function __construct(
        public ?AgePolicy $age = null,
        public ?GuestDocumentRule $documents = null,
        public ?UnmarriedCoupleRule $unmarriedCouple = null,
        public ?BachelorsRule $bachelors = null,
        public ?OutsideFoodRule $foodRestrictions = null,
        public ?PetsRule $pets = null,
    )
    {
    }
}
