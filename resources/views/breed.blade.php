@extends('layouts.cat_master')
    @section('header')
        @include('partials.header')
    @stop
    @section('content')
        @if ($breedname === 'Breed Not Found')
            <h2>{{ $breedname }}</h2>
        @else
            <h2>{{ $breedname }}</h2>
            @foreach ($cats as $cat)
                <p><a href="/cats/{{ $cat->id }}">{{ $cat->name }}</a></p>
            @endforeach
        @endif
    @stop