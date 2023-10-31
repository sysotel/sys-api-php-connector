<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Property\Property;

class GetPropertyDetailsRS extends CmsOpenApiResponse
{
    /**
     * @var null|Property
     */
    protected Property|null $property;

    /**
     * @return $this
     */
    public function execute(): static
    {
        parent::execute();

        if (!$responseData = $this->getJsonArrayResponse()) {
            return $this;
        }

        $this->property = Property::createFromApiResponse($responseData['propertyDetails']);

        return $this;
    }

    /**
     * @return Property|null
     */
    public function getProperty(): ?Property
    {
        return $this->property;
    }
}
