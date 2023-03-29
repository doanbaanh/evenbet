<?php

declare(strict_types=1);

namespace App\NotificationProvider;

use App\Entity\Message;
use App\Entity\User;

class SmsProvider implements NotificationProviderInterface
{
    public function send(Message $message, User $user, array $options = []): void
    {
        $text = $message->getText();
        $destination = $user->getPhone();

        echo sprintf("Send SMS :: %s (%s) :: %s \n", $user->getName(), $destination, $text);
    }
}
