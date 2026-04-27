<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Enums;

enum DeviceType: string
{
    case iOS = 'ios';
    case Android = 'android';
    case API = 'api';
}
