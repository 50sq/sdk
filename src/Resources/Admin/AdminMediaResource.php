<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Media\BulkAddToGalleriesRequest;
use FiftySq\Sdk\Requests\Admin\Media\BulkDeleteMediaRequest;
use FiftySq\Sdk\Requests\Admin\Media\BulkTagMediaRequest;
use FiftySq\Sdk\Requests\Admin\Media\CompleteUploadRequest;
use FiftySq\Sdk\Requests\Admin\Media\DeleteMediaRequest;
use FiftySq\Sdk\Requests\Admin\Media\GenerateUploadUrlRequest;
use FiftySq\Sdk\Requests\Admin\Media\GetMediaRequest;
use FiftySq\Sdk\Requests\Admin\Media\ListMediaRequest;
use FiftySq\Sdk\Requests\Admin\Media\UpdateMediaGalleriesRequest;
use FiftySq\Sdk\Requests\Admin\Media\UpdateMediaRequest;
use FiftySq\Sdk\Requests\Admin\Media\UpdateMediaTagsRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminMediaResource extends BaseResource
{
    public function list(
        ?string $search = null,
        ?string $sortBy = null,
        ?string $sortDirection = null,
        ?int $perPage = null,
    ): Response {
        return $this->connector->send(new ListMediaRequest($search, $sortBy, $sortDirection, $perPage));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetMediaRequest($uid));
    }

    public function update(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateMediaRequest($uid, $data));
    }

    public function delete(string $uid): Response
    {
        return $this->connector->send(new DeleteMediaRequest($uid));
    }

    public function updateTags(string $uid, array $tagIds): Response
    {
        return $this->connector->send(new UpdateMediaTagsRequest($uid, $tagIds));
    }

    public function updateGalleries(string $uid, array $galleryUids): Response
    {
        return $this->connector->send(new UpdateMediaGalleriesRequest($uid, $galleryUids));
    }

    public function bulkTag(array $mediaIds, array $tagIds): Response
    {
        return $this->connector->send(new BulkTagMediaRequest($mediaIds, $tagIds));
    }

    public function bulkDelete(array $mediaIds): Response
    {
        return $this->connector->send(new BulkDeleteMediaRequest($mediaIds));
    }

    public function bulkAddToGalleries(array $mediaIds, array $galleryIds): Response
    {
        return $this->connector->send(new BulkAddToGalleriesRequest($mediaIds, $galleryIds));
    }

    public function generateUploadUrl(array $data): Response
    {
        return $this->connector->send(new GenerateUploadUrlRequest($data));
    }

    public function completeUpload(string $uploadId): Response
    {
        return $this->connector->send(new CompleteUploadRequest($uploadId));
    }
}
