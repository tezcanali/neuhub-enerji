<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.start') }}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/apple-touch-icon.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/favicon-32x32.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/favicon-16x16.png') }}"/>
    <link rel="shortcut icon" href="{{ asset('front/favicon.ico') }}"/>
    <link rel="mask-icon" href="{{ asset('front/safari-pinned-tab.svg') }}" color="#000"/>
    <meta name="msapplication-TileColor" content="#000"/>
    <meta name="theme-color" content="#000"/>

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
        {{ $tag }}
    @endforeach

    {!! seo()->for($power) !!}

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/styles.css')}}">

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <link rel="stylesheet" href="{{ $path }}"/>
        @endif
    @endforeach

    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.end') }}
</head>
<body class="page page-home page--ready page--on">
<div class="wrapper">
    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.body.start') }}

    @include('front.layout.header')

    <main class="main" role="main">
        <section class="banner banner--inside">
            <div class="container-full">
                <div class="swiper"
                     data-swiper="{ autoplay: { delay: 12000 }, speed: 1200, parallax: true }">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-active" style="width: 1201px;">
                                <figure class="banner-image background--fixed loader--loaded"
                                        src="./assets/images/empty.png"
                                        data-src="{{ \Illuminate\Support\Facades\Storage::url($power->image) }}"
                                        data-loader="{ bg: false, over: true }"
                                        data-swiper-parallax-opacity="0.4"
                                        style="opacity: 1; transform: translate3d(0px, 0px, 0px); background-image: url({{ \Illuminate\Support\Facades\Storage::url($power->image) }});">
                                </figure>
                                <div class="banner-content">
                                    <div class="container-full d-flex align-items-end">
                                        <article class="content-body h-auto">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item wow fadeInUp" data-wow-duration="1s"
                                                        data-wow-delay="0.05s" data-wow-offset="0"
                                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.05s;">
                                                        <a href="/" target="_self" title="Anasayfa">ANASAYFA</a>
                                                    </li>
                                                    <li class="breadcrumb-item wow fadeInUp" data-wow-duration="1s"
                                                        data-wow-delay="0.15s" data-wow-offset="0"
                                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.15s;">
                                                        <a href="/santrallerimiz"
                                                           title="Santrallerimiz">SANTRALLERİMİZ</a></li>
                                                    <li class="breadcrumb-item active wow fadeInUp"
                                                        data-wow-duration="1s" data-wow-delay="0.25s"
                                                        data-wow-offset="0"
                                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s;">
                                                        {{ $power->title }}</li>
                                                </ol>
                                            </nav>
                                            <h1 class="content-title h1 wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.35s" data-wow-offset="0"
                                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.35s;">
                                                {{ $power->title }}</h1>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </section>
        <div class="pb-4 pb-sm-6 pb-xl-8"></div>
        <section class="content content--text pb-4 pb-sm-6 pb-xl-8">
            <div class="container">
                <div class="row row-spacing-2">
                    <div class="col-lg-24 pr-lg-4">
                        <article class="content-body"><small class="content-subtitle wow fadeInUp"
                                                             data-wow-duration="1s" data-wow-delay="0.45s"
                                                             data-wow-offset="0"
                                                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.45s;">{{ $power->location }}</small>
                            <h2 class="content-title h2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.55s"
                                data-wow-offset="0"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.55s;">{{ $power->title }}</h2>
                        </article>
                    </div>
                    <div class="col-lg-24">
                        <div class="light-boxes-wrapper row row-spacing">
                            @php
                                $local = app()->getLocale();
                            @endphp
                            @if($power->icons['company'][$local][0]['title'] != null)
                                <div class="light-boxes-item col-sm-8 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="0.65s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.65s;">
                                    <article class="content-body">
                                        <svg version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 438 351" style="enable-background:new 0 0 438 351;"
                                             xml:space="preserve" class="svg replaced-svg" height="50">
                                            <path
                                                d="M435.1,112.1c3.9-3.9,3.9-10.2,0-14.1l-95-95C338.2,1.1,335.7,0,333,0c-2.7,0-5.2,1.1-7.1,2.9l-34.3,34.3  c-11.9-2-41.5-5.9-71.7-2.8c0,0-0.1,0-0.1,0c-30.7-3.3-61.2,0.8-73.3,2.8L112.2,2.9C108.3-1,101.9-1,98,2.9l-95.1,95  C1.1,99.8,0,102.3,0,105c0,2.7,1.1,5.2,2.9,7.1l36.3,36.3l16.3,48.9l-14.6,14.6c-10.5,10.5-19.1,33,0,52.1  c8.2,8.2,17.1,11.3,25.4,11.3c0.4,0,0.8,0,1.3,0c-0.4,9.6,3.5,18.8,11.3,26.7c7.4,7.4,16.2,11.4,25.4,11.4c9.5,0,17.3-4.1,22-7.4  c1.8,5.4,5,10.4,9.7,15.1c8.2,8.2,17.1,11.3,25.4,11.3c6.9,0,13.4-2.1,18.7-5.2l12.9,12.9c0.1,0.1,0.2,0.2,0.3,0.3  c6.1,5.6,16,10.6,26.8,10.6c8.3,0,17.1-3,25-10.9c4.8-4.8,7.8-10,9.4-15.1c5.9,4.2,13.7,7.5,22.2,7.5c8.3,0,17.2-3.1,25.4-11.3  c4.9-4.9,7.9-10,9.6-15c5.8,4.2,13.6,7.3,22,7.3c8.3,0,17.2-3.1,25.4-11.3c8.7-8.7,11.6-18.1,11.3-26.7c0.4,0,0.9,0,1.3,0  c8.3,0,17.2-3.1,25.4-11.3c10.5-10.5,13.9-23.4,9.5-36.4c-3-9.1-8.9-15.1-9.5-15.8l-14.6-14.6l16.3-48.9L435.1,112.1z M55.1,249.9  c-6.6-6.6-5.9-11.9-4.9-15.4c1.5-4.9,4.9-8.4,4.9-8.4L93,188.1c0,0,3.6-3.4,8.5-4.9c3.5-1.1,8.9-1.7,15.4,4.9  c6.6,6.6,5.9,11.9,4.9,15.4c-1.5,4.9-4.9,8.4-4.9,8.4c0,0,0,0,0,0l-38,38c-0.3,0.3-3.8,3.5-8.5,4.9C67,255.8,61.6,256.5,55.1,249.9z   M104.3,293.4c-3.8,0-7.5-1.8-11.2-5.5c-6.6-6.6-5.9-11.9-4.9-15.4c1.5-4.8,4.8-8.3,4.9-8.4c0,0,0,0,0,0c0,0,0,0,0,0l38-38  c0.1-0.1,5.9-5.5,12.6-5.5c3.8,0,7.5,1.8,11.2,5.5c6.6,6.6,5.9,11.9,4.9,15.4c-1.5,4.9-4.9,8.4-4.9,8.4l-19,19c0,0,0,0,0,0  c0,0,0,0,0,0l-19,19C116.9,288,111,293.4,104.3,293.4z M150.1,306.9c-6.6-6.6-5.9-11.9-4.9-15.4c1.5-4.8,4.8-8.4,4.9-8.4  c0.5-0.4,3.9-3.5,8.4-4.9c3.5-1.1,8.9-1.7,15.4,4.9c6.6,6.6,5.9,11.9,4.9,15.4c-1.5,4.8-4.8,8.3-4.9,8.4c-0.5,0.4-3.9,3.5-8.4,4.9  C162,312.8,156.6,313.5,150.1,306.9z M382.9,226c0,0,3.4,3.6,4.9,8.5c1.1,3.5,1.7,8.9-4.9,15.4c-6.6,6.6-11.9,5.9-15.4,4.9  c-4.8-1.5-8.3-4.7-8.5-4.9c0,0,0,0,0,0l-56.9-56.9c-3.9-3.9-10.2-3.9-14.1,0c-3.9,3.9-3.9,10.2,0,14.1l56.9,56.9  c0,0,3.4,3.6,4.9,8.5c1.1,3.5,1.7,8.9-4.9,15.4c-6.6,6.6-11.9,5.9-15.4,4.9c-4.9-1.5-8.4-4.9-8.4-4.9c0,0,0,0,0,0l-57-57  c-3.9-3.9-10.2-3.9-14.1,0c-3.9,3.9-3.9,10.2,0,14.1l38,38c0,0,3.4,3.6,4.9,8.5c1.1,3.5,1.7,8.9-4.9,15.4  c-6.6,6.6-11.9,5.9-15.4,4.9c-4.9-1.5-8.4-4.9-8.5-4.9c0,0,0,0,0,0l-38-38c-3.9-3.9-10.2-3.9-14.1,0c-3.9,3.9-3.9,10.2,0,14.1  l18.8,18.8c0.5,0.6,3.2,4,4.6,8.3c1.9,5.9,0.5,10.9-4.3,15.7c-4.7,4.7-9.6,6.1-15.3,4.5c-4.7-1.3-8.2-4.2-8.8-4.7L194.2,313  c6.8-11.7,9-29-6.1-44.1c-4.9-4.9-9.9-7.9-15-9.6c8.3-11.6,12.6-30.8-4-47.4c-7.4-7.4-16.2-11.4-25.4-11.4c-0.4,0-0.9,0-1.3,0  c0.3-8.6-2.6-18-11.3-26.7c-19.1-19.1-41.7-10.5-52.1,0l-7.6,7.6l-13.9-41.7c-0.5-1.5-1.3-2.8-2.4-3.9L24.1,105l80.9-80.9L136,55.1  c2.4,2.4,5.8,3.4,9,2.7c0.1,0,5.9-1.2,15-2.3c-1.8,1.4-3.4,2.9-5,4.5c-37.6,37.5-56.9,56.7-57.1,56.9c-1.9,1.9-3,4.4-3,7.1  c0,2.7,1,5.2,2.9,7.1c10.5,10.5,21.3,21.3,36.1,24.2c16.8,3.3,34.4-4.6,54-24.2l16.1-16.1h67.7l91.9,91.9c0.1,0.1,0.2,0.2,0.3,0.3  L382.9,226z M380.5,139.8l-13.9,41.7l-83.6-83.6c-1.9-1.9-4.4-2.9-7.1-2.9h-76c-2.7,0-5.2,1.1-7.1,2.9l-19,19  c-14.5,14.5-26.3,20.7-36,18.7c-6.4-1.3-12.5-5.9-18.7-11.7c8.8-8.7,25.5-25.4,49.9-49.8c33.8-33.8,123-16.5,123.9-16.4  c3.3,0.7,6.7-0.4,9-2.7L333,24.1l80.9,80.9l-30.9,30.9C381.8,137,381,138.4,380.5,139.8z">
                                            </path>
                                        </svg>
                                        <h6 class="content-title h6 mb-1">
                                            {{$power->icons['company'][$local][0]['title']}}</h6>
                                        <p class="content-description mt-auto">{!! $power->icons['company'][$local][0]['description'] !!}</p>
                                    </article>
                                </div>
                            @endif
                            @if($power->icons['location'][$local][0]['location'] != null)
                                <div class="light-boxes-item col-sm-8 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="0.75s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.75s;">
                                    <article class="content-body">
                                        <svg version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 275 440" style="enable-background:new 0 0 275 440;"
                                             xml:space="preserve" class="svg replaced-svg" height="50">
                                            <path
                                                d="M138,0C62,0,0,65,0,144c0,67,103,230,138,296c35-66,137-229,137-296C275,65,214,0,138,0z M138,195c-33,0-60-27-60-59  c0-33,27-60,60-60c32,0,59,27,59,60C197,168,170,195,138,195z">
                                            </path>
                                        </svg>
                                        <h6 class="content-title h6 mb-1"> {{ $power->icons['location'][$local][0]['year'] }}
                                            <br> {{ $power->icons['location'][$local][0]['location'] }} </h6>
                                        <p class="content-description mt-auto">{!! $power->icons['location'][$local][0]['description'] !!}</p>
                                    </article>
                                </div>
                            @endif
                            @if($power->icons['energy'][$local][0]['title'] != null)
                                <div class="light-boxes-item col-sm-8 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="0.85s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.85s;">
                                    <article class="content-body">
                                        <svg version="1.0" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 117 267" style="enable-background:new 0 0 117 267;"
                                             xml:space="preserve" class="svg replaced-svg" height="50">
                                            <g>
                                                <polygon points="117,109 64,109 113,0 56,0 0,136 54,136 10,267  ">
                                                </polygon>
                                            </g>
                                        </svg>
                                        <h6 class="content-title h6 mb-1"> {{ $power->icons['energy'][$local][0]['title'] }} </h6>
                                        <p class="content-description mt-auto">{!! $power->icons['energy'][$local][0]['description'] !!}</p>
                                    </article>
                                </div>
                            @endif
                            @if($power->icons['turbin'][$local][0]['title'] != null)
                                <div class="light-boxes-item col-sm-8 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="0.95s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.95s;">
                                    <article class="content-body">
                                        <svg version="1.0" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 422.8 473.7" style="enable-background:new 0 0 422.8 473.7;"
                                             xml:space="preserve" class="svg replaced-svg" height="50">
                                            <g>
                                                <path
                                                    d="M356.4,209.2c-21.9-12.6-43.8-21.3-60.4-24.3c-0.1-14.4-7.9-26.8-19.5-33.7c5.7-16,9-39.6,9-64.7c0-45.8-23.2-82.4-24.2-84   c-2.2-3.4-7.8-3.4-10,0c-1,1.5-24.2,38.1-24.2,84c0,25.1,3.4,48.8,9,64.7c-11.5,6.9-19.4,19.3-19.5,33.7   c-16.6,3.1-38.6,11.7-60.4,24.3c-39.7,22.9-59.8,61.3-60.6,62.9c-0.9,1.8-0.9,4,0.1,5.7c1,1.8,2.9,2.9,4.9,3c0.3,0,1.5,0.1,3.5,0.1   c11.3,0,47.6-1.6,81.3-21.1c21.8-12.6,40.6-27.3,51.6-40.2c0.3,0.2,0.6,0.3,0.8,0.5l-17.5,195.9h-0.8c-11.6,0-21,9.1-21.4,20.7   l-0.9,30.8c-0.1,1.6,0.6,3.2,1.7,4.3c1.1,1.2,2.7,1.8,4.3,1.8h122.2c1.6,0,3.2-0.7,4.3-1.8c1.1-1.2,1.7-2.7,1.7-4.3l-0.9-30.8   c-0.3-11.6-9.7-20.7-21.4-20.7h-7.4l-20.6-190.4c11.2,11.3,27.6,23.5,46.1,34.2c33.7,19.5,70,21.1,81.3,21.1c2,0,3.2-0.1,3.5-0.1   c2-0.1,3.9-1.2,4.9-3c1-1.8,1.1-3.9,0.1-5.7C416.2,270.6,396.1,232.2,356.4,209.2z M239.1,86.5c0-29.4,10.7-55.3,17.3-68.4   c6.6,13.1,17.3,39,17.3,68.4c0,23.6-3,45.5-8.1,60.2c-3-0.7-6-1.2-9.2-1.2c-3.2,0-6.2,0.5-9.2,1.2   C242.1,132.1,239.1,110.1,239.1,86.5z M256.3,157.5c15.3,0,27.7,12.4,27.7,27.7c0,15.3-12.4,27.7-27.7,27.7   c-15.3,0-27.7-12.4-27.7-27.7C228.6,169.9,241,157.5,256.3,157.5z M179.5,249.5c-25.5,14.7-53.2,18.4-67.9,19.2   c8.1-12.2,25.1-34.4,50.6-49.1c20.7-11.9,41.1-20.1,56.3-22.9c1.8,5.9,4.9,11.3,9,15.7C217.5,224.1,200,237.7,179.5,249.5z    M318.5,437.2l0.8,24.6H209.4l0.7-24.6c0.2-5.1,4.3-9.2,9.5-9.2h6.2h70.5h12.7C314.2,428,318.4,432,318.5,437.2z M232.4,416.1   l17.1-191.9c2.2,0.4,4.5,0.7,6.8,0.7c4.4,0,8.5-0.9,12.4-2.2l21,193.4L232.4,416.1L232.4,416.1z M333.2,249.5   c-20.5-11.8-38-25.4-48.1-37.1c4.2-4.4,7.2-9.8,9-15.7c15.2,2.8,35.6,10.9,56.3,22.9c25.4,14.7,42.5,36.9,50.6,49.2   C386.4,267.9,358.6,264.2,333.2,249.5z">
                                                </path>
                                                <path
                                                    d="M101.8,185.2c0-3.5,0.1-6.9,0.3-10.3C105.3,127,130,84,169.9,57.1c2.7-1.8,3.5-5.6,1.6-8.3s-5.6-3.5-8.3-1.6   c-43,29-69.6,75.3-73,126.9c-0.2,3.7-0.4,7.4-0.4,11.1c0,3.3,2.7,6,6,6S101.8,188.5,101.8,185.2z">
                                                </path>
                                                <path
                                                    d="M203.2,342.7c2.5,0,4.8-1.5,5.6-4c1.1-3.1-0.5-6.5-3.6-7.6c-16.6-5.8-32.1-14.4-45.8-25.5c-2.6-2-6.3-1.7-8.4,0.9   c-2.1,2.6-1.7,6.3,0.9,8.4c14.8,12,31.4,21.2,49.4,27.5C201.9,342.6,202.6,342.7,203.2,342.7z">
                                                </path>
                                                <path
                                                    d="M362.2,297.8c-14,13.2-30.1,23.5-47.9,30.7c-3,1.2-4.5,4.7-3.3,7.8c0.9,2.3,3.2,3.7,5.5,3.7c0.7,0,1.5-0.1,2.2-0.4   c19.2-7.8,36.5-18.9,51.6-33.1c2.4-2.3,2.5-6,0.2-8.4C368.3,295.7,364.6,295.6,362.2,297.8z">
                                                </path>
                                                <path
                                                    d="M375.4,68.9c-2.3-2.4-6.1-2.4-8.4-0.1c-2.4,2.3-2.4,6.1-0.1,8.4c28.4,29,44,67.4,44,108c0,3.3,2.7,6,6,6s6-2.7,6-6   C422.8,141.5,406,100.2,375.4,68.9z">
                                                </path>
                                                <path
                                                    d="M120.1,177.8c-0.2,3.3,2.3,6.1,5.6,6.3c0.1,0,0.3,0,0.4,0c3.1,0,5.7-2.4,6-5.6c2.5-38.6,22.5-73.3,54.7-95   c2.7-1.8,3.5-5.6,1.6-8.3c-1.9-2.7-5.6-3.5-8.3-1.6C144.7,97.5,122.9,135.5,120.1,177.8z">
                                                </path>
                                                <path
                                                    d="M213.2,316.2c2.5,0,4.8-1.5,5.6-4c1.1-3.1-0.6-6.5-3.7-7.6c-13.4-4.7-25.9-11.6-37-20.6c-2.6-2-6.3-1.7-8.4,0.9   c-2.1,2.6-1.7,6.3,0.9,8.4c12.2,9.8,25.8,17.4,40.5,22.6C211.8,316,212.5,316.2,213.2,316.2z">
                                                </path>
                                                <path
                                                    d="M350.1,278c-2.2-2.4-6-2.5-8.4-0.3c-11.3,10.6-24.3,19-38.6,24.8c-3.1,1.2-4.5,4.7-3.3,7.8c0.9,2.3,3.2,3.7,5.5,3.7   c0.7,0,1.5-0.1,2.2-0.4c15.7-6.3,30-15.5,42.4-27.1C352.3,284.2,352.4,280.4,350.1,278z">
                                                </path>
                                                <path
                                                    d="M381,186.9c0,3.3,2.7,6,6,6s6-2.7,6-6c0-35.9-13.8-69.8-38.9-95.4c-2.3-2.4-6.1-2.4-8.4-0.1c-2.4,2.3-2.4,6.1-0.1,8.4   C368.4,123.3,381,154.2,381,186.9z">
                                                </path>
                                                <path
                                                    d="M120.1,57.7c4-4.4,6.3-6.7,11.2-6.7c3.3,0,6-2.7,6-6s-2.7-6-6-6c-10.5,0-15.8,5.9-20.1,10.7c-4,4.4-6.3,6.7-11.3,6.7   s-7.3-2.3-11.3-6.7c-4.3-4.7-9.6-10.7-20.1-10.7c-10.5,0-15.8,5.9-20.1,10.7c-4,4.4-6.3,6.7-11.2,6.7c-5,0-7.3-2.3-11.3-6.7   C21.8,45,16.5,39.1,6,39.1c-3.3,0-6,2.7-6,6c0,3.3,2.7,6,6,6c5,0,7.3,2.3,11.3,6.7c4.3,4.7,9.6,10.7,20.1,10.7   c10.5,0,15.8-5.9,20.1-10.7c4-4.4,6.3-6.7,11.2-6.7c5,0,7.3,2.3,11.3,6.7c4.3,4.7,9.6,10.7,20.1,10.7   C110.5,68.4,115.9,62.5,120.1,57.7z">
                                                </path>
                                                <path
                                                    d="M6,19.5c5,0,7.3,2.3,11.3,6.7c4.3,4.8,9.6,10.7,20.1,10.7c10.5,0,15.8-5.9,20.1-10.7c4-4.4,6.3-6.7,11.2-6.7   c5,0,7.3,2.3,11.3,6.7c4.3,4.7,9.6,10.7,20.1,10.7c10.5,0,15.8-5.9,20.1-10.7c4-4.4,6.3-6.7,11.2-6.7c3.3,0,6-2.7,6-6   c0-3.3-2.7-6-6-6c-10.5,0-15.8,5.9-20.1,10.7c-4,4.4-6.3,6.7-11.3,6.7c-5,0-7.3-2.3-11.3-6.7c-4.3-4.7-9.6-10.7-20.1-10.7   c-10.5,0-15.8,5.9-20.1,10.7c-4,4.4-6.3,6.7-11.2,6.7c-5,0-7.3-2.3-11.3-6.7C21.8,13.5,16.5,7.6,6,7.6c-3.3,0-6,2.7-6,6   C0,16.9,2.7,19.5,6,19.5z">
                                                </path>
                                                <path
                                                    d="M259.2,317.5c-0.2,0-0.3,0-0.4,0c-3.1,0-5.7,2.4-6,5.5l-5.2,71.9c-0.2,3.3,2.2,6.1,5.5,6.4c0.2,0,0.3,0,0.4,0   c3.1,0,5.7-2.4,6-5.5l5.2-71.9C264.9,320.6,262.4,317.7,259.2,317.5z">
                                                </path>
                                                <path
                                                    d="M256.3,202.1c9.4,0,16.9-7.6,16.9-16.9c0-9.4-7.6-16.9-16.9-16.9s-16.9,7.6-16.9,16.9C239.4,194.6,247,202.1,256.3,202.1z">
                                                </path>
                                            </g>
                                        </svg>
                                        <h6 class="content-title h6 mb-1"> {!! $power->icons['turbin'][$local][0]['title'] !!} </h6>
                                        <p class="content-description mt-auto">{!! $power->icons['turbin'][$local][0]['description'] !!}</p>
                                    </article>
                                </div>
                            @endif
                            @if($power->icons['tuketim'][$local][0]['title'] != null)
                                <div class="light-boxes-item col-sm-8 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="1.05s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 1.05s;">
                                    <article class="content-body">
                                        <svg version="1.0" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 463.8 468.4" style="enable-background:new 0 0 463.8 468.4;"
                                             xml:space="preserve" class="svg replaced-svg" height="50">
                                            <g>
                                                <path
                                                    d="M437.7,40.1c-4.7-7.3-10.9-13.6-18.2-18.7c-5-3.4-10.3-5.8-15.7-7.7c-0.9-0.7-1.9-1.4-2.9-2.1   C386.2,1.6,368.3-2.2,350.6,1.2c-17.7,3.4-33.1,13.4-43.3,28.3L213.5,165c-0.2-0.1-0.5-0.3-0.7-0.4c-1.7-0.9-3.7-1-5.4-0.1   c-3.4,1.7-39,55.4-39.3,55.9c-0.5,0.7-12.4,18.6-5.6,45.2c0.7,2.6,1.1,5.2,1.5,7.6c0,0,0,0,0,0c2.6,20.6-7,33.4-7,33.4   c-1,1.2-1.5,2.8-1.3,4.3c0.2,1.6,0.9,3,2.1,4c0.2,0.1,0.3,0.3,0.5,0.4l-12.5,17.4c-2.3-1.1-5.2-0.7-6.9,1.4c-2,2.3-1.8,5.7,0.3,7.8   l-11.5,16c-0.1-0.1-0.3-0.3-0.3-0.3c-2.4-2.1-6.1-1.8-8.3,0.6c-2.1,2.5-1.8,6.2,0.6,8.3c0.1,0.1,0.5,0.5,1.1,0.9l-11.3,15.8   c-0.9,1.3-1.3,2.9-1,4.4c0.3,1.6,1.2,2.9,2.5,3.8l5.7,3.9l-1.7,17.6c-0.2,2.1,0.8,4.2,2.5,5.4l13.8,9.5   c-12.4,10.9-55.5,44.9-88.3,19.1c-39-30.7,6.4-96.5,50.4-160.1c39.6-57.3,76.9-111.3,65.4-150.8c-4.1-14-14.6-24.9-30.6-32.8   l11.4-17.3c1.6-2.5,1.2-5.7-1.1-7.7L94.1,40l3-4.6c0.9-1.3,1.2-2.9,0.8-4.4c-0.3-1.5-1.2-2.9-2.5-3.7L73.8,13.2   c-2.7-1.8-6.3-1-8.1,1.7l-9.6,14.6L34,14.9c-2.7-1.8-6.4-1-8.1,1.7c-1.8,2.7-1,6.3,1.7,8.1l22.2,14.5L31.2,67.4L9.1,52.8   c-2.7-1.8-6.3-1-8.1,1.7c-1.8,2.7-1,6.3,1.7,8.1l22.2,14.5l-9.6,14.6c-1.8,2.7-1,6.3,1.7,8.1l21.5,14.1c1.3,0.9,2.9,1.2,4.4,0.8   c1.5-0.3,2.9-1.2,3.7-2.5l3-4.6l52.7,25.4c0.8,0.4,1.7,0.6,2.5,0.6c1.9,0,3.8-0.9,4.9-2.6l11.9-18.1c13.9,6.6,22.5,15.1,25.8,26.3   c10,34-27.5,88.3-63.8,140.8c-47,68.1-95.7,138.4-48,176c11.2,8.8,23.1,12.2,34.8,12.2c32.7,0,63.1-26.5,70.8-33.7l14.9,10.3   c1,0.7,2.2,1,3.3,1c0.9,0,1.8-0.2,2.6-0.6l15.8-7.8l5.7,3.9c1,0.7,2.2,1,3.3,1c1.8,0,3.6-0.9,4.8-2.4l18-25.1   c1.4,0.4,2.8,0.8,4.3,1.2c0.5,0.1,0.9,0.2,1.4,0.2c2.6,0,5-1.8,5.7-4.5c0.7-3.1-1.1-6.1-4.1-7l10.5-14.6c2.1,0.6,4.2,1.2,6.3,1.7   c0.5,0.1,0.9,0.2,1.4,0.2c2.6,0,5-1.8,5.7-4.5c0.8-3.1-1.2-6.3-4.3-7.1c-0.6-0.1-1.2-0.3-1.7-0.5l5.8-8.1c0.2,0.1,0.5,0.3,0.7,0.4   c0.9,0.5,1.9,0.8,2.9,0.8c2,0,4-1,5.1-2.9c0.4-0.7,10.6-17,36.4-20.1c27.3-3.2,39.7-20.7,40.1-21.4c24.4-34.2,37.1-54,37.2-54.2   c1.6-2.5,1.1-5.7-1.2-7.6c-0.6-0.5-1.3-1.1-2-1.6L452,131.3C472.2,101.9,465.9,61.9,437.7,40.1z M102.8,120.4L50,95   c-0.8-0.4-1.7-0.6-2.5-0.6c-1.9,0-3.8,0.9-4.9,2.6L40,101l-11.7-7.7l9.6-14.6c0,0,0,0,0,0c0,0,0,0,0,0l24.9-37.9c0,0,0,0,0,0   c0,0,0,0,0,0l9.6-14.6l11.7,7.7l-2.6,3.9c-1.6,2.5-1.2,5.7,1.1,7.7l44.3,38.3L102.8,120.4z M159.9,433.3l-33-22.7l0.7-7.5l39,26.8   L159.9,433.3z M435.9,66.7c2.7,14.6-0.4,29.3-8.7,41.5l-93.5,136.2c-8.1-6.3-16.6-12.5-25.1-18.6l89.9-130.9   c3.7-5.3,5-11.8,3.8-18.1c-1.2-6.4-4.8-11.9-10.1-15.5c-11-7.6-26.1-4.8-33.7,6.2l-90,131c-8.5-5.5-16.9-10.9-25.3-16l92.5-137   c17.3-25.2,51.9-31.6,77.1-14.3C425,39.5,433.2,52.1,435.9,66.7z M289.8,212.2c-3.8-2.6-7.6-4.9-11.3-7.4L368.2,74   c3.9-5.7,11.7-7.1,17.4-3.2c2.7,1.9,4.6,4.7,5.2,8c0.6,3.3-0.1,6.6-2,9.4L299,218.9C295.9,216.7,293,214.4,289.8,212.2z    M316.9,36.1c8.4-12.3,21.2-20.6,35.9-23.4c4.2-0.8,8.5-1,12.7-0.8c-15.4,3.8-29.6,12.8-39.3,26.9l-93,137.6   c-3.2-1.9-6.3-3.7-9.5-5.5L316.9,36.1z M185.5,428.5l-63-43.3l7.6-10.6c13.4,9.9,38.4,26.5,67.7,36.7L185.5,428.5z M205,401.3   c-29.2-9.5-54.8-26.5-68-36.3l11.3-15.8c12.6,9.5,37.7,26.6,67.4,37.2L205,401.3z M222.8,376.5c-29.6-10-55.2-27.4-67.7-36.8   l12.4-17.2c10.1,7.9,20.5,15.6,31.3,23.1c10.4,7.2,21,13.9,31.6,20.3L222.8,376.5z M316.1,322.1c-0.4,0.6-10.1,13.9-31.9,16.5   c-22.9,2.7-35.9,14.3-41.6,21c-12.4-7.3-24.9-15.2-37.1-23.7c-12.6-8.6-24.8-17.7-36.3-26.9c3.6-6.7,8.6-19.6,6.4-37.3   c-0.4-2.9-0.9-5.9-1.7-9c-5.4-21.3,3.6-35.1,4-35.8c6.9-10.4,12.8-19.3,17.9-26.7c23.7,13.2,47.8,28,71.7,44.5   c23.9,16.4,46.4,33.6,67.2,51C329.5,303.2,323.4,311.9,316.1,322.1z M341.3,286c-20.9-17.4-43.3-34.5-67.2-50.9   c-23.9-16.4-48-31.3-71.7-44.5c4.1-5.9,7.2-10.3,9.3-13.2c23.6,13.1,47.6,28.1,71.5,44.4c23.8,16.4,46.4,33.4,67.1,50.8   C348.3,275.6,345.3,280.1,341.3,286z M350.6,258.1c-2.6-2.1-5.2-4.2-7.8-6.3l94-136.9c8.5-12.4,12.2-27,11.3-41.8   c6.5,16.6,5,35.9-5.8,51.5L350.6,258.1z">
                                                </path>
                                                <path
                                                    d="M104.8,77.4l-19.1-14c-2.6-1.9-6.3-1.3-8.2,1.3c-1.9,2.6-1.3,6.3,1.3,8.2l14.6,10.7l-5,7.2c-1.8,2.7-1.1,6.3,1.5,8.2   c1,0.7,2.2,1,3.3,1c1.9,0,3.7-0.9,4.8-2.5l8.2-11.9C108,82.8,107.4,79.3,104.8,77.4z">
                                                </path>
                                            </g>
                                        </svg>
                                        <h6 class="content-title h6 mb-1"> {!! $power->icons['tuketim'][$local][0]['title'] !!}
                                        </h6>
                                        <p class="content-description mt-auto">{!! $power->icons['tuketim'][$local][0]['description'] !!}</p>
                                    </article>
                                </div>
                            @endif
                            @if($power->icons['emisyon'][$local][0]['title'] != null)
                                <div class="light-boxes-item col-sm-8 wow fadeInUp" data-wow-duration="1s"
                                     data-wow-delay="1.15s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 1.15s;">
                                    <article class="content-body">
                                        <svg version="1.0" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 388.2 454.2" style="enable-background:new 0 0 388.2 454.2;"
                                             xml:space="preserve" class="svg replaced-svg" height="50">
                                            <g>
                                                <path
                                                    d="M301.8,294.1c-0.4-1.5-1.3-2.8-2.6-3.6c-0.3-0.1-26.8-15.5-46.1-32.4c-1-0.8-2.2-1.3-3.5-1.4l-34-0.7c-1.5,0-3,0.6-4.1,1.7   c-1.1,1.1-1.6,2.6-1.5,4.2l1.6,28.6l-1.4,21.9l-13.9,14.4c-2,2.1-2.1,5.3-0.2,7.5l15.2,17.9c1,1.2,2.6,2,4.2,2l26.7,0   c1.6,0,3.2-0.7,4.2-2l12.9-15.6l15.9-12.5l26.7-0.4c1.7,0,3.3-0.8,4.3-2.1c1-1.3,1.4-3,1-4.7L301.8,294.1z M273.1,313.2   c-1.2,0-2.4,0.4-3.3,1.2l-18.2,14.4l-12.1,14.4h-21.5L207.6,331l11.9-12.2c0.9-1,1.5-2.2,1.6-3.5l1.5-24.7l-1.3-23.3l26,0.5   c16.9,14.4,37.6,27.1,44.3,31.1l3.2,13.9L273.1,313.2z">
                                                </path>
                                                <path
                                                    d="M357.7,0.5c-10.7-1.7-21.5,1.3-29.7,8.3c-8.2,7-12.8,17.1-12.8,27.9V94c-13.4-15.1-29-27.8-46.8-37.8   c-28.4-15.9-59.2-23.1-89.6-22.7c-0.9-0.2-1.8-0.2-2.7,0c0,0-0.1,0-0.1,0.1c-36.7,1-72.5,13.1-102.3,35c-0.6,0.3-1.1,0.6-1.5,1.1   c-19.6,14.7-36.6,33.6-49.3,56.5C5.1,157.9-1.9,192.7,0.4,226.5c-0.1,0.5,0,0.9,0.1,1.4c1.4,18.9,5.8,37.3,12.9,54.8   c0.2,0.7,0.5,1.4,0.9,2c15.1,35.9,41.6,67.4,78.2,87.8c3.9,2.2,7.9,3.8,11.9,5.7c0.1,0.1,0.1,0.2,0.2,0.3c0.5,0.4,1.1,0.4,1.6,0.6   c23.8,10.8,48.9,16.3,73.9,16.3c51.3,0,101.5-22,136.4-62.5c0.8,2.8,1.9,5.5,3.5,8l14.7,24.4c0.2,0.4,0.4,0.9,0.4,1.4v72.4   c0,8.4,6.8,15.1,15.1,15.1s15.1-6.8,15.1-15.1c0,0,0-59.1,0-72.3c0-0.5,0.1-0.9,0.5-1.4l15.1-21.9c5-7.2,7.3-13.9,7.3-21.1V38.4   C388.2,19.6,375.1,3.3,357.7,0.5z M164.9,158.8c0,0-17.4-25.3-24.6-36c-4.2-6.2-9.7-10.4-14.1-13c10.6-8.8,20.7-1.8,21.9-0.9   c1.2,0.9,2.7,1.3,4.2,1.1c15.6-2.3,22.4,8.5,22.6,8.9c0.9,1.6,2.5,2.6,4.3,2.8l18.8,1.6l25.6,16.7c1.3,0.8,2.9,1.1,4.4,0.7l29-7.4   l38.2,25l8.6,14.8c0.4,0.7,0.9,1.3,1.6,1.7c4.4,3.1,7.5,5.8,9.6,8.1v3.1c-3.6,0.7-8.2,0.6-10,0.4c-1.2-0.1-2.3,0.2-3.3,0.8   l-28.2,16.9c-0.5,0.3-1,0.7-1.4,1.2c-15.5,19-40.1,9.6-41.1,9.2c-1.6-0.6-3.5-0.5-5,0.5c-1.5,0.9-2.4,2.5-2.6,4.3l-0.3,4.5   l-12.9,0.7c-1.5,0.1-2.9,0.8-3.9,2l-11.7,13.9c-4.5,0.7-8.4-0.1-11.7-2.4c-8.7-6.2-12.1-21.8-12.6-27.3c-0.1-1.4-0.8-2.7-1.9-3.7   c-8.7-7.4-5.9-15.4-5.6-16.3c0.2-0.5,0.4-1.1,0.4-1.7l2.5-26.5C166,161.2,165.7,159.9,164.9,158.8z M311.3,106.7l-45.1,0   l-33.6-27.2c-0.9-0.7-2-1.2-3.1-1.2l-35.1-2.2l-9.3-31.4c26.5,0.7,53.2,7.5,77.8,21.3C281.7,76.5,297.8,90.3,311.3,106.7z    M32.4,131.6C43.1,112.5,57,96.3,72.9,83.2l10.1,35L65.3,150c-0.9,1.6-0.9,3.5-0.1,5.2l3.4,7l-36.1,10.1c-2,0.6-3.5,2.2-3.9,4.2   l-5.8,27.3l-11.7,11C11,186.5,17.8,157.9,32.4,131.6z M25.3,282.3l24.8-30.4c0.7-0.8,1.1-1.9,1.2-3l2.9-30l17.5-7.1l-1.8,9.9   c-0.3,1.7,0.2,3.5,1.4,4.8l14.5,15.7c-2.8,21.7,3.2,26.9,7,28.1c0.9,0.3,1.8,0.3,2.7,0.1l19.2-3.9L155,281l13,15.5l-1.9,17.7   c-0.1,0.7,0,1.4,0.2,2.1l3.1,11.2l-13.7,15.6l-28.4,2.4c-1.5,0.1-2.8,0.8-3.8,2l-16.7,19.8c-3-1.4-6-2.8-8.9-4.5   C64.2,344,39.6,315.2,25.3,282.3z M117.4,371.9l13.1-15.5l28.4-2.4c1.4-0.1,2.8-0.8,3.7-1.9l17.1-19.6c1.2-1.4,1.7-3.4,1.2-5.2   l-3.6-13.1l2-19c0.2-1.5-0.3-3-1.3-4.2l-15.4-18.5c-0.6-0.8-1.5-1.3-2.4-1.7L117,255.4c-0.9-0.3-2-0.4-3-0.2l-17.2,3.5   c-0.6-2.3-1.2-7.3,0.3-17.6c0.2-1.7-0.3-3.4-1.4-4.6l-14.4-15.6l3.2-17.1c0.4-2-0.4-4-1.9-5.3c-1.6-1.3-3.7-1.6-5.6-0.8L47,209.8   c-1.9,0.8-3.2,2.6-3.4,4.6l-3.1,31.7l-19.8,24.3c-4.6-13.3-7.8-27.1-9-41.1l20-18.6c0.8-0.8,1.4-1.8,1.6-2.9l5.4-25.7L78,171   c1.6-0.4,2.9-1.6,3.6-3.1c0.7-1.5,0.6-3.2-0.1-4.7l-5.1-10.4l17.4-31.3c0.7-1.3,0.9-2.8,0.5-4.2L82.4,76   c26.8-19,58.5-29.8,91.1-31.2L184.9,83c0.7,2.2,2.7,3.8,5,4l37.2,2.3l33.7,27.4c1,0.8,2.2,1.2,3.5,1.2c0,0,0,0,0,0l50.9,0v50.4   c-0.8-0.6-1.4-1.1-2.2-1.8l-8.7-14.9c-0.4-0.7-1-1.4-1.8-1.8l-41.4-27c-1.3-0.9-2.9-1.1-4.4-0.7l-29,7.4L203,113.1   c-0.8-0.5-1.6-0.8-2.6-0.9l-17.6-1.5c-3.7-4.6-13.3-13.6-29.9-12c-3.3-2-10.5-5.4-19-4.2c-8,1.1-15.2,5.6-21.3,13.6   c-1.1,1.4-1.4,3.3-0.9,5c0.5,1.7,1.9,3.1,3.5,3.7c0.1,0,9.9,3.4,15.9,12.3c6.1,9,19.5,28.6,23.5,34.4l-2.2,23.8   c-1.2,3.5-4,15.7,7.3,26.7c1,6.3,4.8,24.4,16.9,33.1c4.5,3.2,9.5,4.8,15,4.8c2.4,0,4.9-0.3,7.4-0.9c1.2-0.3,2.2-0.9,3-1.8   l11.4-13.5l15.4-0.8c2.8-0.1,5-2.4,5.2-5.2l0.2-2.5c12.7,2.8,32.3,2.1,46-13.9l25.9-15.5c2,0.1,5.5,0.1,9-0.4v120   C268.8,378.5,187.2,400,117.4,371.9z M371.8,337.2l-15.1,21.9c-1.6,2.3-2.4,4.9-2.4,7.7c0,13.2,0,72.3,0,72.3c0,2.2-1.8,4-4,4   s-4-1.8-4-4v-72.4c0-2.5-0.7-5-2-7.2l-14.7-24.4c-2.1-3.5-3.2-7.5-3.2-11.6V36.6c0-7.5,3.3-14.6,8.9-19.4c4.7-4,10.4-6.1,16.5-6.1   c1.4,0,2.8,0.1,4.3,0.3c12.1,1.9,21.2,13.5,21.2,27v38.3h-6.9c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9v18.9h-6.9   c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9v18.9h-6.9c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9v18.9h-6.9   c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9v18.9h-6.9c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9v18.9h-6.9   c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9V257h-6.9c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9V287h-6.9   c-3.1,0-5.5,2.5-5.5,5.6s2.5,5.6,5.5,5.6h6.9v24.4C377.2,327.4,375.5,331.9,371.8,337.2z">
                                                </path>
                                                <path
                                                    d="M367.3,60c0-8.6-7-15.6-15.6-15.6c-8.6,0-15.6,7-15.6,15.6c0,6.7,4.2,12.2,10,14.5v251.1c0,3.1,2.5,5.6,5.5,5.6   s5.5-2.5,5.5-5.6V74.5C363.1,72.2,367.3,66.6,367.3,60z">
                                                </path>
                                            </g>
                                        </svg>
                                        <h6 class="content-title h6 mb-1">{!! $power->icons['emisyon'][$local][0]['title'] !!}</h6>
                                        <p class="content-description mt-auto">{!! $power->icons['emisyon'][$local][0]['description'] !!}</p>
                                    </article>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>
        @if($power->file1_name != null && $power->file2_name != null)
            <section class="content content--text pb-4 pb-sm-6 pb-xl-8">
                <div class="container">
                    <div class="row row-spacing-2">
                        <div class="col-lg-24">
                            <div class="light-boxes-wrapper row row-spacing">
                                @if($power->file1_name != null)
                                    <div class="light-boxes-item col-sm-12 wow fadeInUp" data-wow-duration="1s"
                                         data-wow-delay="1.25s" data-wow-offset="0"
                                         style="visibility: visible; animation-duration: 1s; animation-delay: 1.25s;"><a
                                            href="{{ \Illuminate\Support\Facades\Storage::url($power->file1) }}"
                                            download="" class="routing-box routing-box-inferior"
                                            title="Soma 4 RES Projesi Teknik Olmayan Özet">
                                            <article class="routing-box-body content-body p-2">
                                                <h6 class="content-title h6 mb-0"><i
                                                        class="icon-download"></i>{!! $power->file1_name !!}</h6>
                                            </article>
                                        </a></div>
                                @endif
                                @if($power->file2_name != null)
                                    <div class="light-boxes-item col-sm-12 wow fadeInUp" data-wow-duration="1s"
                                         data-wow-delay="1.35s" data-wow-offset="0"
                                         style="visibility: visible; animation-duration: 1s; animation-delay: 1.35s;"><a
                                            href="{{ \Illuminate\Support\Facades\Storage::url($power->file2) }}"
                                            download="" class="routing-box routing-box-inferior"
                                            title="Soma 4 RES Paydaş Katılım Planı">
                                            <article class="routing-box-body content-body p-2">
                                                <h6 class="content-title h6 mb-0"><i
                                                        class="icon-download"></i>{!! $power->file2_name !!}</h6>
                                            </article>
                                        </a></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if(isset($power->galleries[0]['image']) && $power->galleries[0]['image'] != null)
            <section class="content content--text pb-4 pb-lg-6 pb-xl-8 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="1.45s" data-wow-offset="0"
                     style="visibility: visible; animation-duration: 1s; animation-delay: 1.45s;">
                <div class="container">
                    <div class="row row-spacing-2 row-spacing-xl-4">
                        <div class="col-24">
                            <div class="swiper" data-swiper="{ }">
                                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper">
                                        @foreach($power->galleries as $item)
                                            <div class="swiper-slide swiper-slide-active" style="width: 1112px;"><a
                                                    href="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}" rel="slider191"
                                                    class="swipebox embed-responsive embed-responsive-16by9"
                                                    title="Soma RES">
                                                    <figure
                                                        class="content-image background embed-responsive-item loader--loaded"
                                                        src="./assets/images/empty.png"
                                                        data-src="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}"
                                                        data-loader=""
                                                        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($item['image']) }});">
                                                    </figure>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive"
                                          aria-atomic="true"></span>
                                </div>
                                <div
                                    class="swiper-button-prev swiper-button-prev-1726034401170-1 swiper-button-disabled"
                                    tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                <div class="swiper-button-next swiper-button-next-1726034401170-1" tabindex="0"
                                     role="button" aria-label="Next slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>

    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.scripts.start') }}

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <script defer src="{{ $path }}"></script>
        @endif
    @endforeach
    @stack('scripts')

    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.scripts.end') }}

    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.body.end') }}

    <script type="text/javascript" src="{{asset('front/js/app.js')}}"></script>
</div>
</body>

</html>
