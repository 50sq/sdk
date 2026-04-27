<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Data;

use FiftySq\Sdk\Enums\Disk;
use Spatie\LaravelData\Data;

class SignedUploadUrlData extends Data
{
    public array $native = [];

    public function __construct(
        public readonly Disk $disk,
        public readonly string $key,
        public readonly string $url,
        public readonly array $headers,
    ) {
        $this->native = [
            'x-amz-acl' => $this->headers['x-amz-acl'] ?? null,
            'Expires' => $this->headers['Expires'] ?? null,
            'Content-Type' => $this->headers['Content-Type'] ?? null,
            'Content-Length' => $this->headers['Content-Length'] ?? null,
        ];
    }
}
