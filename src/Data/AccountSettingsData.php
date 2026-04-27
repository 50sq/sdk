<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class AccountSettingsData extends Data
{
    public function __construct(
        public readonly bool $show_contact_email = true,
        public readonly bool $show_contact_phone = false,
        public readonly bool $show_address = false,
        public readonly bool $show_website_url = false,
    ) {}
}
