<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\DeviceType;

class UserDevice
{
    public function __construct(
        private string $uuid,
        private DeviceType $type
    ) {
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid(string $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return DeviceType
     */
    public function getType(): DeviceType
    {
        return $this->type;
    }

    /**
     * @param DeviceType $type
     */
    public function setType(DeviceType $type): void
    {
        $this->type = $type;
    }
}
