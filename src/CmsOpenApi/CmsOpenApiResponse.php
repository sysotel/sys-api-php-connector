<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;


use SYSOTEL\APP\ApiConnector\ApiServices\ApiResponseContext;

class CmsOpenApiResponse extends ApiResponseContext
{
    /**
     * @return string|null
     */
    public function getErrorMessageFromResponse(): ?string
    {
        $message = null;
        $response = $this->getXmlResponse();


        if ($response && !$this->hasSuccessfulHttpStatus()) {
            $message = $response['message'] ?? null;

        }

        else if (!$this->hasSuccessfulHttpStatus() && is_string($this->responseContent)) {
            $message = $this->responseContent;
        }

        return $message;
    }
}
