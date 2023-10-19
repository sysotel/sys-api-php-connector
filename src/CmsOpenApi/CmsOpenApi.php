<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;

use SYSOTEL\APP\ApiConnector\ApiCalls\GetProperties;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use SYSOTEL\APP\ApiConnector\ApiCalls\GetPropertyDetails;
use SYSOTEL\APP\ApiConnector\ApiCalls\GetPropertySearchResult;

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
        $this->baseUrl = config('sys-cms-connector.open_api.base_url');
        $this->clientId = config('sys-cms-connector.open_api.client_id');
        $this->apiToken = config('sys-cms-connector.open_api.api_token');
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
     * @return ApiLog
     */
    public function getProperties(array $query = []): ApiLog
    {
        return (new GetProperties($this, $query))->execute();
    }

    /**
     * @param int $propertyId
     * @param array $query
     * @return ApiLog
     */
    public function getPropertyDetails(int $propertyId, array $query = []): ApiLog
    {
        return (new GetPropertyDetails($this, $propertyId, $query))->execute();
    }

    /**
     * @param string|null $searchTerm
     * @return ApiLog
     */
    public function getPropertySearchResult(?string $searchTerm = null): ApiLog
    {
        return (new GetPropertySearchResult($this, $searchTerm))->execute();
    }
}
