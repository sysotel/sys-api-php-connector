<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetLocationsRS;

class GetLocations extends CmsOpenApiCall
{
    private array $query;

    /**
     * @param CmsOpenApi $api
     * @param array $query
     */
    public function __construct(CmsOpenApi $api, array $query = [])
    {
        parent::__construct($api);

        $this->query = $query;
    }

    /**
     * @return GetLocationsRS
     */
    public function execute(): GetLocationsRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("helpers/locations?" . http_build_query($this->query)),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetLocationsRS($request))->execute();
    }
}
