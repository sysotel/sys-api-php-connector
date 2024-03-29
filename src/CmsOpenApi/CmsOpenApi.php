<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetAmenities;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetCancellationPolicyByDate;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetCancellationPolicyById;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetLocations;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetNearByPlaces;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPolicies;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPromotionDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPromotions;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetProperties;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPropertyDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPropertySearchResult;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetTestimonials;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetAmenitiesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetLocationsRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetNearByPlaceRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPromotionDetailsRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPromotionsRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPropertyDetailsRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetTestimonialRS;

class CmsOpenApi
{
    /**
     * @var string
     */
    protected string $baseUrl;

    /**
     * @var int
     */
    protected int $clientId;

    /**
     * @var string
     */
    protected string $apiToken;

    protected function __construct()
    {
        $this->baseUrl = config('sys-api-connector.cms_open_api.base_url');
        $this->clientId = config('sys-api-connector.cms_open_api.client_id');
        $this->apiToken = config('sys-api-connector.cms_open_api.api_token');
    }

    /**
     * @return CmsOpenApi
     */
    public static function create(): CmsOpenApi
    {
        return new self;
    }

    /**
     * @return string[]
     */
    public function getDefaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Authorization' => "Bearer $this->apiToken",
            'clientid' => $this->clientId,
        ];
    }

    /**
     * @param array $headers
     * @return array
     */
    public function prepareHeaders(array $headers = []): array
    {
        return array_merge($this->getDefaultHeaders(), $headers);
    }

    /**
     * @param string $path
     * @return string
     */
    public function getUrl(string $path): string
    {
        return $this->baseUrl . $path;
    }

    /**
     * @param string $method
     * @param $path
     * @param array $options
     * @return array
     * @throws GuzzleException
     */
    protected function request(string $method, $path, array $options = []): array
    {
        if (!isset($options['headers'])) {
            $options['headers'] = $this->getDefaultHeaders();
        }

        $response = (new Client())->request(
            $method,
            $this->getUrl($path),
            $options
        );

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param $path
     * @param array $options
     * @return array
     * @throws GuzzleException
     */
    protected function get($path, array $options = []): array
    {
        return $this->request('GET', $path, $options);
    }

    /**
     * @param array $query
     * @return CmsOpenApiResponse
     */
    public function getProperties(array $query = []): CmsOpenApiResponse
    {
        return (new GetProperties($this, $query))->execute();
    }

    /**
     * @param int $propertyId
     * @param array $query
     * @return GetPropertyDetailsRS
     */
    public function getPropertyDetails(int $propertyId, array $query = []): GetPropertyDetailsRS
    {
        return (new GetPropertyDetails($this, $propertyId, $query))->execute();
    }

    /**
     * @param string|null $searchTerm
     * @return CmsOpenApiResponse
     */
    public function getPropertySearchResult(?string $searchTerm = null): CmsOpenApiResponse
    {
        return (new GetPropertySearchResult($this, $searchTerm))->execute();
    }

    /**
     * @param int $propertyId
     * @param array $query
     * @return GetPromotionsRS
     */
    public function getPromotions(int $propertyId, array $query = []): GetPromotionsRS
    {
        return (new GetPromotions($this, $propertyId, $query))->execute();
    }

    /**
     * @param int $propertyId
     * @param string $promotionId
     * @return GetPromotionDetailsRS
     */
    public function getPromotionDetails(int $propertyId, string $promotionId): GetPromotionDetailsRS
    {
        return (new GetPromotionDetails($this, $propertyId, $promotionId))->execute();
    }

    /**
     * @param array $query
     * @return GetLocationsRS
     */
    public function getLocations(array $query = []): GetLocationsRS
    {
        return (new GetLocations($this, $query))->execute();
    }

    /**
     * @param int $propertyId
     * @return GetPoliciesRS
     */
    public function getPolicies(int $propertyId): GetPoliciesRS
    {
        return (new GetPolicies($this, $propertyId))->execute();
    }


    /**
     * @param int $propertyId
     * @param array $query
     * @return GetPoliciesRS
     */
    public function getCancellationPolicyById(int $propertyId, array $query = []): GetPoliciesRS
    {
        return (new GetCancellationPolicyById($this, $propertyId, $query))->execute();
    }

    /**
     * @param int $propertyId
     * @param Carbon $checkInDate
     * @param Carbon|null $cancellationDate
     * @return GetPoliciesRS
     */
    public function getCancellationPolicyByCheckInDate(int $propertyId, Carbon $checkInDate, ?Carbon $cancellationDate = null): GetPoliciesRS
    {
        return (new GetCancellationPolicyByDate($this, $propertyId, $checkInDate, $cancellationDate))->execute();
    }

    /**
     * @param int $propertyId
     * @return GetAmenitiesRS
     */
    public function getAmenities(int $propertyId): GetAmenitiesRS
    {
        return (new GetAmenities($this, $propertyId))->execute();
    }

    /**
     * @param int $propertyId
     * @param int $distanceInKm
     * @return GetNearByPlaceRS
     */
    public function getNearByPlaces(int $propertyId, int $distanceInKm): GetNearByPlaceRS
    {
        return (new GetNearByPlaces($this, $propertyId, $distanceInKm))->execute();
    }

    /**
     * @param int $propertyId
     * @return GetTestimonialRS
     */
    public function getTestimonials(int $propertyId): GetTestimonialRS
    {
        return (new GetTestimonials($this, $propertyId))->execute();
    }


}
