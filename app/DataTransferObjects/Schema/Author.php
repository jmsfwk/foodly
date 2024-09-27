<?php

namespace App\DataTransferObjects\Schema;

use JsonSerializable;

class Author implements JsonSerializable
{
    public function __construct(
        public string $name,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            '@type' => 'Person',
            'name' => $this->name,
        ];
    }
}
