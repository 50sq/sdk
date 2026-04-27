<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Albums\GetAlbumRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlbumResource extends BaseResource
{
    public function get(string $albumUid): Response
    {
        return $this->connector->send(new GetAlbumRequest($albumUid));
    }
}
