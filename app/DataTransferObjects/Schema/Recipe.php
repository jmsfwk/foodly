<?php

namespace App\DataTransferObjects\Schema;

use JsonSerializable;

class Recipe implements JsonSerializable
{
    public function __construct(
        public string $name,
        public ?array $image = null,
        public ?array $author = null,
        /** @var ?\DateTimeInterface */
        public mixed $datePublished = null,
        public ?string $description = null,
        public ?string $recipeCuisine = null,
        public ?string $prepTime = null,
        public ?string $cookTime = null,
        public ?string $totalTime = null,
        public ?string $keywords = null,
        public ?string $recipeYield = null,
        public ?string $recipeCategory = null,
        public ?Nutrition $nutrition = null,
        public ?array $aggregateRating = null,
        /** @var string[] */
        public array $recipeIngredient = [],
        /** @var \App\DataTransferObjects\Schema\HowToStep[] */
        public array $recipeInstructions = [],
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            '@context' => 'http://schema.org',
            '@type' => 'Recipe',
            ...(array)$this,
            'datePublished' => $this->datePublished->format(DATE_ATOM),
        ];
    }
}
