<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Tags\CreateTagRequest;
use FiftySq\Sdk\Requests\Admin\Tags\DeleteTagRequest;
use FiftySq\Sdk\Requests\Admin\Tags\ListTagsRequest;
use FiftySq\Sdk\Requests\Admin\Tags\UpdateTagRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminTagResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListTagsRequest);
    }

    public function create(string $name): Response
    {
        return $this->connector->send(new CreateTagRequest($name));
    }

    public function update(string $tag, string $name): Response
    {
        return $this->connector->send(new UpdateTagRequest($tag, $name));
    }

    public function delete(string $tag): Response
    {
        return $this->connector->send(new DeleteTagRequest($tag));
    }
}
