<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common\Content;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common\Images;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\common\Witness;

class Testimonials extends Data
{
    /**
     * @param int $id
     * @param int $propertyId
     * @param string $status
     * @param bool $isDeleted
     * @param Witness $witness
     * @param Content $content

     * @param DataCollection|null $images
     */
    public function __construct(
        public int            $id,
        public int            $propertyId,
        public string            $status,
        public bool            $isDeleted,

        public Witness  $witness,
        public Content  $content,

        #[DataCollectionOf(Images::class)]
        public ?DataCollection   $images = null,
    )
    {
    }
}
