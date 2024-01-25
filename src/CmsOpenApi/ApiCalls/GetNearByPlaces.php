<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetNearByPlaceRS;

class GetNearByPlaces extends CmsOpenApiCall
{
    private int $propertyId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     */
    public function __construct(CmsOpenApi $api,  int $propertyId)
    {
        parent::__construct($api);
        $this->propertyId = $propertyId;

    }

    /**
     * @return GetNearByPlaceRS
     */
    public function execute(): GetNearByPlaceRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/nearby-places"),
            headers: $this->api->prepareHeaders(),
        );


        return (new GetNearByPlaceRS($request))->execute();
    }
}
