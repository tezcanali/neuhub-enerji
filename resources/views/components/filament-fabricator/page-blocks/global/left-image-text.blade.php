@php use Illuminate\Support\Facades\Storage; @endphp
@aware(['page'])
<section class="content pb-8 pb-sm-8 pb-xl-8">
    <div class="container-full">
        <div class="info-boxes">
            <a href="{!! $rightUrl !!}" class="info-boxes-item wow fadeInUp"
               title="{!! $rightTitle !!}">
                <div class="row row--smart2 no-gutters">
                    <div class="info-boxes-item-text col-lg-12 order-2 order-lg-1">
                        <article class="content-body">
                            <h2 class="content-title h1">{!! $rightTitle !!}</h2>
                            <p class="content-description">{!! $rightDescription !!}</p> <span
                                class="btn btn-default btn-light">Daha Fazla</span>
                        </article>
                        <div class="info-boxes-item-figure col-lg-12 order-1 order-lg-2">
                            <figure class="content-image background background--cover loader--loaded"
                                    src="./assets/images/empty.png"
                                    data-src="{{ Storage::url($rightImage) }}"
                                    data-loader="{ bg: false, over: true }"
                                    style="background-image: url({{ Storage::url($rightImage) }});"></figure>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{!! $leftUrl !!}" class="info-boxes-item wow fadeInUp" data-wow-duration="1s"
               data-wow-delay="0.25s" data-wow-offset="0"
               title="{!! $leftTitle !!}"
               style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s;">
                <div class="row row--smart3 no-gutters">
                    <div class="info-boxes-item-text col-lg-12 order-2 order-lg-2">
                        <article class="content-body">
                            <h2 class="content-title h1">{!! $leftTitle !!}</h2>
                            <p class="content-description">{!! $leftDescription !!}</p> <span
                                class="btn btn-default btn-light">Daha Fazla</span>
                        </article>
                    </div>
                    <div class="info-boxes-item-figure col-lg-12 order-1 order-lg-1">
                        <figure class="content-image background background--cover loader--loaded"
                                src="./assets/images/empty.png"
                                data-src="{{ Storage::url($leftImage) }}"
                                data-loader="{ bg: false, over: true }"
                                style="background-image: url({{ Storage::url($leftImage) }});">
                        </figure>
                    </div>
                </div>
            </a></div>
    </div>
</section>
