<?php

namespace App\DataTransferObjects\Schema;

use JsonSerializable;

class HowToStep implements JsonSerializable
{
    public function __construct(
        public string $text,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            '@type' => 'HowToStep',
            'text' => $this->text,
        ];
    }
}
