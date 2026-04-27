<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Support\Data\DataResource;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Lazy;

class AccountData extends DataResource
{
    public static array $authorizations = ['view', 'update'];

    public function __construct(
        #[MapInputName('uid')]
        public readonly string $id,
        public readonly string $uid,
        public readonly string $name,
        public readonly ?string $slug,
        public readonly ?string $business_name,
        public readonly ?string $phone,
        public readonly ?string $website,
        public readonly ?string $timezone,
        public readonly ?string $avatar,
        public readonly ?string $contact_email,
        public readonly AccountSettingsData $settings,
        #[DataCollectionOf(AddressData::class)]
        public readonly Lazy|null|DataCollection $addresses,
        public readonly int $maxUploadFileSize,
        public readonly bool $canWatermark,
        public readonly bool $canUseCustomSlugs,
    ) {}
}
