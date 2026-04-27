<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Team\CancelInviteRequest;
use FiftySq\Sdk\Requests\Admin\Team\InviteTeamMemberRequest;
use FiftySq\Sdk\Requests\Admin\Team\ListTeamRequest;
use FiftySq\Sdk\Requests\Admin\Team\RemoveMemberRequest;
use FiftySq\Sdk\Requests\Admin\Team\ResendInviteRequest;
use FiftySq\Sdk\Requests\Admin\Team\UpdateMemberRoleRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminTeamResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListTeamRequest);
    }

    public function invite(string $email, string $role): Response
    {
        return $this->connector->send(new InviteTeamMemberRequest($email, $role));
    }

    public function updateRole(string $uid, string $role): Response
    {
        return $this->connector->send(new UpdateMemberRoleRequest($uid, $role));
    }

    public function remove(string $uid): Response
    {
        return $this->connector->send(new RemoveMemberRequest($uid));
    }

    public function cancelInvite(string $uid): Response
    {
        return $this->connector->send(new CancelInviteRequest($uid));
    }

    public function resendInvite(string $uid): Response
    {
        return $this->connector->send(new ResendInviteRequest($uid));
    }
}
