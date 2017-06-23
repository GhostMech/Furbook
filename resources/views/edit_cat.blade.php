@extends('layouts.cat_master')
    @section('header')
        @include('partials.header')
    @stop
    @section('content')
        @if (! is_null($cat))
            <h3>Edit Cat: {{ $cat->name }}
        @else 
            --TODO: need a redirect (if no valid cat) here--
        @endif    
    @stop