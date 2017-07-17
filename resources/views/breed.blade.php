@extends('layouts.cat_master')
    @section('header')
        @include('partials.header')
    @stop
    @section('content')
        @if ($breedname === 'Breed Not Found')
            <h2 class="text text-danger">{{ $breedname }}</h2>
        @else
            <h2 class="text text-success">{{ $breedname }}</h2>
            @if (count($cats) > 0)
                @foreach ($cats as $cat)
                    <p><a href="/cats/{{ $cat->id }}">{{ $cat->name }}</a></p>
                @endforeach
            @else
                <p>There are no cats of this breed.</p>
            @endif
        @endif
    @stop