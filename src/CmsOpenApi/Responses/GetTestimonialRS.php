<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\Promotion;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyTestimonials\Testimonials;

class GetTestimonialRS extends CmsOpenApiResponse
{
    /**
     * @var Collection<Testimonials>
     */
    protected Collection $testimonials;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->testimonials = collect();

        parent::__construct($request);
    }

    /**
     * @return $this
     */
    public function execute(): static
    {
        parent::execute();

        if (!$responseData = $this->getJsonArrayResponse()) {
            return $this;
        }

        $this->testimonials = collect($responseData['testimonials'] ?? [])->map(function (array $testimonialData) {
            return Testimonials::from($testimonialData);
        });

        return $this;
    }

    /**
     * @return Collection<Promotion>
     */
    public function getTestimonials(): Collection
    {
        return $this->testimonials;
    }
}
