<?php

declare(strict_types=1);

namespace App\NotificationProvider;

use App\Entity\UserDevice;
use App\Enum\DeviceType;
use App\NotificationProvider\PushDeviceType\PushProviderFactory;

abstract class AbstractPushProvider
{
    protected function getPushProvider(UserDevice $device): NotificationProviderInterface
    {
        $pushProviderFactory = new PushProviderFactory();

        return match ($device->getType()) {
            DeviceType::IOS => $pushProviderFactory->createIOsPushProvider(),
            DeviceType::ANDROID => $pushProviderFactory->createAndroidPushProvider(),
        };
    }
}
