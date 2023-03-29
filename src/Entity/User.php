<?php

declare(strict_types=1);

namespace App\Entity;

class User
{
    public function __construct(
        private string $name,
        private ?string $email = null,
        private ?string $phone = null,
        private ?UserDevice $device = null,
    ) {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return UserDevice|null
     */
    public function getDevice(): ?UserDevice
    {
        return $this->device;
    }

    /**
     * @param UserDevice|null $device
     */
    public function setDevice(?UserDevice $device): void
    {
        $this->device = $device;
    }
}
