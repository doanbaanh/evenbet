<?php

declare(strict_types=1);

namespace App\NotificationProvider\PushDeviceType;

use App\NotificationProvider\NotificationProviderInterface;

class PushProviderFactory
{
    public function createIOsPushProvider(): NotificationProviderInterface
    {
        return new PushIOsProvider();
    }

    public function createAndroidPushProvider(): NotificationProviderInterface
    {
        return new PushAndroidProvider();
    }
}
