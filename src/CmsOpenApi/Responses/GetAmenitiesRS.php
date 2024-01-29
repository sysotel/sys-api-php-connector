<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Amenities\AmenityDetails;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\Location;

class GetAmenitiesRS extends CmsOpenApiResponse
{
    /**
     * @var Collection<AmenityDetails>
     */
    protected Collection $amenities;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->amenities = collect();

        parent::__construct($request);
    }

    /**
     * @return $this
     */
    public function execute(): static
    {
        parent::execute();

        if (!$responseData = $this->getJsonArrayResponse()) {
            return $this;
        }

        $this->amenities = collect($responseData['amenities'] ?? [])->map(function (array $amenities) {
            return AmenityDetails::from($amenities);
        });

        return $this;
    }

    /**
     * @return Collection<Location>
     */
    public function getAmenities(): Collection
    {
        return $this->amenities;
    }
}
