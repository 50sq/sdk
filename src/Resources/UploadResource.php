<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Uploads\GenerateBulkUploadUrlsRequest;
use FiftySq\Sdk\Requests\Uploads\GenerateUploadUrlRequest;
use FiftySq\Sdk\Requests\Uploads\MarkUploadSuccessfulRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class UploadResource extends BaseResource
{
    public function generateUrl(array $data): Response
    {
        return $this->connector->send(new GenerateUploadUrlRequest($data));
    }

    public function generateBulkUrls(array $data): Response
    {
        return $this->connector->send(new GenerateBulkUploadUrlsRequest($data));
    }

    public function markSuccessful(string $uploadId): Response
    {
        return $this->connector->send(new MarkUploadSuccessfulRequest($uploadId));
    }
}
