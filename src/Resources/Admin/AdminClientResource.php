<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Clients\AddClientUserRequest;
use FiftySq\Sdk\Requests\Admin\Clients\CreateClientRequest;
use FiftySq\Sdk\Requests\Admin\Clients\DeleteClientRequest;
use FiftySq\Sdk\Requests\Admin\Clients\GetClientRequest;
use FiftySq\Sdk\Requests\Admin\Clients\ListClientsRequest;
use FiftySq\Sdk\Requests\Admin\Clients\RemoveClientUserRequest;
use FiftySq\Sdk\Requests\Admin\Clients\UpdateClientRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminClientResource extends BaseResource
{
    public function list(?int $perPage = null): Response
    {
        return $this->connector->send(new ListClientsRequest($perPage));
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateClientRequest($data));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetClientRequest($uid));
    }

    public function update(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateClientRequest($uid, $data));
    }

    public function delete(string $uid): Response
    {
        return $this->connector->send(new DeleteClientRequest($uid));
    }

    public function addUser(string $uid, array $data): Response
    {
        return $this->connector->send(new AddClientUserRequest($uid, $data));
    }

    public function removeUser(string $uid, string $userUid): Response
    {
        return $this->connector->send(new RemoveClientUserRequest($uid, $userUid));
    }
}
