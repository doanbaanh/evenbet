<?php

declare(strict_types=1);

namespace App\Enum;

enum DeviceType: string
{
    case IOS = 'iOS';
    case ANDROID = 'Android';
}
