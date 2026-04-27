<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Devices\ListDevicesRequest;
use FiftySq\Sdk\Requests\Devices\RegisterDeviceRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class DeviceResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListDevicesRequest);
    }

    public function register(array $data): Response
    {
        return $this->connector->send(new RegisterDeviceRequest($data));
    }
}
