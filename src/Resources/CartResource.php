<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Cart\GetCartRequest;
use FiftySq\Sdk\Requests\Cart\UpdateCartItemRequest;
use FiftySq\Sdk\Requests\Cart\UpdateCartRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CartResource extends BaseResource
{
    public function get(string $galleryUid): Response
    {
        return $this->connector->send(new GetCartRequest($galleryUid));
    }

    public function update(string $galleryUid, array $data): Response
    {
        return $this->connector->send(new UpdateCartRequest($galleryUid, $data));
    }

    public function updateItem(string $galleryUid, array $data): Response
    {
        return $this->connector->send(new UpdateCartItemRequest($galleryUid, $data));
    }
}
