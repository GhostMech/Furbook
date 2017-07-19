@extends('layouts.cat_master')
    @section('content')
        @if (count($cats) > 0)
            <h2>Here are all the cats!</h2>
            @foreach ($cats as $key => $cat)
               <div class="col-xs-4">
                    <p><a href="cats/{{ $cat->id }}">{{ $cat->name }}</a></p>
               </div>
            @endforeach
        @else 
            <h2>There are no cats</h2>
        @endif
        <div class="col-xs-12">
            <h3>Find a cat by <a href="/cats/breeds">breed</a></h3>
        </div>
    @stop