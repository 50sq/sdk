<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Account\GetAccountRequest;
use FiftySq\Sdk\Requests\Admin\Account\GetGallerySettingsRequest;
use FiftySq\Sdk\Requests\Admin\Account\UpdateAccountRequest;
use FiftySq\Sdk\Requests\Admin\Account\UpdateGallerySettingsRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminAccountResource extends BaseResource
{
    public function get(): Response
    {
        return $this->connector->send(new GetAccountRequest);
    }

    public function update(array $data): Response
    {
        return $this->connector->send(new UpdateAccountRequest($data));
    }

    public function gallerySettings(): Response
    {
        return $this->connector->send(new GetGallerySettingsRequest);
    }

    public function updateGallerySettings(array $data): Response
    {
        return $this->connector->send(new UpdateGallerySettingsRequest($data));
    }
}
