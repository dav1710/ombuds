<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token">
    {{-- <link rel="shortcut icon" href="{{ asset('img/icons/favicon.ico') }}" type="image/x-icon"> --}}
    <link href="{{ asset('css/style.css?v=' . date('YmdHis')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/preloader.css?v=' . date('YmdHis')) }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    @if(app()->getLocale() === 'ru' || app()->getLocale() === 'en')
        <style>
            * {
                font-family: segoe !important;
            }
        </style>
    @endif

    @if(app()->getLocale() === 'en')

    @endif

    @yield('styles')

    <title>@yield('title')</title>
</head>
<body>
    {{-- @include('components.preloader') --}}

    <header>
        <div class="header_one">
            <div class="images">
                <a href="javascript:void(0);" id="invert-mode">
                    <img src="{{ asset('img/invert.png') }}">
                </a>
                <a href="javascript:void(0);" id="change-font-size">
                    <img src="{{ asset('img/font.png') }}">
                </a>
            </div>
            <div class="hot_line_content">
                <div class="hot_line">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/hot-line.png') }}">
                    </a>
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/116.png') }}">
                    </a>
                </div>
                <div class="messanger">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/messanger.png') }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="header_two">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/crest.png') }}">
            </a>
            <h4>
                {!! __('main.title') !!}
            </h4>
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/ombuds_logo.png') }}">
            </a>
        </div>
        <div class="header_three">
            <div id="current-language" class="lang-item">
                <span class="vertical-center">{{ app()->getLocale() == 'am' ? __('main.armenian') : (app()->getLocale() == 'ru' ? __('main.russian') : __('main.english')) }}</span>
                <img src="{{ asset('img/lang_arrow.png') }}" id="lang-arrow" class="vertical-center">
            </div>
            <div id="droped-languages">
                <a href="{{ app()->getLocale() == 'am' ? 'javascript:void(0)' : asset('locale/am') }}" class="lang-item">
                    <span class="vertical-center">{{ __('main.armenian') }}</span>
                    @if(app()->getLocale() == 'am')
                        <img src="{{ asset('img/lang_tick.png') }}" class="chosen-language vertical-center">
                    @endif
                </a>
                <a href="{{ app()->getLocale() == 'en' ? 'javascript:void(0)' : asset('locale/en') }}" class="lang-item">
                    <span class="vertical-center">{{ __('main.english') }}</span>
                    @if(app()->getLocale() == 'en')
                        <img src="{{ asset('img/lang_tick.png') }}" class="chosen-language vertical-center">
                    @endif
                </a>
            </div>
            <div id="search-block" class="vertical-center">
                <form action="" method="get" id="search-form">
                    @csrf
                    <a href="">
                        <img src="{{ asset('img/search.png') }}">
                    </a>
                    <input type="text" name="search" id="search-key" placeholder="{{ __('main.search') }}" onfocus="if (this.placeholder == '{{ __('main.search') }}') {this.placeholder = '';}" onblur="if (this.placeholder == '') {this.placeholder = '{{ __('main.search') }}';}">
                </form>
            </div>
        </div>

    </header>
    <nav>
        <div class="link-item vertical-center">
            <a class="nav_link {{ Request::is('contact_us') ? 'active_nav' : '' }}" href="{{ route('contactUs') }}" data-type="contact">
                {{ __('main.contact_us') }}
            </a>
        </div>
        <div class="link-item vertical-center">
            <a class="nav_link {{ Request::is('directions') ? 'active_nav' : '' }}" href="{{ route('directions') }}" data-type="contact">
                ԱՇԽԱՏԱՆՔԻ ՈւՂՂՈւԹՅՈւՆՆԵՐ
            </a>
        </div>
        <div class="link-item vertical-center">
            <a class="nav_link {{ Request::is('reports') ? 'active_nav' : '' }}" href="{{ route('reports') }}" data-type="contact">
                ՀԱՂՈՐԴՈւՄՆԵՐ և ԶԵԿՈւՅՑՆԵՐ
            </a>
        </div>
        <div class="link-item vertical-center">
            <a class="nav_link {{ Request::is('courses') ? 'active_nav' : '' }}" href="{{ route('courses') }}" data-type="contact">
                ԿՐԹՈւԹՅՈւՆ և ԻՐԱԶԵԿՈւՄ
            </a>
        </div>
        @if (Route::current()->getName() != 'home')
        <div class="a-header">
            <input type="checkbox" name="main-nav" id="main-nav" class="burger-check">
            <label for="main-nav" class="burger menu"><span></span></label>
            <ul>
                    <li><a class="{{ Request::is('cooperation') ? 'active_nav' : '' }}" href="{{ route('cooperation') }}">ՄԻՋԱԶԳԱՅԻՆ ՀԱՄԱԳՈՐԾԱԿՑՈւԹՅՈւՆ</a></li>
                    <li><a class="{{ Request::is('media') ? 'active_nav' : '' }}" href="{{ route('media') }}" class="active">ՄԵԴԻԱ ԿԵՆՏՐՈՆ</a></li>
                    <li><a class="{{ Request::is('about') ? 'active_nav' : '' }}" href="{{ route('about') }}">ՄԵՐ ՄԱՍԻՆ</a></li>
            </ul>
        </div>
        @endif
    </nav>

    <div id="content-block">
        <div id="content">
            @yield('content')
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="leaflet_map">
                <div id="map" data-x="40.18615679287163" data-y="44.5149837585256">
                    <img src="{{ asset('img/vector.png') }}" class="vector_1" alt="vector_1">
                    <img src="{{ asset('img/vector.png') }}" class="vector_2" alt="vector_2">
                    <img src="{{ asset('img/vector.png') }}" class="vector_3" alt="vector_3">
                </div>
            </div>
            <div class="footer_content">
                <div id="left-block">
                    <div class="left-block-item">
                        <img src="{{ asset('img/icons/phone.png') }}" class="vertical-center">
                        <span class="vertical-center" style="margin-right: 8px">
                            116 (Երկ–Ուրբ) +374 (010) 537651 (Շբթ–Կիր)
                        </span>
                        <img src="{{ asset('img/icons/whatsapp.png') }}" alt="whatsapp">
                        <img src="{{ asset('img/icons/viber.png') }}" alt="viber">
                    </div>
                    <div class="left-block-item">
                        <img src="{{ asset('img/icons/mail.png') }}" class="vertical-center">
                        <span class="vertical-center">ombuds@ombuds.am</span>
                    </div>
                    <div class="left-block-item">
                        <img src="{{ asset('img/icons/web.png') }}" class="vertical-center">
                        <span class="vertical-center">www.ombuds.am</span>
                    </div>
                    <div class="left-block-item" id="location-block">
                        <img src="{{ asset('img/icons/location.png') }}" class="vertical-center" id="location-image">
                        <span class="vertical-center" style="margin-left: 27px;">Պուշկին փ․56ա, Երևան</span>
                    </div>
                </div>
                <div id="right-block">
                    <div class="social_media_1">
                        <a href="javascript:void(0);" id="subscribe-block-telegram" class="subscribe-block" style="margin-left: 25px">
                            <img src="{{ asset('img/icons/facebook.png') }}">
                            <span style="margin-left: 15px">Facebook</span>
                        </a>
                        <a href="javascript:void(0);" id="subscribe-block-facebook" class="subscribe-block">
                            <img src="{{ asset('img/icons/insta.png') }}">
                            <span>Instagram</span>
                        </a>
                    </div>
                    <div class="social_media_2">
                        <a href="javascript:void(0);" class="subscribe-block" style="margin-left: 20px">
                            <img src="{{ asset('img/icons/twitter.png') }}">
                            <span>Twitter</span>
                        </a>
                        <a href="javascript:void(0);" class="subscribe-block">
                            <img src="{{ asset('img/icons/messanger.png') }}" style="margin-left: 30px">
                            <span>Messenger</span>
                        </a>
                    </div>
                    <div class="social_media_3">
                        <a href="javascript:void(0);" class="subscribe-block" style="float: right; margin-right: 15px;">
                            <img src="{{ asset('img/icons/egov.png') }}">
                        </a>
                    </div>
                    <div class="social_media_3">
                        <a href="javascript:void(0);" class="subscribe-block" style="float: right; margin-right: 15px;">
                            <img src="{{ asset('img/icons/e_mail.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright-and-powered-block">
            <span style="font-family: segoe;">&copy;{{ __('main.copyright') }}</span>
            <span>
                <a href="https://www.locator.am/" target="_blank">
                    {{ __('main.created_by') }}
                </a>
            </span>
        </div>
    </footer>



    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/popper.min.js')}}" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js?v=' . date('YmdHis')) }}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    @yield('scripts')
</body>
</html>
