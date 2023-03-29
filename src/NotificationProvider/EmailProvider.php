<?php

declare(strict_types=1);

namespace App\NotificationProvider;

use App\Entity\Message;
use App\Entity\User;

class EmailProvider implements NotificationProviderInterface
{
    public function send(Message $message, User $user, array $options = []): void
    {
        $text = $message->getText();
        $destination = $user->getEmail();

        echo sprintf("Send Email :: %s (%s) :: %s \n", $user->getName(), $destination, $text);
    }
}
