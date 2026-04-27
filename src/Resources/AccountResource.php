<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Accounts\GetAccountCustomerRequest;
use FiftySq\Sdk\Requests\Accounts\GetAccountFeedRequest;
use FiftySq\Sdk\Requests\Accounts\GetAccountRequest;
use FiftySq\Sdk\Requests\Accounts\GetAccountRoleRequest;
use FiftySq\Sdk\Requests\Accounts\ListAccountsRequest;
use FiftySq\Sdk\Requests\Accounts\UpdateAccountDetailsRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AccountResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListAccountsRequest);
    }

    public function get(): Response
    {
        return $this->connector->send(new GetAccountRequest);
    }

    public function updateDetails(array $data): Response
    {
        return $this->connector->send(new UpdateAccountDetailsRequest($data));
    }

    public function feed(): Response
    {
        return $this->connector->send(new GetAccountFeedRequest);
    }

    public function customer(): Response
    {
        return $this->connector->send(new GetAccountCustomerRequest);
    }

    public function role(): Response
    {
        return $this->connector->send(new GetAccountRoleRequest);
    }
}
