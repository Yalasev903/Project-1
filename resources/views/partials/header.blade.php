<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('public/sass/style.scss')

    <link rel="stylesheet" href="{{ asset('build/assets/style-C-SCsTSa.css') }}">

    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!-- Magnific popup css -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Header area start here -->
    <div class="top__header pt-30 pb-30">
        <div class="container">
            <div class="top__wrapper">
                <a href="{{ url('/') }}" class="main__logo">
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="logo__image">
                </a>
                <div class="search__wrp">
                    <input placeholder="Search for" aria-label="Search">
                    <button><i class="fa-solid fa-search"></i></button>
                </div>
                <div class="account__wrap">
                    <div class="account d-flex align-items-center">
                        <div class="user__icon">
                            <a href="#0">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </div>
                        <a href="#0" class="acc__cont">
                            <span>
                                My Account
                            </span>
                        </a>
                    </div>
                    <div class="cart d-flex align-items-center">
                        <span class="cart__icon">
                            <i class="fa-regular fa-cart-shopping"></i>
                        </span>
                        <a href="#0" class="c__one">
                            <span>
                                $0.00
                            </span>
                        </a>
                        <span class="one">
                            0
                        </span>
                    </div>
                    <div class="flag__wrap">
                        <div class="flag">
                            <img src="{{ asset('images/flag/us.png') }}" alt="flag">
                        </div>
                        <select name="flag">
                            <option value="0">
                                Usa
                            </option>
                            <option value="1">
                                Canada
                            </option>
                            <option value="2">
                                Australia
                            </option>
                            <option value="3">
                                Germany
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="#0">Home <i class="fa-regular fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="{{ url('/') }}">
                                    Home One
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('index-light') }}">
                                    Home One Light
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('index-2') }}">
                                    Home Two
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('index-2-light') }}">
                                    Home Two Light
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="#0">Pages <i class="fa-regular fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="{{ url('shop') }}">
                                    Shop Leftbar
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('shop-2') }}">
                                    Shop Rightbar
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('shop-single') }}">
                                    Shop Single
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('cart') }}">
                                    Cart Page
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('checkout') }}">
                                    Checkout Page
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('register') }}">
                                    Register
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('login') }}">
                                    Login
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('error') }}">
                                    404 Error
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Blog <i class="fa-regular fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="{{ url('blog') }}">
                                    Blog Stander
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('blog-grid') }}">
                                    Blog Grid
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('blog-list') }}">
                                    Blog List
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ url('blog-single') }}">
                                    Blog Single
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}">Contact Us</a>
                    </li>
                </ul>
                <div class="shipping__item d-none d-sm-flex align-items-center">
                    <div class="menu__right d-flex align-items-center">
                        <div class="thumb">
                            <img src="{{ asset('images/flag/picking.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Picking up?
                            </p>
                            <div class="items">
                                <select class="form__select p-0">
                                    <option value="1">
                                        Select Store
                                    </option>
                                    <option value="2">
                                        Store One
                                    </option>
                                    <option value="3">
                                        Store Two
                                    </option>
                                    <option value="3">
                                        Store Three
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="menu__right d-flex align-items-center">
                        <div class="thumb">
                            <img src="{{ asset('images/flag/shipping.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Free Shipping <br> on order <strong>over $100</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->
