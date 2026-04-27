<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Albums\AttachAlbumGalleryRequest;
use FiftySq\Sdk\Requests\Admin\Albums\CreateAlbumRequest;
use FiftySq\Sdk\Requests\Admin\Albums\DeleteAlbumRequest;
use FiftySq\Sdk\Requests\Admin\Albums\DetachAlbumGalleryRequest;
use FiftySq\Sdk\Requests\Admin\Albums\GetAlbumRequest;
use FiftySq\Sdk\Requests\Admin\Albums\ListAlbumsRequest;
use FiftySq\Sdk\Requests\Admin\Albums\UpdateAlbumRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminAlbumResource extends BaseResource
{
    public function list(?int $perPage = null): Response
    {
        return $this->connector->send(new ListAlbumsRequest($perPage));
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateAlbumRequest($data));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetAlbumRequest($uid));
    }

    public function update(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateAlbumRequest($uid, $data));
    }

    public function delete(string $uid): Response
    {
        return $this->connector->send(new DeleteAlbumRequest($uid));
    }

    public function attachGallery(string $uid, array $galleryIds): Response
    {
        return $this->connector->send(new AttachAlbumGalleryRequest($uid, $galleryIds));
    }

    public function detachGallery(string $uid, array $galleryIds): Response
    {
        return $this->connector->send(new DetachAlbumGalleryRequest($uid, $galleryIds));
    }
}
