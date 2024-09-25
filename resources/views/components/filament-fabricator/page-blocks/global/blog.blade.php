@aware(['page'])
@php
    $blogs = \App\Models\Blog::paginate(12);
    $locale = app()->getLocale();
@endphp
<section class="content content-list pb-4 pb-sm-6 pb-xl-8" data-module="List-415">
    <div class="container">
        <div class="row row-spacing">
            @foreach($blogs as $blog)
                @if($loop->first)
                    <div class="col-lg-16">
                        <a href="{{ $locale == 'en' ? '/en/news/' . $blog->slug : '/haberler/' . $blog->slug }}"
                           target="_self" class="routing-box routing-box-sideBySide wow fadeInUp"
                           data-wow-duration="1s" data-wow-delay="0.35s" data-wow-offset="0"
                           title="{{ $blog->title }}"
                           style="visibility: visible; animation-duration: 1s; animation-delay: 0.35s;">
                            <div class="routing-box-image">
                                <figure class="content-image background background--cover loader--loaded"
                                        src="/_DEFAULT/assets/images/empty.png"
                                        data-src="{{ \Illuminate\Support\Facades\Storage::url($blog->image) }}"
                                        data-loader=""
                                        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($blog->image) }});"></figure>
                            </div>
                            <article class="routing-box-body content-body">
                                <time class="content-date">{{ $blog->created_at->format('d M Y') }}</time>
                                <h2 class="content-title h4 mb-3">{{ $blog->title }}</h2>
                                <div class="btn btn-default btn-primary">@lang('front.read_more')</div>
                            </article>
                        </a>
                    </div>
                @elseif($loop->iteration == 2)
                    <div class="col-lg-8">
                        <a href="/5-haberler/670-polat-enerji-ruzgar-enerjisinde-yine-lider/" target="_self"
                           class="routing-box routing-box-inferior wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="0.45s" data-wow-offset="0"
                           title="{{ $blog->title }}"
                           style="visibility: visible; animation-duration: 1s; animation-delay: 0.45s;">
                            <div class="routing-box-image">
                                <figure class="content-image background background--cover loader--loaded"
                                        src="/_DEFAULT/assets/images/empty.png"
                                        data-src="https://www.polatenerji.com/_FILES/_CACHE/670/Image-1920x1080-0.jpg?v=20240904132530"
                                        data-loader=""
                                        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($blog->image) }});"></figure>
                            </div>
                            <article class="routing-box-body content-body">
                                <time class="content-date">{{ $blog->created_at->format('d M Y') }}</time>
                                <h2 class="content-title h4 mb-3">{{ $blog->title }}</h2>
                                <div class="btn btn-default btn-primary">@lang('front.read_more')</div>
                            </article>
                        </a>
                    </div>
                @elseif($loop->iteration == 3)
                    <div class="col-lg-8">
                        <a
                            href="/5-haberler/668-partner-egs-ve-polat-enerji-den-turkiye-nin-en-buyuk-res-ine-entegre-edilecek-ilk-enerji-depolama-sistemi-icin-imzalar-atildi/"
                            target="_self" class="routing-box routing-box-inferior wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.55s" data-wow-offset="0"
                            title="{{ $blog->title }}"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.55s;">
                            <div class="routing-box-image">
                                <figure class="content-image background background--cover loader--loaded"
                                        src="/_DEFAULT/assets/images/empty.png"
                                        data-src="https://www.polatenerji.com/_FILES/_CACHE/668/Image-1920x1080-0.jpeg?v=20240904132530"
                                        data-loader=""
                                        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($blog->image) }});"></figure>
                            </div>
                            <article class="routing-box-body content-body">
                                <time class="content-date">{{ $blog->created_at->format('d M Y') }}</time>
                                <h2 class="content-title h4 mb-3">{{ $blog->title }}</h2>
                                <div class="btn btn-default btn-primary">@lang('front.read_more')</div>
                            </article>
                        </a>
                    </div>
                @elseif($loop->iteration == 4)
                    <div class="col-lg-16">
                        <a href="/5-haberler/666-polat-enerji-ye-bir-odul-de-icci-den/" target="_self"
                           class="routing-box routing-box-sideBySide wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="0.65s" data-wow-offset="0"
                           title="{{ $blog->title }}"
                           style="visibility: visible; animation-duration: 1s; animation-delay: 0.65s;">
                            <div class="routing-box-image">
                                <figure class="content-image background background--cover loader--loaded"
                                        src="/_DEFAULT/assets/images/empty.png"
                                        data-src="https://www.polatenerji.com/_FILES/_CACHE/666/Image-1920x1080-0.jpg?v=20240904132530"
                                        data-loader=""
                                        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($blog->image) }});"></figure>
                            </div>
                            <article class="routing-box-body content-body">
                                <time class="content-date">{{ $blog->created_at->format('d M Y') }}</time>
                                <h2 class="content-title h4 mb-3">{{ $blog->title }}</h2>
                                <!-- <div class="content-description">Content Module</div> -->
                                <div class="btn btn-default btn-primary">@lang('front.read_more')</div>
                            </article>
                        </a>
                    </div>
                @else
                    <div class="col-24">
                        <a
                            href="/5-haberler/664-polat-enerji-ye-12-turkiye-ruzgar-enerjisi-kongresinden-anlamli-odul/"
                            target="_self" class="routing-box routing-box-blog flex-row-md-reverse wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.75s" data-wow-offset="0"
                            title="{{ $blog->title }}"
                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.75s; animation-name: none;">
                            <div class="routing-box-image">
                                <figure class="content-image background background--cover loader--loaded"
                                        src="/_DEFAULT/assets/images/empty.png"
                                        data-src="https://www.polatenerji.com/_FILES/_CACHE/664/Image-1920x1080-0.jpeg?v=20240904132530"
                                        data-loader=""
                                        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($blog->image) }});"></figure>
                            </div>
                            <article class="routing-box-body content-body ">
                                <time class="content-date">{{ $blog->created_at->format('d M Y') }}</time>
                                <h2 class="content-title h4 mb-3 ">{{ $blog->title }}</h2>
                                <div class="btn btn-default btn-primary">@lang('front.read_more')</div>
                            </article>
                        </a>
                    </div>
                @endif
            @endforeach
            <div class="col-24 mt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.55s" data-wow-offset="0"
                 style="visibility: hidden; animation-duration: 1s; animation-delay: 1.55s; animation-name: none;">
                <div class="pagination row row-spacing align-items-center justify-content-between px-6">
                    <div class="col-2 d-none d-md-block"></div>
                    <div class="col-auto order-2 order-sm-0">
                        @if($blogs->onFirstPage())
                        @else
                            <a href="{{ $blogs->previousPageUrl() }}"
                               class="btn btn-arrow btn-arrow--reverse pagination-prev"></a>
                        @endif
                    </div>
                    <div class="col-sm-auto order-1 order-sm-0">
                        <ul class="pagination-bullets justify-content-center">
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                @if ($i == $blogs->currentPage())
                                    <li class="active"><a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                    </li>
                                @else
                                    <li><a href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                    <div class="col-auto order-3 order-sm-0">
                        @if($blogs->hasMorePages())
                            <a href="{{ $blogs->nextPageUrl() }}" class="btn btn-arrow pagination-next"></a>
                        @else

                        @endif
                    </div>
                    <div class="col-2 d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </div>
</section>
