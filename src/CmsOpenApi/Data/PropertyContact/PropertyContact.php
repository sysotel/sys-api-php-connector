<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyContact;

use Spatie\LaravelData\Data;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\ContactNumber;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\common\Email;

class PropertyContact extends Data
{
    public function __construct(
        public string $id,
        public string $createdAt,
        public bool $isExpired,
        public string $status,
        public int $propertyId,
        public string $ownedBy,
        public array $contactTypes,
        public null|bool $printOnBookingVoucher = null,
        public null|Email $email = null,
        public null|ContactNumber $contactNumber = null,
        public null|string $title = null,
        public null|string $firstName = null,
        public null|string $lastName = null,
        public null|string $fullName = null,
        public null|string $expiredAt = null,
    )
    {
    }
}
