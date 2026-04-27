<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use Spatie\LaravelData\Data;

class UploadUrlData extends Data
{
    public function __construct(
        public readonly ?string $upload_id,
        public readonly ?string $media_id,
        public readonly ?string $file_name,
        public readonly ?string $file_original_name,
        public readonly ?string $account_id,
        public readonly ?array $native,
        public readonly SignedUploadUrlData $signedRequest,
    ) {}
}
