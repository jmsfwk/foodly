<?php

namespace App\DataTransferObjects\Schema;

class Nutrition
{
    public function __construct(
        public ?string $calories,
        public ?string $fatContent,
        public ?string $saturatedFatContent,
        public ?string $carbohydrateContent,
        public ?string $sugarContent,
        public ?string $proteinContent,
    ) {
    }
}
