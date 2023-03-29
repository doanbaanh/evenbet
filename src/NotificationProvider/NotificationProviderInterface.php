<?php

declare(strict_types=1);

namespace App\NotificationProvider;

use App\Entity\Message;
use App\Entity\User;

interface NotificationProviderInterface
{
    public function send(Message $message, User $user, array $options = []): void;
}
