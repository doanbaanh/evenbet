<?php

declare(strict_types=1);

namespace App\Entity;

class Message
{
    public function __construct(
        private string $text,
    ) {
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }
}
