@php
    $locale = app()->getLocale();
@endphp
<footer class="footer">
    <div class="container-fluid">
        <div
            class="row row-spacing row-spacing-horizontal align-items-center justify-content-between justify-content-xxl-end">
            <div class="col-auto"><a href="/" title="Polat Enerji">
                    <figure class="content-image"><img class="svg"
                                                       src="{{ asset('front/img/logo.png') }}"
                                                       alt="Polat Enerji"></figure>
                </a></div>
            <div class="col-auto ml-md-auto mr-xl-auto">
                <nav class="footer-sitemap">
                    <ul>
                        <li><a href="{{ $locale == 'en' ? '/en/corporate' : '/kurumsal' }}">@lang('front.header.corporate')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/power-plants' : '/santrallerimiz' }}">@lang('front.header.powerplants')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/news' : '/haberler' }}">@lang('front.header.news')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/contact' : '/iletisim' }}">@lang('front.header.contact')</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-auto mr-auto ml-xl-auto mr-xl-0">
                <div class="footer-social-links">
                    <ul>
                        <li><a href="https://www.facebook.com/polatenerji" target="_blank" title="Facebook"
                               rel="me"><i class="icon-facebook-1"></i></a></li>
                        <li><a href="https://www.instagram.com/polatenerji/" target="_blank" title="Instagram"
                               rel="me"><i class="icon-instagram-1"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/polat-enerji-san.-ve-tic.-a.s/about/"
                               target="_blank" title="Linked In" rel="me"><i class="icon-linkedin-1"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com/@polat.enerji" target="_blank" title="Youtube"
                               rel="me"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-auto text-md-right">
                <div class="copyright" >
                    <p>@lang('front.copyright')</p>
                    <ul class="justify-content-lg-end">
                        @if(app()->getLocale() == 'en')
                            <li>
                                <a href="/en/cookie-policy/" title="@lang('front.cookie')"
                                   class="active">@lang('front.cookie_en')</a>
                            </li>
                        @else
                            <li><a href="/politikalar-ve-belgeler/" title="@lang('front.documents')"
                                   class="active">@lang('front.documents')</a></li>
                            <li><a href="/cerez-politikasi/" title="@lang('front.cookie')" class="active">@lang('front.cookie')</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

