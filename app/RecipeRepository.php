<?php

namespace App;

use App\DataTransferObjects\Schema\Recipe;
use SplFileObject;
use Symfony\Component\Yaml\Yaml;
use function Tempest\map;

class RecipeRepository
{
    /**
     * @return iterable<Recipe>
     */
    public function all(): iterable
    {
        foreach (glob(__DIR__ . '/../content/*.yaml') as $path) {
            $file = new SplFileObject($path);
            $data = Yaml::parseFile($file->getRealPath(), Yaml::PARSE_DATETIME);

            yield $file->getBasename('.yaml') => map($data)->to(Recipe::class);
        }
    }

    public function get(string $slug): ?Recipe
    {
        foreach ($this->all() as $key => $recipe) {
            if ($key === $slug) {
                return $recipe;
            }
        }

        return null;
    }
}
