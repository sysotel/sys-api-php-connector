<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetAmenitiesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;

class GetAmenities extends CmsOpenApiCall
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
     * @return GetAmenitiesRS
     */
    public function execute(): GetAmenitiesRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/amenities"),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetAmenitiesRS($request))->execute();
    }
}
