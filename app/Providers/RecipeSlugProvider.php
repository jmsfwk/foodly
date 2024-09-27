<?php

namespace App\Providers;

use App\RecipeRepository;
use Generator;
use Tempest\Http\DataProvider;

class RecipeSlugProvider implements DataProvider
{
    public function __construct(private readonly RecipeRepository $recipes)
    {
    }

    public function provide(): Generator
    {
        foreach ($this->recipes->all() as $slug => $_) {
            yield ['slug' => $slug];
        }
    }
}
