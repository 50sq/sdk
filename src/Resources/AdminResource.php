<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Resources\Admin\AdminAccountResource;
use FiftySq\Sdk\Resources\Admin\AdminAlbumResource;
use FiftySq\Sdk\Resources\Admin\AdminClientResource;
use FiftySq\Sdk\Resources\Admin\AdminFormResource;
use FiftySq\Sdk\Resources\Admin\AdminGalleryResource;
use FiftySq\Sdk\Resources\Admin\AdminMediaResource;
use FiftySq\Sdk\Resources\Admin\AdminPortfolioResource;
use FiftySq\Sdk\Resources\Admin\AdminProjectResource;
use FiftySq\Sdk\Resources\Admin\AdminTagResource;
use FiftySq\Sdk\Resources\Admin\AdminTeamResource;
use Saloon\Http\BaseResource;

class AdminResource extends BaseResource
{
    public function galleries(): AdminGalleryResource
    {
        return new AdminGalleryResource($this->connector);
    }

    public function media(): AdminMediaResource
    {
        return new AdminMediaResource($this->connector);
    }

    public function forms(): AdminFormResource
    {
        return new AdminFormResource($this->connector);
    }

    public function albums(): AdminAlbumResource
    {
        return new AdminAlbumResource($this->connector);
    }

    public function tags(): AdminTagResource
    {
        return new AdminTagResource($this->connector);
    }

    public function projects(): AdminProjectResource
    {
        return new AdminProjectResource($this->connector);
    }

    public function clients(): AdminClientResource
    {
        return new AdminClientResource($this->connector);
    }

    public function team(): AdminTeamResource
    {
        return new AdminTeamResource($this->connector);
    }

    public function account(): AdminAccountResource
    {
        return new AdminAccountResource($this->connector);
    }

    public function portfolio(): AdminPortfolioResource
    {
        return new AdminPortfolioResource($this->connector);
    }
}
