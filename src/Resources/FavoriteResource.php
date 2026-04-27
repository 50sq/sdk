<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Favorites\AddFavoriteRequest;
use FiftySq\Sdk\Requests\Favorites\ListFavoritesRequest;
use FiftySq\Sdk\Requests\Favorites\RemoveFavoriteRequest;
use FiftySq\Sdk\Requests\Favorites\ToggleMediaFavoriteRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class FavoriteResource extends BaseResource
{
    public function list(?int $limit = null): Response
    {
        return $this->connector->send(new ListFavoritesRequest($limit));
    }

    public function add(array $data): Response
    {
        return $this->connector->send(new AddFavoriteRequest($data));
    }

    public function remove(array $data): Response
    {
        return $this->connector->send(new RemoveFavoriteRequest($data));
    }

    public function toggleMedia(string $galleryUid, string $mediaUid): Response
    {
        return $this->connector->send(new ToggleMediaFavoriteRequest($galleryUid, $mediaUid));
    }
}
