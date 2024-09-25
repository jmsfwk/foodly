@use(App\RecipeController)
@extends('layout')
@section('title', 'foodly')
@section('content')
    <h1 class="text-3xl font-bold mb-8">Latest Recipes</h1>

    <ul class="list">
        @php
        /** @var \App\DataTransferObjects\Schema\Recipe $recipe */
        @endphp
        @foreach($recipes as $slug => $recipe)
            <li>
                <time datetime="{{ $recipe->datePublished->format(DATE_ATOM) }}">
                    {{ $recipe->datePublished->format('d F Y') }}
                </time>
                <a href="{{ \Tempest\uri(RecipeController::class, slug: $slug) }}" class="font-bold">{{ $recipe->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
