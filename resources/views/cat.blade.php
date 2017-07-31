@extends('layouts.cat_master')
    @section('content')
        <strong>{{ $cat->name }}'s</strong> breed is <a href="/cats/breed/{{ $cat->breed->name }}">{{ $cat->breed->name }}</a>, 
        and this cat was born on {{ $cat->date_of_birth }}.
    @stop