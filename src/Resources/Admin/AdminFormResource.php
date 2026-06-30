<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Forms\GetFormRequest;
use FiftySq\Sdk\Requests\Admin\Forms\ListFormsRequest;
use FiftySq\Sdk\Requests\Admin\Forms\SubmitFormRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminFormResource extends BaseResource
{
    public function list(?string $search = null, ?int $page = null, ?int $perPage = null): Response
    {
        return $this->connector->send(new ListFormsRequest($search, $page, $perPage));
    }

    public function get(string $uid): Response
    {
        return $this->connector->send(new GetFormRequest($uid));
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submit(string $uid, array $data): Response
    {
        return $this->connector->send(new SubmitFormRequest($uid, $data));
    }
}
