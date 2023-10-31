<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPropertyDetailsRS;

class GetPropertyDetails extends CmsOpenApiCall
{
    private array $query;
    private int $propertyId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     * @param array $query
     */
    public function __construct(CmsOpenApi $api, int $propertyId, array $query)
    {
        parent::__construct($api);
        $this->query = $query;
        $this->propertyId = $propertyId;
    }

    /**
     * @return GetPropertyDetailsRS
     */
    public function execute(): GetPropertyDetailsRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}?" . http_build_query($this->query)),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetPropertyDetailsRS($request))->execute();
    }
}
