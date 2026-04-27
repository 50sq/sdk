<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum RoleType: string
{
    case SuperAdmin = 'super_admin';
    case Admin = 'admin';
    case AccountOwner = 'account_owner';
    case AccountAdmin = 'account_admin';
    case AccountBillingAdmin = 'account_billing_admin';
    case AccountCollaborator = 'account_collaborator';
    case AccountEditor = 'account_editor';
    case AccountMember = 'account_member';
    case AccountGuest = 'account_guest';
    case PrimaryCustomer = 'primary_customer';
    case Customer = 'customer';
}
