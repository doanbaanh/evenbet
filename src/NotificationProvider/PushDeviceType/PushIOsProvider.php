<?php

declare(strict_types=1);

namespace App\NotificationProvider\PushDeviceType;

use App\Entity\Message;
use App\Entity\User;
use App\NotificationProvider\NotificationProviderInterface;

class PushIOsProvider implements NotificationProviderInterface
{
    public function send(Message $message, User $user, array $options = []): void
    {
        $text = $message->getText();
        $destination = $user->getDevice()->getUuid();

        echo sprintf("Send Push :: %s (iOS) :: %s \n", $user->getName(), $text);
    }
}
