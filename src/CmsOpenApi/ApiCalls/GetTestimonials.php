<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetTestimonialRS;

class GetTestimonials extends CmsOpenApiCall
{
    private int $propertyId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     */
    public function __construct(CmsOpenApi $api, int $propertyId)
    {
        parent::__construct($api);
        $this->propertyId = $propertyId;
    }


    /**
     * @return GetTestimonialRS
     */
    public function execute(): GetTestimonialRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/testimonials"),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetTestimonialRS($request))->execute();
    }
}
