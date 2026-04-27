<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum Disk: string
{
    case R2 = 'r2';
    case R2Public = 'r2_public';
    case S3 = 's3';
}
