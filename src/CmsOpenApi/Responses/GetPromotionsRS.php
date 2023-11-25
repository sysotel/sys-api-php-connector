<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\Promotion;

class GetPromotionsRS extends CmsOpenApiResponse
{
    /**
     * @var Collection<Promotion>
     */
    protected Collection $promotions;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->promotions = collect();

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

        $this->promotions = collect($responseData['promotions'] ?? [])->map(function (array $promotionData) {
            return Promotion::from($promotionData);
        });

        return $this;
    }

    /**
     * @return Collection<Promotion>
     */
    public function getPromotions(): Collection
    {
        return $this->promotions;
    }
}
