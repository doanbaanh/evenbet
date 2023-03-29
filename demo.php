<?php

require_once "vendor/autoload.php";

use App\Entity\Message;
use App\Entity\User;
use App\Entity\UserDevice;
use App\Enum\DeviceType;
use App\NotificationProvider\EmailProvider;
use App\NotificationProvider\PushProvider;
use App\NotificationProvider\SmsProvider;
use App\Service\NotificationManager;

// сервисы
$faker = Faker\Factory::create();
$notificationManager = new NotificationManager();

// провайдеры
$emailProvider = new EmailProvider();
$smsProvider = new SmsProvider();
$pushProvider = new PushProvider();

// инициализация данных
/** @var User[] $users */
$users = [];
/** @var Message[] $messages */
$messages = [];
for ($i = 0; $i < 10; $i++) {
    $device = new UserDevice(
        uuid: $faker->uuid,
        type: $faker->randomElement(array_values(DeviceType::cases()))
    );

    $users[] = new User(
        name: $faker->name,
        email: $faker->email,
        phone: $faker->phoneNumber,
        device: $device
    );

    $messages[] = new Message($faker->text(32));
}

// отправка уведомлений
$notificationManager->notify($faker->randomElement($messages), $users, [$emailProvider, $smsProvider]);
$notificationManager->notify($faker->randomElement($messages), $users, $pushProvider);
