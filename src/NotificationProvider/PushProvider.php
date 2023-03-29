<?php

declare(strict_types=1);

namespace App\NotificationProvider;

use App\Entity\Message;
use App\Entity\User;

class PushProvider extends AbstractPushProvider implements NotificationProviderInterface
{
    public function send(Message $message, User $user, array $options = []): void
    {
        $device = $user->getDevice();
        $provider = $this->getPushProvider($device);

        $provider->send($message, $user, $options);
    }
}
