<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\Get;
use Tempest\Http\Responses\NotFound;
use function Tempest\view;

final readonly class RecipeController
{
    public function __construct(private readonly RecipeRepository $recipes)
    {
    }

    #[Get('/recipes/{slug}')]
    public function __invoke(string $slug): mixed
    {
        $recipe = $this->recipes->get($slug);
        if (!$recipe) {
            return new NotFound();
        }

        return view('recipe')->data(...compact('recipe'));
    }
}
