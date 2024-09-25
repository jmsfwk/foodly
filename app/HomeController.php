<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\Get;
use Tempest\View\View;
use function Tempest\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(RecipeRepository $repository): View
    {
        $recipes = collect($repository->all())
            ->sortBy('publishedAt');

        return view('home')->data(...compact('recipes'));
    }
}
