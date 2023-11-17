<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetCancellationPolicyByDate;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetCancellationPolicyById;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetLocations;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPolicies;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetProperties;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPropertyDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls\GetPropertySearchResult;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetLocationsRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPropertyDetailsRS;

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

}
