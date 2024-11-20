@php
    $locale = app()->getLocale();
    $settings = \Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting::find(1);
@endphp
<footer class="footer">
    <div class="container-fluid">
        <div
            class="row row-spacing row-spacing-horizontal align-items-center justify-content-between justify-content-xxl-end">
            <div class="col-auto"><a href="/" title="Polat Enerji">
                    <figure class="content-image"><img class="svg"
                                                       src="{{ \Illuminate\Support\Facades\Storage::url($settings->site_logo) }}"
                                                       alt="Polat Enerji" height="80px"></figure>
                </a></div>
            <div class="col-auto ml-md-auto mr-xl-auto">
                <nav class="footer-sitemap">
                    <ul>
                        <li><a href="{{ $locale == 'en' ? '/en/corporate' : '/kurumsal' }}">@lang('front.header.corporate')</a></li>
                        <li><a href="{{ $locale == 'en' ? '/en/power-plants' : '/santrallerimiz' }}">@lang('front.header.powerplants')</a></li>
                        @if($locale == 'tr')
                            <li><a href="/haberler">@lang('front.header.news')</a></li>
                        @endif
                        <li><a href="{{ $locale == 'en' ? '/en/contact' : '/iletisim' }}">@lang('front.header.contact')</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-auto mr-auto ml-xl-auto mr-xl-0">
                <div class="footer-social-links">
                    <ul>
                        @foreach($settings->social_network as $platform => $url)
                            @if($url !== null)
                                <li>
                                    <a href="{{ $url }}" target="_blank" title="{{ ucfirst($platform) }}" rel="me">
                                        <i class="icon-{{ $platform }}{{ $platform === 'youtube' ? '-play' : '-1' }}"></i>
                                    </a>
                                </li>
                            @endif
                        @endforeach
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

