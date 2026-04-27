<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\DeviceType;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class DeviceData extends Data
{
    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly DeviceType $type,
        #[MapInputName('device_id')]
        public readonly string $deviceId,
        #[MapInputName('fcm_token')]
        public readonly ?string $fcmToken = null,
        #[MapInputName('bundle_id')]
        public readonly ?string $bundleId = null,
        #[MapInputName('device_model')]
        public readonly ?string $deviceModel = null,
        #[MapInputName('device_name')]
        public readonly ?string $deviceName = null,
        #[MapInputName('os_version')]
        public readonly ?string $osVersion = null,
        #[MapInputName('app_version')]
        public readonly ?string $appVersion = null,
        #[MapInputName('app_build')]
        public readonly ?string $appBuild = null,
        public readonly ?string $locale = null,
        public readonly ?string $timezone = null,
        public readonly bool $active = true,
        public readonly bool $banned = false,
    ) {}
}
