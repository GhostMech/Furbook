@extends('layouts.cat_master')
    @section('content')
        @if (count($cats) > 0)
            <h2>Here are all the cats!</h2>
            @foreach ($cats as $cat)
                <p><a href="/cats/{{ $cat->id }}">{{ $cat->name }}</a></p>
            @endforeach
        @else 
            <h2>There are no cats</h2>
        @endif
        <h3>Find a cat by <a href="/cats/breeds">breed</a></h3>
    @stop