<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Promotion\Promotion;

class GetPromotionDetailsRS extends CmsOpenApiResponse
{
    /**
     * @var ?Promotion
     */
    protected ?Promotion $promotion = null;

    /**
     * @return $this
     */
    public function execute(): static
    {
        parent::execute();

        if (!$responseData = $this->getJsonArrayResponse()) {
            return $this;
        }

        if(!empty($responseData['promotion'])) {
            $this->promotion = Promotion::from($responseData['promotion']);
        }

        return $this;
    }

    /**
     * @return Promotion
     */
    public function getPromotion(): Promotion
    {
        return $this->promotion;
    }
}
