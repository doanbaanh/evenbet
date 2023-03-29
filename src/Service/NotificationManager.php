<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Message;
use App\Entity\User;
use App\NotificationProvider\NotificationProviderInterface;

class NotificationManager
{
    /**
     * @param Message $message
     * @param User[] $users
     * @param NotificationProviderInterface|NotificationProviderInterface[] $providers
     * @return void
     */
    public function notify(Message $message, array $users, NotificationProviderInterface|array $providers): void
    {
        if ($providers instanceof NotificationProviderInterface) {
            $providers = [$providers];
        }

        foreach ($providers as $provider) {
            foreach ($users as $user) {
                $provider->send($message, $user);
            }
        }
    }
}
