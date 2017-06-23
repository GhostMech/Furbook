@extends('layouts.cat_master')
    @section('header')
        @include('partials.header')
    @stop
    @section('content')
        <h2>Cat Breeds</h2>  
        @foreach ($breeds as $breed)
            <p><a href="/cats/breed/{{ strtolower($breed->name) }}">{{ $breed->name }}</a></p>
        @endforeach
    @stop