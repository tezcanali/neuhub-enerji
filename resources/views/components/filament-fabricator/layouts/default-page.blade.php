@props(['page'])
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

    {!! seo()->for($page) !!}

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

        <x-filament-fabricator::page-blocks :blocks="$page->blocks"/>

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
