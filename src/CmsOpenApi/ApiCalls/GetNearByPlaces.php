<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetNearByPlaceRS;

class GetNearByPlaces extends CmsOpenApiCall
{
    private int $propertyId;
    private int $distanceInKm;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     * @param int $distanceInKm
     */
    public function __construct(CmsOpenApi $api,  int $propertyId, int $distanceInKm)
    {
        parent::__construct($api);

        $this->propertyId = $propertyId;
        $this->distanceInKm = $distanceInKm;
    }

    /**
     * @return GetNearByPlaceRS
     */
    public function execute(): GetNearByPlaceRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/nearby-places?distanceInKm={$this->distanceInKm}"),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetNearByPlaceRS($request))->execute();
    }
}
