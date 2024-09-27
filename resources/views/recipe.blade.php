@extends('layout')
@section('title', $recipe->name)
@section('content')
    <h1 class="text-3xl font-bold my-8">{{ $recipe->name }}</h1>

    @isset($recipe->description)
        <p>{{ $recipe->description }}</p>
    @endisset

    <h2 class="text-2xl font-bold my-4">Ingredients</h2>

    <ul class="list">
    @foreach($recipe->recipeIngredient as $ingredients)
        <li>{{ $ingredients }}</li>
    @endforeach
    </ul>

    <h2 class="text-2xl font-bold my-4">Method</h2>

    <ol class="list list-decimal">
    @foreach($recipe->recipeInstructions as $step)
        <li>{!! nl2br(e($step->text)) !!}</li>
    @endforeach
    </ol>

    @isset($recipe->nutrition)
        <table class="table-auto my-4">
            <caption>Nutrition</caption>
            <tbody>
            @if($recipe->nutrition->calories ?? false)
            <tr>
                <th scope="row" class="text-right">Calories</th>
                <td>{{ $recipe->nutrition->calories }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->fatContent ?? false)
            <tr>
                <th scope="row" class="text-right">Fat</th>
                <td>{{ $recipe->nutrition->fatContent }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->saturatedFatContent ?? false)
            <tr>
                <th scope="row" class="text-right">Saturated fat</th>
                <td>{{ $recipe->nutrition->saturatedFatContent }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->carbohydrateContent ?? false)
            <tr>
                <th scope="row" class="text-right">Carbohydrate</th>
                <td>{{ $recipe->nutrition->carbohydrateContent }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->sugarContent ?? false)
            <tr>
                <th scope="row" class="text-right">Sugar</th>
                <td>{{ $recipe->nutrition->sugarContent }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->sodiumContent ?? false)
            <tr>
                <th scope="row" class="text-right">Sodium</th>
                <td>{{ $recipe->nutrition->sodiumContent }}</td>
            </tr>
            @endif
            </tbody>
        </table>
    @endisset

    <script type="application/ld+json">
        @json($recipe, JSON_UNESCAPED_SLASHES)
    </script>
@endsection
