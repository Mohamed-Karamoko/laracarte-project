@extends('errors::layout')

@section('title', 'Page not found')

@section('message', 'Oups!! Sorry, page not found')

<div class="container">
    <p><a href="{{ route('root_path')}}">Retour</a></p>
</div>