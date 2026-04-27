<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Checkout\CheckoutRequest;
use FiftySq\Sdk\Requests\Downloads\DownloadMediaRequest;
use FiftySq\Sdk\Requests\Downloads\GetDownloadOptionsRequest;
use FiftySq\Sdk\Requests\Galleries\CreateGalleryRequest;
use FiftySq\Sdk\Requests\Galleries\GetGalleryMediaRequest;
use FiftySq\Sdk\Requests\Galleries\GetGalleryProductsRequest;
use FiftySq\Sdk\Requests\Galleries\GetGalleryRequest;
use FiftySq\Sdk\Requests\Galleries\ListGalleriesRequest;
use FiftySq\Sdk\Requests\Galleries\ShowGalleryMediaRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GalleryResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListGalleriesRequest);
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateGalleryRequest($data));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetGalleryRequest($uid));
    }

    public function media(string $galleryUid, ?int $limit = null): Response
    {
        return $this->connector->send(new GetGalleryMediaRequest($galleryUid, $limit));
    }

    public function showMedia(string $galleryUid): Response
    {
        return $this->connector->send(new ShowGalleryMediaRequest($galleryUid));
    }

    public function products(string $galleryUid): Response
    {
        return $this->connector->send(new GetGalleryProductsRequest($galleryUid));
    }

    public function downloadMedia(string $galleryUid, string $mediaUid, array $data = []): Response
    {
        return $this->connector->send(new DownloadMediaRequest($galleryUid, $mediaUid, $data));
    }

    public function downloadOptions(string $galleryUid, string $mediaUid): Response
    {
        return $this->connector->send(new GetDownloadOptionsRequest($galleryUid, $mediaUid));
    }

    public function checkout(string $galleryUid, array $data): Response
    {
        return $this->connector->send(new CheckoutRequest($galleryUid, $data));
    }
}
