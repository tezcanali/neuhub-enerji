<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.start') }}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $settings = \Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting::find(1);
    @endphp
    <link rel="apple-touch-icon" sizes="76x76" href="{{ $settings->site_favicon }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $settings->site_favicon }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $settings->site_favicon }}"/>
    <link rel="shortcut icon" href="{{ $settings->site_favicon }}"/>
    <link rel="mask-icon" href="{{ asset('front/safari-pinned-tab.svg') }}" color="#000"/>
    <meta name="msapplication-TileColor" content="#000"/>
    <meta name="theme-color" content="#000"/>

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
        {{ $tag }}
    @endforeach

    {!! seo()->for($blog) !!}

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
                     data-swiper="{ &quot;autoplay&quot;: { &quot;delay&quot;: 12000 }, &quot;speed&quot;: 1200, &quot;parallax&quot;: true }">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-active" style="width: 1201px;">
                                <figure class="banner-image background--fixed loader--loaded"
                                        src="./assets/images/empty.png"
                                        data-src="{{ \Illuminate\Support\Facades\Storage::url($blog->image) }}"
                                        data-loader="{ &quot;bg&quot;: false, &quot;over&quot;: true }"
                                        data-swiper-parallax-opacity="0.4"
                                        style="opacity: 1; transform: translate3d(0px, 0px, 0px); background-image: url({{ \Illuminate\Support\Facades\Storage::url($blog->image) }});">
                                </figure>
                                <div class="banner-content">
                                    <div class="container-full d-flex align-items-end">
                                        <article class="content-body h-auto">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item wow fadeInUp" data-wow-duration="1s"
                                                        data-wow-delay="0.05s" data-wow-offset="0"
                                                        style="visibility: hidden; animation-duration: 1s; animation-delay: 0.05s; animation-name: none;">
                                                        <a href="/" target="_self" title="Anasayfa">Anasayfa</a>
                                                    </li>
                                                    <li class="breadcrumb-item active wow fadeInUp"
                                                        data-wow-duration="1s" data-wow-delay="0.15s"
                                                        data-wow-offset="0"
                                                        style="visibility: hidden; animation-duration: 1s; animation-delay: 0.15s; animation-name: none;">
                                                        <a href="/haberler" target="_self" title="Haberler">Haberler</a>
                                                    </li>
                                                </ol>
                                            </nav>
                                            <h1 class="content-title h1 wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.25s" data-wow-offset="0"
                                                style="visibility: hidden; animation-duration: 1s; animation-delay: 0.25s; animation-name: none;">
                                                Haberler</h1>
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
                <div class="row row-spacing">
                    <div class="col-24">
                        <article class="content-body"><small
                                class="content-subtitle color-primary">{{ $blog->created_at->format('d M Y H:i:s') }}</small>
                            <h2 class="content-title h2">{{ $blog->title }}</h2>
                            <div class="content-description">
                                <div class="row row-spacing">
                                    <div class="col-xl-24">
                                        {!! $blog->content !!}
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        @if($blog->galleries)
            <section class="content content--text pb-4 pb-sm-6 pb-xl-8">
                <div class="container">
                    <div class="row row-spacing-2 row-spacing-xl-4">
                        <div class="col-24">
                            <div class="row row-spacing">
                                @foreach($blog->galleries as $gallery)
                                    <div class="col-12 col-sm-8 col-md-6 col-xl-4"><a
                                            href="{{ \Illuminate\Support\Facades\Storage::url($gallery['image']) }}"
                                            class="swipebox"
                                            rel="gallery-673">
                                            <figure class="content-image"><img
                                                    src="{{ \Illuminate\Support\Facades\Storage::url($gallery['image']) }}"
                                                    data-src="{{ \Illuminate\Support\Facades\Storage::url($gallery['image']) }}"
                                                    width="100%" data-loader="{ &quot;height&quot;: 168.66 }"
                                                    alt="POLAT ENERJİ MANİSA’DAN GELECEĞE YEŞİL IŞIK YAKTI"
                                                    class="loader--loaded"></figure>
                                        </a>
                                    </div>
                                @endforeach
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
