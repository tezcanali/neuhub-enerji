@aware(['page'])
<section class="content pb-4 pb-sm-6 pb-xl-8" data-module="Boxes-375">
    <div class="container">
        <div class="row row-spacing">
            @foreach($grids as $index => $grid)
            <div class="col-lg-{{ $index == 0 ? '16' : ($index == 1 || $index == 2 ? '8' : '16') }}">
                <a href="{{ $grid['url'] }}" target="_self"
                   class="routing-box {{ $index == 0 || $index > 2 ? 'routing-box-sideBySide' : 'routing-box-inferior' }} wow fadeInUp" data-wow-duration="1s"
                   data-wow-delay="0.35s" data-wow-offset="0" title="{{ $grid['title'] }}"
                   style="visibility: visible; animation-duration: 1s; animation-delay: 0.35s;">
                    <div class="routing-box-image">
                        <figure class="content-image background background--cover loader--loaded"
                                src="./assets/images/empty.png" data-src="{{ Storage::url($grid['image']) }}"
                                data-loader=""
                                style="background-image: url('{{ Storage::url($grid['image']) }}');">
                        </figure>
                    </div>
                    <article class="routing-box-body content-body">
                        <h2 class="content-title h2">{{ $grid['title'] }}</h2>
                        <div class="content-description">{{ $grid['description'] }}</div>
                        <div class="btn btn-default btn-primary">DAHA FAZLA</div>
                    </article>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
