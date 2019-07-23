<div style="background-color: darkgrey">
    <a href="{{route('llistaProds')}}">{{trans('web.catalog')}}</a> -
    <a href="{{route('contact')}}">{{trans('web.contact')}}</a> -
    <a href="{{route('privacy')}}">{{trans('web.privacy')}}</a> -
    <a href="{{route('canviIdioma','es')}}">ES</a> -
    <a href="/idioma/en">EN</a> -
        @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Hola {{Auth::user()->name}}</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
        @endif
</div>