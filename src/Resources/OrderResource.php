<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Orders\GetOrderRequest;
use FiftySq\Sdk\Requests\Orders\ListOrdersRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class OrderResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListOrdersRequest);
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetOrderRequest($uid));
    }
}
