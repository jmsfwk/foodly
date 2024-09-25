<?php

namespace App\DataTransferObjects\Schema;

class Recipe
{
    public function __construct(
        public string $name,
        /** @var ?\DateTimeInterface */
        public mixed $datePublished = null,
        public ?Nutrition $nutrition = null,
        /** @var string[] */
        public array $recipeIngredient = [],
        /** @var \App\DataTransferObjects\Schema\HowToStep[] */
        public array $recipeInstructions = [],
    ) {
    }
}
