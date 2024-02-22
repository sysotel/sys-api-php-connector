<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Attributes\WithCastable;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common\Content;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common\Images;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common\Witness;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Cast\CarbonDateCast;

class Testimonials extends Data
{
    /**
     * @param int $id
     * @param int $propertyId
     * @param string $status
     * @param bool $isDeleted
     * @param Witness $witness
     * @param Content $content
     * @param Carbon|null $testifiedAt
     * @param DataCollection|null $images
     */
    public function __construct(
        public int            $id,
        public int            $propertyId,
        public string            $status,
        public bool            $isDeleted,

        public Witness  $witness,
        public Content  $content,

        #[WithCastable(CarbonDateCast::class)]
        public ?Carbon $testifiedAt = null,


        #[DataCollectionOf(Images::class)]
        public ?DataCollection   $images = null,
    )
    {
    }
}
