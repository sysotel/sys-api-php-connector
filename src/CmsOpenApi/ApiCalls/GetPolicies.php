<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;

class GetPolicies extends CmsOpenApiCall
{
    private array $query;
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
     * @return GetPoliciesRS
     */
    public function execute(): GetPoliciesRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/policies"),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetPoliciesRS($request))->execute();
    }
}
