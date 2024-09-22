@aware(['page'])
<section class="content content--text pb-4 pb-sm-6 pb-xl-8">
    <div class="container">
        <div class="row row-spacing">
            <div class="col-24">
                <article class="content-body">
                    <small class="content-subtitle color-primary wow fadeInUp"
                                                     data-wow-duration="1s" data-wow-delay="0.05s" data-wow-offset="0"
                                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.05s;">{!! $subtitle !!}</small>
                    <h2 class="content-title h2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s"
                        data-wow-offset="0"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.15s;">{!! $title !!}</h2>
                    <div class="content-description text-align-just">
                        <div class="row row-spacing">
                            <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s"
                                 data-wow-offset="0"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s;">
                                {!! $leftContent !!}
                            </div>
                            <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s"
                                 data-wow-offset="0"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.35s;">
                                {!! $rightContent !!}
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-24">
                <div class="row row-spacing"></div>
            </div>
        </div>
    </div>
</section>
