<?php

namespace App\DataTransferObjects\Schema;

use JsonSerializable;

class Nutrition implements JsonSerializable
{
    public function __construct(
        public ?string $calories = null,
        public ?string $fatContent = null,
        public ?string $saturatedFatContent = null,
        public ?string $carbohydrateContent = null,
        public ?string $sodiumContent = null,
        public ?string $sugarContent = null,
        public ?string $proteinContent = null,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            '@type' => 'NutritionInformation',
            ...(array)$this,
        ];
    }
}
