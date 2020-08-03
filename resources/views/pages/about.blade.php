@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }} ?</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com" target="_blank">laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been built by <a href="https://linkedin.com/in/mohamed-karamoko-204594137">@Mohamed</a> for learning purposes.</strong>
                </p>
            </div>
        </div>
        <p>Feel free to help to improve the <a href="https://github.com/Mohamed-Karamoko/laracarte-project">code source</a>.</p>

        <hr>
        <h2>What is laramap ?</h2>
        <p>Laramap is the website by which {{ config('app.name') }} was inspired :)</p>
        <p>More info <a href="https://laramap.com/p/about">here</a>.</p>

        <hr>
        <h2>Wich tools and services are used in {{ config('app.name') }}?</h2>
        <p>Basically it's a built on Laravel &amp; Bootstrap. Built there's a bunch of services used for
         email and other sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop