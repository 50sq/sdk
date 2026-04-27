<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Client\ListClientMembersRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ClientResource extends BaseResource
{
    public function members(): Response
    {
        return $this->connector->send(new ListClientMembersRequest);
    }
}
