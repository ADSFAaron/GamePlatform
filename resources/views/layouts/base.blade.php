<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Website LOGO -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Website Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">

    <!-- Website CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"
          integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ=="
          crossorigin="anonymous"/>

    @livewireStyles
    @livewireScripts
</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    {{-- <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+123) 456 789" href="#"><span
                                        class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="topbar-menu right-menu">
                        <ul>
                            @if(Route::has('login'))
                                @auth
                                    {{-- Login User Type --}}
                                    @if(Auth::user()->utype === 'ADM')
                                        {{-- ADMIN--}}
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">{{__('string.my account')}}
                                                ({{Auth::user()->name}})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard"
                                                       href="{{ route('admin.dashboard') }}">{{__('string.dashboard')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="All Order"
                                                       href="{{route('admin.orders')}}">{{__('string.all orders')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Products"
                                                       href="{{route('admin.products')}}">{{__('string.all products')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Categories"
                                                       href="{{route('admin.categories')}}">{{__('string.categories')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Manage Home Slider"
                                                       href="{{route('admin.homeslider')}}">{{__('string.manage home slider')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Manage Home Categories"
                                                       href="{{route('admin.homecategories')}}">{{__('string.manage home categories')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Sale Setting"
                                                       href="{{route('admin.sale')}}">{{__('string.sale setting')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Contact Messages"
                                                       href="{{route('admin.contact')}}">{{__('string.contact messages')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Contact Messages"
                                                       href="{{route('admin.settings')}}">{{__('string.setting')}}</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a title="Logout" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('string.logout')}}</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                        {{-- NORMAL USER --}}
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">{{__('string.my account')}}
                                                ({{Auth::user()->name}})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="Dashboard"
                                                       href="{{ route('user.dashboard') }}">{{__('string.dashboard')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="My Orders"
                                                       href="{{ route('user.orders') }}">{{__('string.my orders')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Change Password"
                                                       href="{{ route('user.changepassword') }}">{{__('string.change password')}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Logout" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('string.logout')}}</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    {{-- Guest or Not Login --}}
                                    <li class="menu-item"><a title="Register or Login"
                                                             href="{{route('login')}}">{{__('string.login')}}</a></li>
                                    <li class="menu-item"><a title="Register or Login"
                                                             href="{{route('register')}}">{{__('string.register')}}</a>
                                    </li>
                                @endif
                            @endif
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                @php
                                    $lang = array(
                                        'en'=>'English',
                                        'zh-tw'=>'繁體中文',
                                    ) ;
                                    $langImages = array(
                                        'en'=>'https://lipis.github.io/flag-icon-css/flags/4x3/us.svg',
                                        'zh-tw'=>'https://lipis.github.io/flag-icon-css/flags/4x3/tw.svg'
                                    );

                                    //print_r($lang);
                                    //print_r($langImages);

                                    if (array_key_exists(app()->getLocale(),$lang))
                                    {
                                        echo "<a title=".$lang[app()->getLocale()]." href='#'><span class='img label-before'><img
                                            src=".$langImages[app()->getLocale()]." width='20'
                                            alt='lang-menu'></span>".$lang[app()->getLocale()]."<i class='fa fa-angle-down'
                                                                           aria-hidden='true'></i></a>";
                                    }

                                    echo '<ul class="submenu lang">';
                                    foreach ($lang as $langKey => $langValue)
                                    {
                                        if($langKey != app()->getLocale())
                                        {
                                            echo '<li class="menu-item"><a title="english"
                                                             href='.route('locale.set',$langKey).'><span
                                                class="img label-before"><img
                                                    src="'.$langImages[$langKey].'"
                                                    width="20" alt="lang-hun"></span>'.$langValue.'</a></li>';

                                        }

                                    }

                                    echo '</ul>';
                                @endphp
                                {{--                                <a title="English" href="#"><span class="img label-before"><img--}}
                                {{--                                            src="https://lipis.github.io/flag-icon-css/flags/4x3/us.svg" width="20"--}}
                                {{--                                            alt="lang-en"></span>English<i class="fa fa-angle-down"--}}
                                {{--                                                                           aria-hidden="true"></i></a>--}}
                                {{--                                <ul class="submenu lang">--}}
                                {{--                                    <li class="menu-item"><a title="english"--}}
                                {{--                                                             href="{{route('locale.set','zh-tw')}}"><span--}}
                                {{--                                                class="img label-before"><img--}}
                                {{--                                                    src="https://lipis.github.io/flag-icon-css/flags/4x3/tw.svg"--}}
                                {{--                                                    width="20" alt="lang-hun"></span>Trad Chinese</a></li>--}}
                                {{--                                    <li class="menu-item"><a title="german" href="{{route('locale.set','en')}}"><span--}}
                                {{--                                                class="img label-before"><img src="assets/images/lang-ger.png"--}}
                                {{--                                                                              alt="lang-ger"></span>English</a></li>--}}
                                {{--                                    <li class="menu-item"><a title="french" href="#"><span class="img label-before"><img--}}
                                {{--                                                    src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="menu-item"><a title="canada" href="#"><span class="img label-before"><img--}}
                                {{--                                                    src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a>--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png')}}"
                                                              alt="mercado"></a>
                    </div>

                    @livewire('header-search-component')

                    <div class="wrap-icon right-section">
                        {{--                        <div class="wrap-icon-section wishlist">--}}
                        {{--                            <a href="#" class="link-direction">--}}
                        {{--                                <i class="fa fa-heart" aria-hidden="true"></i>--}}
                        {{--                                <div class="left-info">--}}
                        {{--                                    <span class="index">0 item</span>--}}
                        {{--                                    <span class="title">Wishlist</span>--}}
                        {{--                                </div>--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}

                        @livewire('cart-count-component')
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-section header-sticky">
                {{-- <div class="header-nav-section">
                    <div class="container">
                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                            <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top new items</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span
                                    class="nav-label hot-label">hot</span></li>
                        </ul>
                    </div>
                </div> --}}

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                                                                    aria-hidden="true"></i></a>
                            </li>
                            {{-- <li class="menu-item">--}}
                            {{-- <a href="about-us.html" class="link-term mercado-item-title">About Us</a>--}}
                            {{-- </li>--}}
                            <li class="menu-item">
                                <a href="/shop" class="link-term mercado-item-title">{{__('string.shop')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="/cart" class="link-term mercado-item-title">{{__('string.cart')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="/checkout" class="link-term mercado-item-title">{{__('string.checkout')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="/contact-us"
                                   class="link-term mercado-item-title">{{__('string.contact us')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{$slot}}

@livewire('footer-component')

<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}'"></script>
<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"
        integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg=="
        crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/jnxzzilnzvllqky586no4gpalm937qi8ix2qinheqzhkikea/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
@livewireScripts

@stack('scripts')
</body>
</html>
