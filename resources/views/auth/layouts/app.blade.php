<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BKFA') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'BKFA') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <style>
                body {
                    background: #f39c12;
                }

                select {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    -ms-appearance: none;
                    appearance: none;
                    outline: 0;
                    box-shadow: none;
                    border: 0 !important;
                    background: #3e7cb4;
                    color: #FFF;
                    background-image: none;
                }

                select option{
                    background: #fff;
                    color: #000;
                }
                /* Custom Select */

                .select {
                    position: relative;
                    display: block;
                    width: 10em;
                    height: 3em;
                    line-height: 3;
                    background: #2c3e50;
                    overflow: hidden;
                    border-radius: .25em;
                }

                select {
                    width: 100%;
                    height: 100%;
                    margin: 0;
                    padding: 0 0 0 .5em;
                    color: #fff;
                    cursor: pointer;
                }

                select::-ms-expand {
                    display: none;
                }
                /* Arrow */

                .select::after {
                    content: '\25BC';
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    padding: 0 1em;
                    background: #B70D05;
                    pointer-events: none;
                }
                /* Transition */

                .select:hover::after {
                    color: #f39c12;
                }

                .select::after {
                    -webkit-transition: .25s all ease;
                    -o-transition: .25s all ease;
                    transition: .25s all ease;
                }
                </style>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav mr-auto">
                        <form action="{{ route('switchLang') }}" class="form-lang" method="post">
                            <div class="select">
                                <select name="locale" onchange='this.form.submit();'>
                                    <option value="en">{{ trans('sub.lang.en') }}</option>
                                    <option value="vi" {{ Lang::locale()==='vi' ? 'selected' : '' }}>{{ trans('sub.lang.vi') }}</option>
                                </select>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </ul> --}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ Lang::get('sub.login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ Lang::get('sub.register') }}</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->ten }} <span class="caret"></span>
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ Lang::get('sub.logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>