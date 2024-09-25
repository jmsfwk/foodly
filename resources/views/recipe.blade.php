@extends('layout')
@section('title', $recipe->name)
@section('content')
    <h1 class="text-3xl font-bold my-8">{{ $recipe->name }}</h1>

    <h2 class="text-2xl font-bold my-4">Ingredients</h2>

    <ul class="list">
    @foreach($recipe->recipeIngredient as $ingredients)
        <li>{{ $ingredients }}</li>
    @endforeach
    </ul>

    <h2 class="text-2xl font-bold my-4">Method</h2>

    <ol class="list list-decimal">
    @foreach($recipe->recipeInstructions as $step)
        <li>{{ $step->text }}</li>
    @endforeach
    </ol>

    @isset($recipe->nutrition)
        <table class="table-auto my-4">
            <caption>Nutrition</caption>
            <tbody>
            @if($recipe->nutrition->calories)
            <tr>
                <th scope="row">Calories</th>
                <td>{{ $recipe->nutrition->calories }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->fatContent)
            <tr>
                <th scope="row">Fat</th>
                <td>{{ $recipe->nutrition->fatContent }}</td>
            </tr>
            @endif
            @if($recipe->nutrition->saturatedFatContent)
            <tr>
                <th scope="row">Saturated fat</th>
                <td>{{ $recipe->nutrition->saturatedFatContent }}</td>
            </tr>
            @endif
            </tbody>
        </table>
    @endisset

    <script type="application/ld+json">
        @json($recipe)
    </script>
@endsection
