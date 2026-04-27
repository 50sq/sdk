<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Tags\AttachTagsRequest;
use FiftySq\Sdk\Requests\Tags\CreateTagRequest;
use FiftySq\Sdk\Requests\Tags\DeleteTagRequest;
use FiftySq\Sdk\Requests\Tags\GetTaggedModelRequest;
use FiftySq\Sdk\Requests\Tags\ListTagsRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class TagResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListTagsRequest);
    }

    public function create(string $name): Response
    {
        return $this->connector->send(new CreateTagRequest($name));
    }

    public function attach(array $data): Response
    {
        return $this->connector->send(new AttachTagsRequest($data));
    }

    public function delete(string $tag): Response
    {
        return $this->connector->send(new DeleteTagRequest($tag));
    }

    public function taggedModel(array $params = []): Response
    {
        return $this->connector->send(new GetTaggedModelRequest($params));
    }
}
