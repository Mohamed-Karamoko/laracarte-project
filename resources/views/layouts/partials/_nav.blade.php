<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="
            #navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('root_path') }}" class="navbar-brand">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Home</a></li>
                <li class="{{ set_active_route('about_path')}}"><a href="{{ route('about_path') }}">About</a></li>
                <li><a href="#artisans">Artisans</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopop="
                    true" aria-expanded="false">Planet <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://laravel.com">Laravel.com</a></li>
                        <li><a href="https://laravel.io">Laravel.io</a></li>
                        <li><a href="https://laracasts.com">Laracasts</a></li>
                        <li><a href="https://larajobs.com">Larajobs</a></li>
                        <li><a href="https://laravel-news.com">Laravel News</a></li>
                        <li><a href="https://larachat.co">Larachat</a></li>
                    </ul>
                </li>
                <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path') }}">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#login">Login</a></li>
                <li><a href="#register">Register</a></li>
            </ul>
        </div>
    </div>
</nav>