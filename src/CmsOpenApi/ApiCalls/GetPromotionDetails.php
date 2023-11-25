<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPromotionDetailsRS;

class GetPromotionDetails extends CmsOpenApiCall
{
    private int $propertyId;
    private string $promotionId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     * @param string $promotionId
     */
    public function __construct(CmsOpenApi $api, int $propertyId, string $promotionId)
    {
        parent::__construct($api);
        $this->propertyId = $propertyId;
        $this->promotionId = $promotionId;
    }

    /**
     * @return GetPromotionDetailsRS
     */
    public function execute(): GetPromotionDetailsRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/promotions/{$this->promotionId}"),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetPromotionDetailsRS($request))->execute();
    }
}
