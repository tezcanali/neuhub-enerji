@php
    $locale = app()->getLocale();
@endphp
<header class="header">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto"><a href="{{ $locale == 'en' ? '/en/' : '/' }}">
                    <figure class="header-logo"><img class="svg"
                                                     src="{{ asset('front/img/logo.png') }}"
                                                     alt="Polat Enerji"></figure>
                </a></div>
            <div class="col-auto ml-auto d-none d-lg-block">
                <nav class="header-nav">
                    <ul>
                        <li><a href="{{ $locale == 'en' ? '/en/corporate' : '/kurumsal' }}" class="active" title="@lang('front.header.corporate')">@lang('front.header.corporate')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/power-plants' : '/santrallerimiz' }}" class="active"
                               title="@lang('front.header.powerplants')">@lang('front.header.powerplants')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/news' : '/haberler' }}" class="active" title="@lang('front.header.news')">@lang('front.header.news')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/contact' : '/iletisim' }}" class="active" title="@lang('front.header.contact')">@lang('front.header.contact')</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-auto">
                <div class="header-right-side">
                    <div class="nav-btn js-responsive-menu-open"><span></span> <span></span> <span></span>
                    </div>
                    <ul class="header-langs">
                        <li><a href="/" class="active" title="Türkçe">TR</a></li>
                        <li><a href="/en/" title="English">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="page-responsive-menu">
    <div class="page-responsive-menu-wrapper">
        <nav class="page-responsive-menu-nav">
            <ul>
                <li class="item--lg"><a href="{{ $locale == 'en' ? '/en/corporate' : '/kurumsal' }}">@lang('front.header.corporate')</a></li>
                <li class="item--lg"><a href="{{ $locale == 'en' ? '/en/power-plants' : '/santrallerimiz' }}">@lang('front.header.powerplants')</a></li>
                <li class="item--lg"><a href="{{ $locale == 'en' ? '/en/news' : '/haberler' }}">@lang('front.header.news')</a></li>
                <li class="item--lg"><a href="{{ $locale == 'en' ? '/en/contact' : '/iletisim' }}">@lang('front.header.contact')</a></li>
            </ul>
        </nav>
        <div class="page-responsive-menu-social">
            <ul>
                <li><a href="https://www.facebook.com/polatenerji" target="_blank" title="Facebook" rel="me"><i
                            class="icon-facebook-1"></i></a></li>
                <li><a href="https://www.instagram.com/polatenerji/" target="_blank" title="Instagram"
                       rel="me"><i class="icon-instagram-1"></i></a></li>
                <li><a href="https://www.linkedin.com/company/polat-enerji-san.-ve-tic.-a.s/about/"
                       target="_blank" title="Linked In" rel="me"><i class="icon-linkedin-1"></i></a></li>
                <li><a href="https://www.youtube.com/@polat.enerji" target="_blank" title="Youtube" rel="me"><i
                            class="icon-youtube-play"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="search">
    <div class="container">
        <form action="/-/" method="get" class="search-area" autocomplete="off">
            <input type="text"
                   name="keyword" placeholder=""
                   autocomplete="off">
            <button class="page-search-btn" type="submit"
                    title=""></button>
            <span class="page-search-close" onclick="App.Search.Close()" title=""></span>
        </form>
    </div>
</div>
