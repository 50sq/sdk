<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Carbon\CarbonInterface;
use FiftySq\Sdk\Enums\PaymentGateway;
use FiftySq\Sdk\Support\Data\DataResource;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Lazy;

class ClientData extends DataResource
{
    public static array $authorizations = [];

    public function __construct(
        public readonly string $id,
        public readonly string $uid,
        public readonly string $account_id,
        public readonly string $owner_id,
        public readonly ?string $name,
        public readonly ?PaymentGateway $gateway,
        public readonly ?string $timezone,
        public readonly CarbonInterface $created_at,
        public readonly CarbonInterface $updated_at,
        #[DataCollectionOf(ClientUserData::class)]
        public readonly Lazy|DataCollection $users,
        public readonly UserData|Lazy $owner,
        public readonly GalleryOptionsData $options,
    ) {}
}
