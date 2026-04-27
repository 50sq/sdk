<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\User\GetUserRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class UserResource extends BaseResource
{
    public function get(): Response
    {
        return $this->connector->send(new GetUserRequest);
    }
}
