<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Galleries\AttachGalleryMediaRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\CreateGalleryRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\DeleteGalleryRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\GetGalleriesForPortfolioRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\GetGalleryBySlugRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\GetGalleryRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\ListGalleriesRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\ReorderGalleryMediaRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\UpdateGalleryRequest;
use FiftySq\Sdk\Requests\Admin\Galleries\UpdateGallerySettingsRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminGalleryResource extends BaseResource
{
    public function list(
        ?string $search = null,
        ?string $status = null,
        ?string $type = null,
        ?string $visibility = null,
        ?string $sortBy = null,
        ?string $sortDirection = null,
        ?int $perPage = null,
    ): Response {
        return $this->connector->send(new ListGalleriesRequest($search, $status, $type, $visibility, $sortBy, $sortDirection, $perPage));
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateGalleryRequest($data));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetGalleryRequest($uid));
    }

    public function forPortfolio(array $galleryUids): Response
    {
        return $this->connector->send(new GetGalleriesForPortfolioRequest($galleryUids));
    }

    public function getBySlug(string $slug): Response
    {
        return $this->connector->send(new GetGalleryBySlugRequest($slug));
    }

    public function update(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateGalleryRequest($uid, $data));
    }

    public function delete(string $uid): Response
    {
        return $this->connector->send(new DeleteGalleryRequest($uid));
    }

    public function updateSettings(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateGallerySettingsRequest($uid, $data));
    }

    public function attachMedia(string $uid, array $mediaIds): Response
    {
        return $this->connector->send(new AttachGalleryMediaRequest($uid, $mediaIds));
    }

    public function reorderMedia(string $uid, array $media): Response
    {
        return $this->connector->send(new ReorderGalleryMediaRequest($uid, $media));
    }
}
