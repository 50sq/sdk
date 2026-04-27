<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Projects\CreateProjectRequest;
use FiftySq\Sdk\Requests\Admin\Projects\DeleteProjectRequest;
use FiftySq\Sdk\Requests\Admin\Projects\GetProjectRequest;
use FiftySq\Sdk\Requests\Admin\Projects\ListProjectsRequest;
use FiftySq\Sdk\Requests\Admin\Projects\UpdateProjectRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminProjectResource extends BaseResource
{
    public function list(?int $perPage = null): Response
    {
        return $this->connector->send(new ListProjectsRequest($perPage));
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateProjectRequest($data));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetProjectRequest($uid));
    }

    public function update(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateProjectRequest($uid, $data));
    }

    public function delete(string $uid): Response
    {
        return $this->connector->send(new DeleteProjectRequest($uid));
    }
}
