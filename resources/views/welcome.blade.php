
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://polatgayrimenkul.com.tr/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://polatgayrimenkul.com.tr/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://polatgayrimenkul.com.tr/favicon-16x16.png" />
    <link rel="shortcut icon" href="https://polatgayrimenkul.com.tr/favicon.ico" />
    <link rel="mask-icon" href="https://polatgayrimenkul.com.tr/safari-pinned-tab.svg" color="#000" />
    <meta name="msapplication-TileColor" content="#000" />
    <meta name="theme-color" content="#000" />
    <title>Polat Çarşı</title>

    <link rel="stylesheet" href="{{asset('front/css/fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/main.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/intlTelInput.css')}}" />
</head>

<body>
<header class="bg-piyale-color position-sticky start-0 top-0 end-0">
    <!-- mobile-menu -->
    <div class="mobile-menu">
        <div class="mobile-menu--header p-4">
            <a href="https://polatgayrimenkul.com.tr" class="logo d-block mb-4 px-0">
                <img src="https://polatgayrimenkul.com.tr/front/img/logo.png" class="h-20px" />
            </a>
            <hr class="my-4 border border-white border-opacity-50" />
            <div class="webmenu">
                <button class="d-flex align-items-center justify-content-between gap-2 w-100 fs-18 ls-2 text-white hover-text-secondary mb-4 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    Kurumsal
                    <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor"></rect>
                        <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor"></rect>
                        <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor"></rect>
                    </svg>
                </button>
                <div class="collapse" id="collapse1">
                    <div class="card card-body bg-transparent border-0 px-0 pt-0 ps-3 pb-3">
                        <a href="https://polatgayrimenkul.com.tr/hakkimizda" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Hakkımızda</a
                        >
                        <a href="https://polatgayrimenkul.com.tr/yonetim-kadrosu" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Yönetim Kadrosu
                        </a>
                        <a href="https://polatgayrimenkul.com.tr/biz-kimiz" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Biz Kimiz?
                        </a>
                    </div>
                </div>
                <button class="d-flex align-items-center justify-content-between gap-2 w-100 fs-18 ls-2 text-white hover-text-secondary mb-4 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Projelerimiz
                    <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor"></rect>
                        <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor"></rect>
                        <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor"></rect>
                    </svg>
                </button>
                <div class="collapse" id="collapse2">
                    <div class="card card-body bg-transparent border-0 px-0 pt-0 ps-3 pb-3">
                        <button class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center justify-content-between gap-3 text-start w-100" type="button" data-bs-toggle="collapse" data-bs-target="#alt1" aria-expanded="false" aria-controls="alt1">
                            <div class="d-flex align-items-center gap-3">
                                <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                    <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                    <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                </svg>
                                Konut
                            </div>
                            <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor"></rect>
                                <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor"></rect>
                                <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor"></rect>
                            </svg>
                        </button>
                        <div class="collapse" id="alt1">
                            <div class="card card-body bg-transparent border-0 px-0 pt-0 ps-4 pb-3">
                                <button class="d-flex align-items-center justify-content-between w-100 fs-15 text-white py-2 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#altalt1" aria-expanded="false" aria-controls="altalt1">Yurtiçi <i class="fa fa-plus ms-2 fs-12 plus"></i><i class="fa fa-minus ms-2 fs-12 minus"></i></button>
                                <div class="collapse" id="altalt1">
                                    <div class="card card-body bg-transparent border-0 px-0 pt-3 ps-3 pb-3">
                                        <a href="https://polatgayrimenkul.com.tr/projeler/levent" class="d-block fs-15 text-white-50 mb-2">Polat Levent Exclusive</a>
                                        <a href="https://polatgayrimenkul.com.tr/projeler/piyale-pasa" class="d-block fs-15 text-white-50 mb-2">Piyalepaşa İstanbul Premium</a>
                                        <a href="https://polatgayrimenkul.com.tr/projeler/akatlar" class="d-block fs-15 text-white-50 mb-2">Polat Akatlar</a>
                                        <a href="https://polatgayrimenkul.com.tr/projeler/goztepe" class="d-block fs-15 text-white-50 mb-2">Polat Göztepe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Otel
                        </a>
                        <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Ofis
                        </a>
                        <a href="https://polatgayrimenkul.com.tr/projeler/carsi" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Alışveriş Sokağı
                        </a>
                    </div>
                </div>
                <button class="d-flex align-items-center justify-content-between gap-2 w-100 fs-18 ls-2 text-white hover-text-secondary mb-4 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    Faaliyet Alanlarımız
                    <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor"></rect>
                        <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor"></rect>
                        <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor"></rect>
                    </svg>
                </button>
                <div class="collapse" id="collapse3">
                    <div class="card card-body bg-transparent border-0 px-0 pt-0 ps-3 pb-3">
                        <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Gayrimenkul Geliştirme</a
                        >
                        <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3">
                            <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                            </svg>
                            Yönetim Hizmetleri
                        </a>
                    </div>
                </div>
                <a href="https://polatgayrimenkul.com.tr/iletisim" class="d-block fs-18 ls-2 text-white hover-text-secondary mb-4">İletişim</a>
            </div>
            <hr class="my-4 border border-white border-opacity-50" />
            <div class="buttons d-flex align-items-center">
                <a href="#" class="w-100 h-130px d-flex align-items-center justify-content-center flex-column gap-3 bg-gray-800 text-white">
                    <svg width="34" height="20" viewBox="0 0 44 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.36584 27.3253C3.30161 27.3253 2.39056 26.9464 1.6327 26.1885C0.874841 25.4307 0.495911 24.5196 0.495911 23.4554V4.10577C0.495911 3.04154 0.874841 2.13049 1.6327 1.37263C2.39056 0.61477 3.30161 0.23584 4.36584 0.23584H23.7155C24.7797 0.23584 25.6907 0.61477 26.4486 1.37263C27.2065 2.13049 27.5854 3.04154 27.5854 4.10577V23.4554C27.5854 24.5196 27.2065 25.4307 26.4486 26.1885C25.6907 26.9464 24.7797 27.3253 23.7155 27.3253H4.36584ZM4.36584 23.4554H23.7155V4.10577H4.36584V23.4554ZM6.3008 19.5855H21.7805L16.7496 12.8131L13.0732 17.6505L10.3642 14.0708L6.3008 19.5855ZM31.4553 27.3253V0.23584H35.3252V27.3253H31.4553ZM39.1952 27.3253V0.23584H43.0651V27.3253H39.1952Z"
                            fill="currentcolor"
                        ></path>
                    </svg>
                    <div class="fs-14 ls-1">Foto Galeri</div>
                </a>
                <a href="https://www.youtube.com/@PolatGayrimenkulKentsel" class="w-100 h-130px d-flex align-items-center justify-content-center flex-column gap-3 bg-gray-900 text-white">
                    <svg width="37" height="29" viewBox="0 0 37 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.13514 0.135254L7.70272 7.2704H13.0541L9.4865 0.135254H13.0541L16.6217 7.2704H21.973L18.4054 0.135254H21.973L25.5406 7.2704H30.892L27.3244 0.135254H32.6757C33.6568 0.135254 34.4967 0.484579 35.1953 1.18323C35.894 1.88188 36.2433 2.72175 36.2433 3.70283V25.1083C36.2433 26.0894 35.894 26.9292 35.1953 27.6279C34.4967 28.3265 33.6568 28.6759 32.6757 28.6759H4.13514C3.15406 28.6759 2.31419 28.3265 1.61554 27.6279C0.916891 26.9292 0.567566 26.0894 0.567566 25.1083V3.70283C0.567566 2.72175 0.916891 1.88188 1.61554 1.18323C2.31419 0.484579 3.15406 0.135254 4.13514 0.135254ZM4.13514 10.838V25.1083H32.6757V10.838H4.13514Z"
                            fill="currentcolor"
                        ></path>
                    </svg>
                    <div class="fs-14 ls-1">Reklam Filmleri</div>
                </a>
            </div>
        </div>
    </div>
    <!-- end #mobile-menu -->
    <div class="d-flex align-items-center justify-content-xl-center justify-content-end h-100 position-relative ps-xl-5 ps-4 pe-xl-0 pe-3">
        <a href="https://polatgayrimenkul.com.tr" class="logo d-block flex-1 ps-0">
            <img src="https://polatgayrimenkul.com.tr/front/img/logo.png" class="h-20px" />
        </a>
        <ul class="webmenu d-xl-flex d-none align-items-center h-100 gap-4">
            <li class="px-2">
                <a href="#" class="d-block fs-16 ls-2 text-white hover-text-secondary">
                    Kurumsal
                    <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor" />
                        <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor" />
                        <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor" />
                    </svg>
                </a>
                <div class="dropdown-box">
                    <div class="dropdown-content py-4">
                        <ul>
                            <li>
                                <a href="https://polatgayrimenkul.com.tr/hakkimizda" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Hakkımızda
                                </a>
                            </li>
                            <li>
                                <a href="https://polatgayrimenkul.com.tr/yonetim-kadrosu" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Yönetim Kadrosu
                                </a>
                            </li>
                            <li>
                                <a href="https://polatgayrimenkul.com.tr/biz-kimiz" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Biz Kimiz?
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="px-2">
                <a href="https://polatgayrimenkul.com.tr/projeler" class="d-block fs-16 ls-2 text-white hover-text-secondary">
                    Projelerimiz
                    <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor" />
                        <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor" />
                        <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor" />
                    </svg>
                </a>
                <div class="dropdown-box">
                    <div class="dropdown-content py-4">
                        <ul>
                            <li class="open-sub">
                                <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Konut
                                </a>
                                <div class="sub-box">
                                    <ul class="px-4 py-3">
                                        <li>
                                            <button class="d-flex align-items-center justify-content-between w-100 fs-15 text-white py-2 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Yurt içi Projelerimiz<i class="fa fa-plus ms-2 fs-12 plus"></i><i class="fa fa-minus ms-2 fs-12 minus"></i></button>
                                            <div class="collapse" id="collapse4">
                                                <div class="card card-body bg-transparent border-0 px-0 pt-3 ps-3 pb-3">
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/levent" class="d-block fs-15 text-white-50 mb-2">Polat Levent Exclusive</a>
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/piyale-pasa" class="d-block fs-15 text-white-50 mb-2">Piyalepaşa İstanbul Premium</a>
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/piyalepasa-istanbul" class="d-block fs-15 text-white-50 mb-2">Piyalepaşa İstanbul</a>
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/akatlar" class="d-block fs-15 text-white-50 mb-2">Polat Akatlar</a>
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/goztepe" class="d-block fs-15 text-white-50 mb-2">Polat Ev Göztepe</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <button class="d-flex align-items-center justify-content-between w-100 fs-15 text-white py-2 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Yurt dışı Projelerimiz <i class="fa fa-plus ms-2 fs-12 plus"></i><i class="fa fa-minus ms-2 fs-12 minus"></i></button>
                                            <div class="collapse" id="collapse5">
                                                <div class="card card-body bg-transparent border-0 px-0 pt-3 ps-3 pb-3">
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/duna-pearl" class="d-block fs-15 text-white-50 mb-2">Duna Pearl</a>
                                                    <a href="https://polatgayrimenkul.com.tr/projeler/city-pearl" class="d-block fs-15 text-white-50 mb-2">City Pearl</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="open-sub">
                                <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Otel
                                </a>
                                <div class="sub-box">
                                    <ul class="px-4 py-3">
                                        <li>
                                            <a href="https://polatgayrimenkul.com.tr/projeler/duna-pearl#dunaotel" class="d-block fs-15 text-white py-2 hover-text-underline">Four Points by Sheraton Budapest Danube</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="open-sub">
                                <a href="kurumsal.html" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Ofis
                                </a>
                                <div class="sub-box">
                                    <ul class="px-4 py-3">
                                        <li>
                                            <a href="https://polatgayrimenkul.com.tr/projeler/kagithane-ofis" class="d-block fs-15 text-white py-2 hover-text-underline">Polat Ofis Kağıthane</a>
                                        </li>
                                        <li>
                                            <a href="https://polatgayrimenkul.com.tr/projeler/piyale-ofis" class="d-block fs-15 text-white py-2 hover-text-underline">Polat Ofis Piyalepaşa</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="https://polatgayrimenkul.com.tr/projeler/carsi" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Alışveriş Sokağı
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="px-2">
                <a href="#" class="d-block fs-16 ls-2 text-white hover-text-secondary">
                    Faaliyet Alanlarımız
                    <svg class="text-gray-400" width="10" height="6" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="8" width="4" height="4" transform="rotate(-180 8 8)" fill="currentcolor" />
                        <rect x="4" y="4" width="4" height="4" transform="rotate(-180 4 4)" fill="currentcolor" />
                        <rect x="12" y="4" width="4" height="4" transform="rotate(-180 12 4)" fill="currentcolor" />
                    </svg>
                </a>
                <div class="dropdown-box">
                    <div class="dropdown-content py-4">
                        <ul>
                            <li>
                                <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Gayrimenkul Geliştirme
                                </a>
                            </li>
                            <li class="open-sub">
                                <a href="#" class="d-block fs-15 text-gray-500 ls-1 mb-2 d-flex align-items-center gap-3 hover-bg-secondary px-2 py-2">
                                    <svg class="text-gray-400" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="3" width="3" height="3" transform="rotate(90 6 3)" fill="currentcolor" />
                                        <rect x="3" y="6" width="3" height="3" transform="rotate(90 3 6)" fill="currentcolor" />
                                        <rect x="3" width="3" height="3" transform="rotate(90 3 0)" fill="currentcolor" />
                                    </svg>
                                    Yönetim Hizmetleri
                                </a>
                                <div class="sub-box">
                                    <ul class="px-4 py-3">
                                        <li>
                                            <a href="https://polatgayrimenkul.com.tr/polat-yonetim" class="d-block fs-15 text-white py-2 hover-text-underline">Polat Yönetim</a>
                                        </li>
                                        <li>
                                            <button class="d-flex align-items-center justify-content-between w-100 fs-15 text-white py-2 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Piyalepaşa Yönetim <i class="fa fa-plus ms-2 fs-12 plus"></i><i class="fa fa-minus ms-2 fs-12 minus"></i></button>
                                            <div class="collapse" id="collapseExample2">
                                                <div class="card card-body bg-transparent border-0 px-0 pt-3 ps-3 pb-3">
                                                    <a href="https://polatgayrimenkul.com.tr/yonetim/piyale-pasa" class="d-block fs-15 text-white-50 mb-2">Polat Piyalepaşa Çarşı</a>
                                                    <a href="https://polatgayrimenkul.com.tr/yonetim/hanspaces" class="d-block fs-15 text-white-50 mb-2">Han Spaces Piyalepaşa</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="px-2">
                <a href="https://polatgayrimenkul.com.tr/iletisim" class="d-block fs-16 ls-2 text-white hover-text-secondary">İletişim</a>
            </li>
        </ul>
        <!-- buttons -->
        <div class="buttons d-xl-flex d-none flex-1 justify-content-end h-100">
            <a href="https://www.youtube.com/@PolatGayrimenkulKentsel" class="w-130px h-100 d-flex align-items-center justify-content-center flex-column gap-3 bg-gray-900 text-white">
                <svg width="37" height="20" viewBox="0 0 37 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.13514 0.135254L7.70272 7.2704H13.0541L9.4865 0.135254H13.0541L16.6217 7.2704H21.973L18.4054 0.135254H21.973L25.5406 7.2704H30.892L27.3244 0.135254H32.6757C33.6568 0.135254 34.4967 0.484579 35.1953 1.18323C35.894 1.88188 36.2433 2.72175 36.2433 3.70283V25.1083C36.2433 26.0894 35.894 26.9292 35.1953 27.6279C34.4967 28.3265 33.6568 28.6759 32.6757 28.6759H4.13514C3.15406 28.6759 2.31419 28.3265 1.61554 27.6279C0.916891 26.9292 0.567566 26.0894 0.567566 25.1083V3.70283C0.567566 2.72175 0.916891 1.88188 1.61554 1.18323C2.31419 0.484579 3.15406 0.135254 4.13514 0.135254ZM4.13514 10.838V25.1083H32.6757V10.838H4.13514Z"
                        fill="currentcolor"
                    />
                </svg>
                <div class="fs-14 ls-1">Reklam Filmleri</div>
            </a>
        </div>
        <!-- end #buttons -->
        <button type="button" class="ls-2 fw-semibold text-white d-xl-none d-flex align-items-center gap-3 me-4" data-bs-toggle="modal" data-bs-target="#call">
            <svg width="16" height="16" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.95 18.2388C14.8667 18.2388 12.8083 17.7846 10.775 16.8763C8.74167 15.9679 6.89167 14.6804 5.225 13.0138C3.55833 11.3471 2.27083 9.4971 1.3625 7.46377C0.454167 5.43044 0 3.3721 0 1.28877C0 0.98877 0.1 0.73877 0.3 0.53877C0.5 0.33877 0.75 0.23877 1.05 0.23877H5.1C5.33333 0.23877 5.54167 0.317936 5.725 0.47627C5.90833 0.634603 6.01667 0.822103 6.05 1.03877L6.7 4.53877C6.73333 4.80544 6.725 5.03044 6.675 5.21377C6.625 5.3971 6.53333 5.55544 6.4 5.68877L3.975 8.13877C4.30833 8.75544 4.70417 9.35127 5.1625 9.92627C5.62083 10.5013 6.125 11.0554 6.675 11.5888C7.19167 12.1054 7.73333 12.5846 8.3 13.0263C8.86667 13.4679 9.46667 13.8721 10.1 14.2388L12.45 11.8888C12.6 11.7388 12.7958 11.6263 13.0375 11.5513C13.2792 11.4763 13.5167 11.4554 13.75 11.4888L17.2 12.1888C17.4333 12.2554 17.625 12.3763 17.775 12.5513C17.925 12.7263 18 12.9221 18 13.1388V17.1888C18 17.4888 17.9 17.7388 17.7 17.9388C17.5 18.1388 17.25 18.2388 16.95 18.2388ZM3.025 6.23877L4.675 4.58877L4.25 2.23877H2.025C2.10833 2.9221 2.225 3.5971 2.375 4.26377C2.525 4.93044 2.74167 5.58877 3.025 6.23877ZM11.975 15.1888C12.625 15.4721 13.2875 15.6971 13.9625 15.8638C14.6375 16.0304 15.3167 16.1388 16 16.1888V13.9888L13.65 13.5138L11.975 15.1888Z"
                    fill="currentcolor"
                />
            </svg>
            <span class="d-md-block d-none">Sizi arayalım</span>
        </button>
        <button class="menu-trigger d-xl-none d-block" id="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<div class="hero hero-swiper swiper position-relative h-auto bg-piyale-color">
    <div class="hero-scroll d-md-flex d-none flex-column align-items-center">
        <div class="scroll-text fw-bold text-white d-lg-block d-none">Yukarı Kaydır</div>
        <div class="line-scroll">
            <span class="line"></span>
        </div>
    </div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="w-100 h-100 d-flex flex-md-row flex-column position-relative gap-lg-0 gap-4">
                <div class="position-relative d-flex align-items-center justify-content-center flex-1">
                    <div class="row justify-content-center position-relative w-100 h-100" style="padding-top: 15px;">
                        <div class="col-xl-8 col-lg-10">
                            <div class="hero-text ps-lg-0 ps-3 pe-lg-0 pe-3 d-flex h-100 flex-column justify-content-around">
                                <div class="hero-page-title hero-page-title-carsi d-flex flex-column lh-1 gap-md-2 mt-md-5" style="transform: rotate(-90deg)">
                                    <span class="fs-64 ls-3 title" style="color: #ffe8bb">Piyalepaşa</span>
                                    <span class="fs-54 text-white text ls-3">İstanbul</span>
                                </div>
                                <p class="text-white ps-md-5 pt-md-0 pt-4">Polat Piyalepaşa İstanbul, gastronomi, alışveriş ve sanatın istanbul’daki yeni adresi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image-content carsi position-relative flex-1">
                    <div class="position-absolute start-0 top-0 z-3 ms-n5">
                        <img src="https://polatgayrimenkul.com.tr/img/c-birds.png" class="h-250px ms-n5" data-parallax="10" />
                    </div>
                    <div class="hero-img-list swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/7.jpg" data-fancybox>
                                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/7.jpg" class="w-100 h-700px pp-hero-img object-fit-cover hero-image" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/8.jpg" data-fancybox>
                                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/8.jpg" class="w-100 h-700px pp-hero-img object-fit-cover hero-image" />
                                </a>
                            </div>
                        </div>
                        <div class="position-absolute start-0 bottom-0 m-4 d-flex align-items-center gap-2 z-3">
                            <button class="hero-img-button-prev w-70px h-70px bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center fs-5 text-white">
                                <i class="fa fa-arrow-left"></i>
                            </button>
                            <button class="hero-img-button-next w-70px h-70px bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center fs-5 text-white">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #hero -->

<!-- section -->
<section class="bg-piyale-color text-white position-relative">
    <div class="pt-md-5 ps-lg-5 overflow-hidden">
        <div class="ps-md-5 pt-lg-5 pt-4">
            <div class="position-relative">
                <div class="row g-0">
                    <div class="col-lg-8 col-md-6">
                        <div class="position-relative">
                            <img src="https://polatgayrimenkul.com.tr/img/c-birds3.png" class="start-0 top-0 h-200px ms-5 mt-n5 position-absolute z-3" data-parallax="-10" />
                            <img src="https://polatgayrimenkul.com.tr/img/c-leaf2.png" class="start-50 top-100 h-150px ms-5 mt-n5 position-absolute z-3" data-parallax="-10" />
                            <div class="position-absolute end-0 bottom-0 me-n5">
                                <img src="https://polatgayrimenkul.com.tr/img/tree.png" class="h-500px me-n5 mb-n2 d-md-block d-none" />
                            </div>
                            <img src="https://polatgayrimenkul.com.tr/img/c1.png" class="w-100 h-450px c-img object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="https://polatgayrimenkul.com.tr/img/c2.png" class="w-100 h-450px c-img object-fit-cover" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="py-md-5 py-4 px-md-0 px-3 position-relative h-100">
                        <div class="position-absolute start-100 translate-middle-x bottom-0 d-lg-block d-none">
                            <img src="https://polatgayrimenkul.com.tr/img/union.svg" alt="" />
                        </div>
                        <div class="w-1px h-100 bg-white bg-opacity-10 position-absolute end-0 top-0 d-lg-block d-none"></div>
                        <div class="fs-1 fw-semibold text-white lh-sm mb-4 text-balance">Şehrin Kalbinde Hayat Dolu Bir Semt</div>
                        <p class="text-white fs-18">Piyalepaşa İstanbul; konut, rezidans, ofis, otel ve Polat Piyalepaşa Çarşı’dan oluşan konseptiyle canlı ve hareketli bir sosyal yaşantıyı da beraberinde getiriyor.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="w-100 h-1px bg-white bg-opacity-10 d-lg-none d-block"></div>
                    <div class="py-md-5 py-4 px-md-0 px-3 h-100">
                        <div class="fs-3 mb-4">Evinizin Önü Polat Piyalepaşa Çarşı</div>
                        <p class="mb-4 fs-18 text-white">Piyalepaşa İstanbul’un açık ve kapalı alışveriş ve yaşam alanlarında eğlenceden modaya, sanattan lezzete aradığınız her şey hemen yanı başınızda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end #section -->

<!-- section -->
<section class="py-lg-5 py-4">
    <div class="container">
        <div class="text-center">
            <div class="fs-3 fw-semibold pb-3">Polat Piyalepaşa Çarşı;</div>
            <p class="fs-18 mb-3">İstiklal Caddesi, Karaköy, Kabataş, Nişantaşı ve Beşiktaş gibi şehrin cazibe merkezlerine sadece birkaç dakika mesafede konumlanıyor. Üstelik aracıyla gelmek isteyen ziyaretçileri için de kapalı geniş bir otoparka sahip.</p>

            <p class="fs-18 mb-3">Açık havada alışveriş keyfi sonrası yeni keşiflerle dolu bir gastronomi ve sanat deneyimi yaşamanız için sizi de Polat Piyalepaşa Çarşı’ya bekleriz!</p>
        </div>
    </div>
</section>
<!-- end #section -->

<!-- section -->
<section id="hikaye" class="pt-lg-5 pt-4 c-big position-relative">
    <div class="c-big-image position-relative">
        <div class="c-big-text text-center position-absolute start-0 end-0 top-0 mt-xl-5">
            <img src="https://polatgayrimenkul.com.tr/img/c-birds3.png" class="position-absolute start-0 top-0 mt-5 ms-5 h-200px" data-parallax="-30" />
            <img src="https://polatgayrimenkul.com.tr/img/c-birds4.png" class="position-absolute end-0 top-50 mt-5 h-200px d-md-block d-none" data-parallax="30" />
            <div class="container d-flex flex-column gap-3 align-items-center justify-content-center">
                <div style="color: #ffffff">
                    <div class="fs-2 fw-lighter ls-3 title">Polat Piyalepaşa Çarşı</div>
                    <div class="fs-74 fw-bolder lh-sm subtitle">İstanbul'un kalbi<br> Beyoğlu'nda.</div>
                </div>
            </div>
        </div>
        <img src="https://polatgayrimenkul.com.tr/img/carsi2.jpg" class="w-100" />
    </div>
</section>
<!-- end #section -->

<!-- section -->
<section>
    <div class="row g-0">
        <div class="col-lg-6">
            <iframe width="720" height="400" src="https://www.youtube.com/embed/JQYbWgCSnUQ?si=DIX5s_jzBRj3Ekx8&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
            <div class="w-100 c-box-2 h-400px bg-piyale-color p-5">
                <div class="p-xl-3">
                    <div class="fs-64 lh-sm fw-bold text-white">“</div>
                    <div class="fs-4 text-white">Her dairede dikkat çeken tavan yükseklikleri ferah bir atmosfer yaratırken, her dairede yer alan balkon, verilen depo alanı ve gün ışığından maksimum faydalanmaya imkân veren büyük pencereler ayrıcalıklı özellikler arasında yer alıyor. </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end #section -->

<!-- section -->
<section id="galeri" class="py-lg-5 py-4 position-relative">
    <div class="container position-relative z-2">
        <div class="title d-flex align-items-center gap-3 mb-4 pb-lg-4">
            <div class="w-50px h-1px bg-black"></div>
            <div class="fs-40 ls-1 fw-normal">Galeri.</div>
        </div>
        <div class="row g-md-4 g-2">
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/1.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/1.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/1.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/1.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/2.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/2.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/3.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/3.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/4.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/4.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/5.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/5.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/6.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/6.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/7.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/7.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/8.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/8.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/3.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/3.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/5.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/5.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/6.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/6.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/7.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/7.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/8.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/8.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/carsi/9.png" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/carsi/9.png" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/9.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/9.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/10.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/10.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/14.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/14.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/15.jpg" data-fancybox="gallery">
                    <img src="https://polatgayrimenkul.com.tr/img/piyalepasa-proje/15.jpg" class="w-100 h-300px object-fit-cover" />
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end #section -->

<!-- section -->
<div class="location-image position-relative h-500px">
    <img src="https://polatgayrimenkul.com.tr/img/yp.png" class="position-absolute end-0 top-50 translate-middle-y z-1 h-700px" />
    <div class="container position-relative z-3 d-flex align-items-center h-100">
        <div class="row">
            <div class="col-lg-9">
                <div class="fs-48 lh-sm fw-normal ls-1">Şehrin Kalbinde Hayat Dolu Bir Semt</div>
            </div>
        </div>
    </div>
</div>

<!-- section -->
<section class="contact-map position-relative pb-lg-0 pb-5 mb-lg-0 mb-4 z-3">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4 col-md-8 col-7">
                <div class="w-100 h-125px bg-piyale-color px-4 d-flex align-items-center text-white border-bottom border-black border-opacity-50">
                    <div class="d-flex flex-column">
                        <div class="fs-1 fw-semibold">Lokasyon</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <a href="https://iett.istanbul/Announcement/Detail/2660">
                    <img src="https://polatgayrimenkul.com.tr/img/nerede.png" class="h-125px" />
                </a>
            </div>
        </div>
    </div>
    <div class="c-map h-550px position-relative">
        <div id="map" class="position-absolute start-0 top-0 w-100 h-100"></div>
        <div class="container h-100">
            <div class="row h-100 g-0">
                <div class="col-lg-4">
                    <div class="w-100 d-flex align-items-center h-100 position-relative z-2">
                        <div class="bg-piyale-color px-4 text-white mt-lg-0 mt-3 w-100 h-100 c-map-box position-relative">
                            <div class="bg-piyale-color position-absolute c-map-box-content start-0 bottom-100 w-100 h-100px z-1 d-lg-block d-none"></div>
                            <div class="mb-lg-5 mb-4 position-relative z-2 mt-lg-n5 pt-lg-0 pt-4">
                                <div class="fw-normal mb-4">Adres</div>
                                <p>İstiklal Mah. Piyalepaşa Bulvarı Polat Ofis Piyalepaşa D Blok No:24 Giriş Katı Beyoğlu / İstanbul</p>
                            </div>
                            <div class="mb-lg-5 mb-4">
                                <div class="fw-normal mb-4">Telefon</div>
                                <p>0 850 756 90 00</p>
                            </div>
                            <div class="mb-lg-5 mb-4">
                                <div class="fw-normal mb-4">E-mail</div>
                                <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb9693bb8b94979a8f8294959e8f9296d5989496">[email&#160;protected]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-bottom h-100px">
            <div class="row g-0 h-100">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 h-100">
                    <a href="https://maps.app.goo.gl/goAM2TcU1sMZogMD8" class="d-flex border-end align-items-center justify-content-center h-100 gap-3">
                        <svg width="48" height="48" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_420_233" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="69" height="69">
                                <rect width="69" height="69" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_420_233)">
                                <path
                                    d="M34.5 66.1248C30.1396 66.1248 26.0307 65.2982 22.1734 63.6451C18.3161 61.992 14.962 59.7399 12.1109 56.8888C9.2599 54.0378 7.00781 50.6836 5.35469 46.8263C3.70156 42.969 2.875 38.8602 2.875 34.4998C2.875 30.0914 3.70156 25.9706 5.35469 22.1373C7.00781 18.3039 9.2599 14.9617 12.1109 12.1107C14.962 9.25965 18.3161 7.00757 22.1734 5.35444C26.0307 3.70132 30.1396 2.87476 34.5 2.87476C38.9083 2.87476 43.0292 3.70132 46.8625 5.35444C50.6958 7.00757 54.038 9.25965 56.8891 12.1107C59.7401 14.9617 61.9922 18.3039 63.6453 22.1373C65.2984 25.9706 66.125 30.0914 66.125 34.4998C66.125 38.8602 65.2984 42.969 63.6453 46.8263C61.9922 50.6836 59.7401 54.0378 56.8891 56.8888C54.038 59.7399 50.6958 61.992 46.8625 63.6451C43.0292 65.2982 38.9083 66.1248 34.5 66.1248ZM32.7031 56.8529C33.1823 57.3321 33.7333 57.5716 34.3563 57.5716C34.9792 57.5716 35.5302 57.3321 36.0094 56.8529L56.7094 36.1529C57.1885 35.6737 57.4281 35.0987 57.4281 34.4279C57.4281 33.7571 57.1885 33.1821 56.7094 32.7029L36.0094 12.0029C35.5302 11.5237 34.9792 11.2841 34.3563 11.2841C33.7333 11.2841 33.1823 11.5237 32.7031 12.0029L12.0031 32.7029C11.524 33.1821 11.2844 33.7571 11.2844 34.4279C11.2844 35.0987 11.524 35.6737 12.0031 36.1529L32.7031 56.8529ZM22.9281 43.0529V31.5529C22.9281 30.6904 23.1917 29.9956 23.7188 29.4685C24.2458 28.9414 24.9406 28.6779 25.8031 28.6779H37.7344L34.7156 25.5154L38.7406 21.4904L48.8031 31.5529L38.7406 41.6154L34.7156 37.5904L37.7344 34.4279H28.6781V43.0529H22.9281ZM34.5 60.3748C41.7354 60.3748 47.8568 57.8711 52.8641 52.8638C57.8714 47.8565 60.375 41.7352 60.375 34.4998C60.375 27.2643 57.8714 21.143 52.8641 16.1357C47.8568 11.1284 41.7354 8.62476 34.5 8.62476C27.2646 8.62476 21.1432 11.1284 16.1359 16.1357C11.1286 21.143 8.625 27.2643 8.625 34.4998C8.625 41.7352 11.1286 47.8565 16.1359 52.8638C21.1432 57.8711 27.2646 60.3748 34.5 60.3748Z"
                                    fill="#850000"
                                />
                            </g>
                        </svg>
                        <span class="fs-18" style="color: #850000">Google Maps Yol Tarifi Al</span>
                    </a>
                </div>
                <div class="col-lg-4 h-100">
                    <a href="#" class="d-flex align-items-center justify-content-center h-100 gap-3">
                        <svg width="40" height="40" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_420_238" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="62" height="62">
                                <rect width="61.959" height="61.959" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_420_238)">
                                <path
                                    d="M0 59.3773V7.74479C0 6.3249 0.505568 5.10938 1.5167 4.09825C2.52784 3.08711 3.74336 2.58154 5.16325 2.58154H23.2346C24.6545 2.58154 25.87 3.08711 26.8812 4.09825C27.8923 5.10938 28.3979 6.3249 28.3979 7.74479V59.3773H23.2346V54.214H5.16325V59.3773H0ZM40.0152 59.3773V42.3386L45.5657 37.0462L44.2103 30.334C42.5323 32.2702 40.4992 33.7224 38.1112 34.6905C35.7232 35.6586 33.346 36.1427 30.9795 36.1427V30.9794C33.0448 30.9794 35.0455 30.4846 36.9818 29.495C38.918 28.5054 40.51 26.9994 41.7578 24.9771L43.694 21.8146C44.3394 20.739 45.286 20.0075 46.5338 19.6203C47.7816 19.233 48.9648 19.276 50.0835 19.7493L61.959 24.7835V37.4335H56.7957V28.2042L53.1169 26.6552L59.3774 59.3773H54.085L50.1481 40.9187L45.1784 45.5656V59.3773H40.0152ZM5.16325 49.0508H23.2346V7.74479H5.16325V49.0508ZM10.3265 33.561L19.3622 28.3978L10.3265 23.2345V33.561ZM43.8876 18.0713C42.4677 18.0713 41.2522 17.5657 40.2411 16.5546C39.2299 15.5434 38.7244 14.3279 38.7244 12.908C38.7244 11.4881 39.2299 10.2726 40.2411 9.2615C41.2522 8.25036 42.4677 7.74479 43.8876 7.74479C45.3075 7.74479 46.523 8.25036 47.5342 9.2615C48.5453 10.2726 49.0509 11.4881 49.0509 12.908C49.0509 14.3279 48.5453 15.5434 47.5342 16.5546C46.523 17.5657 45.3075 18.0713 43.8876 18.0713Z"
                                    fill="#850000"
                                />
                            </g>
                        </svg>
                        <span class="fs-18" style="color: #850000">Lokasyon Videosu İzle</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class="bg-gray-50 py-md-5 py-4">
        <div class="container py-xl-5">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-11">
                    <div class="fs-3 ls-2 text-center pb-md-4 pb-3">ŞİMDİ HAYATINIZIN RUTİNİNDEN UZAKLAŞIN, YENİ MACERANIZ BURADA BAŞLASIN!</div>
                    <p class="fs-5 text-gray-500 ls-3 text-center">PROJELERİMİZİ YAKINDAN TANIMAK İSTER MİSİNİZ?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-info d-flex align-items-stretch justify-content-between flex-lg-row flex-column">
        <div class="contact-info-item flex-1 border-end">
            <div class="d-flex align-items-center justify-content-center w-100 p-xl-5 p-lg-4 p-3 h-100">
                <div class="d-flex gap-4 w-100 h-100 py-md-4 py-3 px-md-0 px-2 align-items-center justify-content-center text-md-start text-center">
                    <svg class="flex-shrink-0 mt-1 d-md-block d-none" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 22.0001V20.0001C7.91672 19.7668 6.12922 18.9043 4.63755 17.4126C3.14588 15.9209 2.28338 14.1334 2.05005 12.0501H0.0500488V10.0501H2.05005C2.28338 7.96676 3.14588 6.17926 4.63755 4.6876C6.12922 3.19593 7.91672 2.33343 10 2.1001V0.100098H12V2.1001C14.0834 2.33343 15.8709 3.19593 17.3625 4.6876C18.8542 6.17926 19.7167 7.96676 19.95 10.0501H21.95V12.0501H19.95C19.7167 14.1334 18.8542 15.9209 17.3625 17.4126C15.8709 18.9043 14.0834 19.7668 12 20.0001V22.0001H10ZM11 18.0501C12.9334 18.0501 14.5834 17.3668 15.95 16.0001C17.3167 14.6334 18 12.9834 18 11.0501C18 9.11676 17.3167 7.46676 15.95 6.1001C14.5834 4.73343 12.9334 4.0501 11 4.0501C9.06672 4.0501 7.41672 4.73343 6.05005 6.1001C4.68338 7.46676 4.00005 9.11676 4.00005 11.0501C4.00005 12.9834 4.68338 14.6334 6.05005 16.0001C7.41672 17.3668 9.06672 18.0501 11 18.0501Z"
                            fill="currentcolor"
                        />
                    </svg>
                    <a href="https://maps.app.goo.gl/CeDSErLFzcCwuxwQ8" class="fs-5">İstiklal Mah. Piyalepaşa Bulvarı Polat Ofis Piyalepaşa D Blok No:24 Kat:3-4 Beyoğlu / İstanbul</a>
                </div>
            </div>
        </div>
        <div class="contact-info-item flex-1 border-end">
            <div class="d-flex align-items-center justify-content-center w-100 p-xl-5 p-lg-4 p-3">
                <div class="d-flex flex-column gap-3 py-md-4 py-3 px-md-0 px-2 h-100 text-md-start text-center">
                    <div class="fs-5">Projelerimizi yakından incelemek için bize ulaşın.</div>
                    <a href="tel:902122111233" class="d-flex align-items-center justify-content-md-start justify-content-center gap-4 w-100">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.95 18.2388C14.8667 18.2388 12.8083 17.7846 10.775 16.8763C8.74167 15.9679 6.89167 14.6804 5.225 13.0138C3.55833 11.3471 2.27083 9.4971 1.3625 7.46377C0.454167 5.43044 0 3.3721 0 1.28877C0 0.98877 0.1 0.73877 0.3 0.53877C0.5 0.33877 0.75 0.23877 1.05 0.23877H5.1C5.33333 0.23877 5.54167 0.317936 5.725 0.47627C5.90833 0.634603 6.01667 0.822103 6.05 1.03877L6.7 4.53877C6.73333 4.80544 6.725 5.03044 6.675 5.21377C6.625 5.3971 6.53333 5.55544 6.4 5.68877L3.975 8.13877C4.30833 8.75544 4.70417 9.35127 5.1625 9.92627C5.62083 10.5013 6.125 11.0554 6.675 11.5888C7.19167 12.1054 7.73333 12.5846 8.3 13.0263C8.86667 13.4679 9.46667 13.8721 10.1 14.2388L12.45 11.8888C12.6 11.7388 12.7958 11.6263 13.0375 11.5513C13.2792 11.4763 13.5167 11.4554 13.75 11.4888L17.2 12.1888C17.4333 12.2554 17.625 12.3763 17.775 12.5513C17.925 12.7263 18 12.9221 18 13.1388V17.1888C18 17.4888 17.9 17.7388 17.7 17.9388C17.5 18.1388 17.25 18.2388 16.95 18.2388ZM3.025 6.23877L4.675 4.58877L4.25 2.23877H2.025C2.10833 2.9221 2.225 3.5971 2.375 4.26377C2.525 4.93044 2.74167 5.58877 3.025 6.23877ZM11.975 15.1888C12.625 15.4721 13.2875 15.6971 13.9625 15.8638C14.6375 16.0304 15.3167 16.1388 16 16.1888V13.9888L13.65 13.5138L11.975 15.1888Z"
                                fill="currentcolor"
                            />
                        </svg>
                        <div class="fs-4 fw-normal">(+90) 212 211 12 33</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="contact-info-item flex-1 border-end">
            <div class="d-flex align-items-center justify-content-center w-100 h-100 p-xl-5 p-lg-4 p-3">
                <a href="https://maps.app.goo.gl/CeDSErLFzcCwuxwQ8" class="btn btn-dark rounded-pill h-70px px-5 d-flex align-items-center justify-content-center fs-5 fw-bold">YOL TARİFİ AL</a>
            </div>
        </div>
    </div>
</section>
<footer class="bg-piyale-color p-xl-5 p-4">
    <div class="px-xl-4 py-xl-3">
        <div class="footer-top pb-xl-3">
            <div class="row">
                <div class="col-lg-11">
                    <div class="d-flex align-items-center flex-lg-row flex-column gap-lg-5 gap-4">
                        <a href="#" class="logo d-block flex-shrink-0">
                            <img src="https://polatgayrimenkul.com.tr/front/img/logo.png" class="h-20px" />
                        </a>
                        <div class="fs-18 text-gray-400 fw-lighter text-lg-start text-center">Polat olarak 65 yılı aşkın geçmişimiz ile Türkiye’nin en köklü ve güvenilir markaları arasında yer almaktan gurur duyuyor ve başta gayrimenkul, enerji, sanayi ve teknoloji olmak üzere Türkiye’nin lokomotif sektörlerine yatırım yapıyoruz.</div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="opacity-100 border-white border-opacity-15 my-xl-5 my-4" />
        <div class="footer-mid">
            <div class="row g-5">
                <div class="col-xl-9">
                    <div class="row g-xl-5 g-4">
                        <div class="col-lg-6">
                            <div class="fs-18 text-gray-600 ls-3 pb-lg-3 pb-2 text-lg-start text-center">KURUMSAL</div>
                            <div class="d-flex gap-4 flex-wrap justify-content-lg-start justify-content-center">
                                <a href="https://polatgayrimenkul.com.tr/hakkimizda" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Hakkımızda</a>
                                <a href="https://polatgayrimenkul.com.tr/biz-kimiz" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Tarihçemiz</a>
                                <a href="https://polatgayrimenkul.com.tr/yonetim-kadrosu" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Kurumsal Yönetim</a>
                                <a href="https://www.polat.com/faaliyet-raporlari" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Faaliyet Raporları</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fs-18 text-gray-600 ls-3 pb-lg-3 pb-2 text-lg-start text-center">PROJELERİMİZ</div>
                            <div class="d-flex gap-4 flex-wrap justify-content-lg-start justify-content-center">
                                <a href="https://polatgayrimenkul.com.tr/projeler/levent" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Polat Levent Exclusive</a>
                                <a href="https://polatgayrimenkul.com.tr/projeler/piyale-pasa" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Piyalepaşa İstanbul Premium</a>
                                <a href="https://polatgayrimenkul.com.tr/projeler/piyalepasa-istanbul" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Piyalepaşa İstanbul</a>
                                <a href="https://polatgayrimenkul.com.tr/projeler/akatlar" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Polat Akatlar</a>
                                <a href="https://polatgayrimenkul.com.tr/projeler/city-pearl" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">City Pearl</a>
                                <a href="https://polatgayrimenkul.com.tr/projeler/goztepe" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Polat Göztepe</a>
                                <a href="https://polatgayrimenkul.com.tr/projeler/duna-pearl" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Duna Pearl</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fs-18 text-gray-600 ls-3 pb-lg-3 pb-2 text-lg-start text-center">POLAT'TA HAYAT</div>
                            <div class="d-flex gap-4 flex-wrap justify-content-lg-start justify-content-center">
                                <a href="https://www.polat.com/polatta-hayat#careerlink" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Polat'ta Kariyer</a>
                                <a href="https://www.polat.com/polatta-hayat#academylink" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Polat'ta Gelişim</a>
                                <a href="https://www.polat.com/polatta-hayat#programlink" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Polat'ta Biz</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fs-18 text-gray-600 ls-3 pb-lg-3 pb-2 text-lg-start text-center">MEDYA MERKEZİ</div>
                            <div class="d-flex gap-4 flex-wrap justify-content-lg-start justify-content-center">
                                <a href="https://www.polat.com/medya-merkezi" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Basın Bültenleri</a>
                                <a href="https://www.polat.com/assets/pdf/Polat-Holding-KurumsalKimlik.pdf" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Kurumsal Kimlik</a>
                                <a href="https://www.polat.com/videolar" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Videolar</a>
                                <a href="https://www.polat.com/medya-merkezi" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline">Bizden Haberler</a>
                                <a href="https://polatgayrimenkul.com.tr/katalog/kupurler.pdf" class="d-flex align-items-center gap-4 fs-16 text-white hover-text-underline" target="_blank">Küpürler</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="phone-mail border-start border-white border-opacity-15 px-xl-4 pe-0 pt-xl-0 pt-4 h-100 d-flex align-items-center justify-content-center">
                        <div class="d-flex flex-xl-column flex-lg-row flex-column gap-xl-3 gap-md-4 gap-3 align-items-lg-start align-items-center">
                            <a href="tel:902122111233" class="d-flex align-items-center gap-3 text-white">
                                <svg class="flex-shrink-0" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.0002 5V2H6.00024V5H4.00024V0H16.0002V5H14.0002ZM16.0002 9.5C16.2836 9.5 16.5211 9.40417 16.7127 9.2125C16.9044 9.02083 17.0002 8.78333 17.0002 8.5C17.0002 8.21667 16.9044 7.97917 16.7127 7.7875C16.5211 7.59583 16.2836 7.5 16.0002 7.5C15.7169 7.5 15.4794 7.59583 15.2877 7.7875C15.0961 7.97917 15.0002 8.21667 15.0002 8.5C15.0002 8.78333 15.0961 9.02083 15.2877 9.2125C15.4794 9.40417 15.7169 9.5 16.0002 9.5ZM14.0002 16V12H6.00024V16H14.0002ZM16.0002 18H4.00024V14H0.000244141V8C0.000244141 7.15 0.291911 6.4375 0.875244 5.8625C1.45858 5.2875 2.16691 5 3.00024 5H17.0002C17.8502 5 18.5627 5.2875 19.1377 5.8625C19.7127 6.4375 20.0002 7.15 20.0002 8V14H16.0002V18ZM18.0002 12V8C18.0002 7.71667 17.9044 7.47917 17.7127 7.2875C17.5211 7.09583 17.2836 7 17.0002 7H3.00024C2.71691 7 2.47941 7.09583 2.28774 7.2875C2.09608 7.47917 2.00024 7.71667 2.00024 8V12H4.00024V10H16.0002V12H18.0002Z"
                                        fill="currentcolor"
                                    />
                                </svg>
                                <span class="fs-5">+90 212 211 12 33 </span>
                            </a>
                            <a href="/cdn-cgi/l/email-protection#b0d9ded6dff0c0dfdcd1c4d7d1c9c2d9ddd5dedbc5dc9ed3dfdd9ec4c2" class="d-flex align-items-center gap-3 text-white">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10V11.45C20 12.4333 19.6625 13.2708 18.9875 13.9625C18.3125 14.6542 17.4833 15 16.5 15C15.9167 15 15.3667 14.875 14.85 14.625C14.3333 14.375 13.9 14.0167 13.55 13.55C13.0667 14.0333 12.5208 14.3958 11.9125 14.6375C11.3042 14.8792 10.6667 15 10 15C8.61667 15 7.4375 14.5125 6.4625 13.5375C5.4875 12.5625 5 11.3833 5 10C5 8.61667 5.4875 7.4375 6.4625 6.4625C7.4375 5.4875 8.61667 5 10 5C11.3833 5 12.5625 5.4875 13.5375 6.4625C14.5125 7.4375 15 8.61667 15 10V11.45C15 11.8833 15.1417 12.25 15.425 12.55C15.7083 12.85 16.0667 13 16.5 13C16.9333 13 17.2917 12.85 17.575 12.55C17.8583 12.25 18 11.8833 18 11.45V10C18 7.76667 17.225 5.875 15.675 4.325C14.125 2.775 12.2333 2 10 2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18H15V20H10ZM10 13C10.8333 13 11.5417 12.7083 12.125 12.125C12.7083 11.5417 13 10.8333 13 10C13 9.16667 12.7083 8.45833 12.125 7.875C11.5417 7.29167 10.8333 7 10 7C9.16667 7 8.45833 7.29167 7.875 7.875C7.29167 8.45833 7 9.16667 7 10C7 10.8333 7.29167 11.5417 7.875 12.125C8.45833 12.7083 9.16667 13 10 13Z"
                                        fill="currentcolor"
                                    />
                                </svg>
                                <span class="fs-5"><span class="__cf_email__" data-cfemail="274e4941486757484b465340465e554e4a42494c524b0944484a095355">[email&#160;protected]</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="opacity-100 border-white border-opacity-15 my-xl-5 my-4" />
        <div class="d-flex align-items-center justify-content-md-between justify-content-center flex-wrap gap-3">
            <div class="d-flex align-items-center gap-3">
                <a href="https://www.facebook.com/polatkentselgayrimenkul/" class="d-block fs-16 fw-bold text-white">Facebook</a>
                <a href="https://www.instagram.com/polatkentselgayrimenkul/" class="d-block fs-16 fw-bold text-white">Instagram</a>
                <a href="https://www.youtube.com/@PolatGayrimenkulKentsel" class="d-block fs-16 fw-bold text-white">Youtube</a>
                <a href="https://www.linkedin.com/company/polat-kentsel-gayrimenkul-gelistirme/?viewAsMember=true" class="d-block fs-16 fw-bold text-white">Linkedin</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="#" class="d-block fs-16 text-white">Çerez Politikası</a>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="call" tabindex="-1" aria-labelledby="call" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0 bg-black">
            <div class="modal-header">
                <h1 class="modal-title fs-4 ls-2 text-white" id="exampleModalLabel">Sizi Arayalım</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <form action="" class="hero-form">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control px-0 bg-transparent ls-1 rounded-0 border-0 border-bottom border-gray-700 text-white" placeholder="AD SOYAD *" />
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control px-0 bg-transparent ls-1 rounded-0 border-0 border-bottom border-gray-700 text-white" placeholder="E-POSTA *" />
                    </div>
                    <div class="form-group mb-3">
                        <input id="phone2" name="phone" type="tel" class="form-control px-0 bg-transparent ls-1 rounded-0 border-0 border-bottom border-gray-700 text-white" placeholder="TELEFON NUMARANIZ *" />
                    </div>
                    <div class="form-group mb-3">
                        <select name="" id="" class="form-select px-0 bg-transparent ls-1 rounded-0 border-0 border-bottom border-gray-700 text-white">
                            <option value="">PROJENİZİ SEÇİNİZİ</option>
                            <option value="">Polat Levent Exclusive</option>
                            <option value="">Piyalepaşa İstanbul Premium</option>
                            <option value="">Polat Akatlar</option>
                            <option value="">Duna Pearl</option>
                            <option value="">City Pearl</option>
                        </select>
                    </div>
                    <div class="fs-12 text-white lh-sm mb-3">Tarafıma, kanunlara uygun bir şekilde, her türlü ürün ve hizmetlere ilişkin çeşitli tanıtım, promosyon, reklam, satış ve pazarlama amacıyla Polat Gayrimenkul Yatırım Ortaklığı Anonim Şirketi tarafından aşağıdaki seçtiğim yöntemler ve iletişim araçları ile ticari elektronik iletiler gönderilmesine onay veriyorum.</div>
                    <div class="d-flex mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input bg-transparent border border-white" type="checkbox" id="inlineCheckbox1" value="option1" />
                            <label class="form-check-label fs-12 text-white ls-1" for="inlineCheckbox1">Telefon</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input bg-transparent border border-white" type="checkbox" id="inlineCheckbox2" value="option2" />
                            <label class="form-check-label fs-12 text-white ls-1" for="inlineCheckbox2">SMS/Bildirim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input bg-transparent border border-white" type="checkbox" id="inlineCheckbox3" value="option3" />
                            <label class="form-check-label fs-12 text-white ls-1" for="inlineCheckbox3">E-Mail</label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" />
                        <label class="form-check-label fs-10 text-white" for="inlineCheckbox4"><a href="#" class="text-decoration-underline">Aydinlatma metni</a> kapsam ve sinirinda Polat Holding A.Ş. tarafindan kisisel verilerimin islenmesine onay veriyorum. </label>
                    </div>
                    <button type="submit" class="btn bg-white bg-opacity-15 fs-18 fw-semibold text-white ls-2 w-100 h-60px d-flex align-items-center justify-content-center mt-3">GÖNDER</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<script src="https://polatgayrimenkul.com.tr/js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://polatgayrimenkul.com.tr/js/bootstrap.min.js"></script>
<script src="https://polatgayrimenkul.com.tr/js/fancybox.umd.js"></script>
<script src="https://polatgayrimenkul.com.tr/js/swiper-bundle.min.js"></script>
<script src="https://polatgayrimenkul.com.tr/js/main.js"></script>

<script src="https://polatgayrimenkul.com.tr/js/intlTelInput.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
<script>
    mapboxgl.accessToken = "pk.eyJ1Ijoidm9sa2Fua2FyYXRhcyIsImEiOiJjaWtza3BmNWwwMDAyd3NrcnUyZGptNHJ6In0._zEoaXwKsNTzu3zv8Q-FGA";
    var map = new mapboxgl.Map({
        style: "mapbox://styles/mapbox/dark-v11",
        center: [28.92813, 41.07306],
        zoom: 8,
        container: "map",
        antialias: true,
    });
    var pos = [28.96813, 41.07306];
    map.on("load", function () {
        var layers = map.getStyle().layers;

        var labelLayerId;
        for (var i = 0; i < layers.length; i++) {
            if (layers[i].type === "symbol" && layers[i].layout["text-field"]) {
                labelLayerId = layers[i].id;
                break;
            }
        }
        map.addLayer(
            {
                id: "3d-buildings",
                source: "composite",
                "source-layer": "building",
                filter: ["==", "extrude", "true"],
                type: "fill-extrusion",
                zoom: 50,
                paint: {
                    "fill-extrusion-color": "#ccc",

                    // use an 'interpolate' expression to add a smooth transition effect to the
                    // buildings as the user zooms in
                    "fill-extrusion-height": ["interpolate", ["linear"], ["zoom"], 15, 0, 15.05, ["get", "height"]],
                    "fill-extrusion-base": ["interpolate", ["linear"], ["zoom"], 15, 0, 15.05, ["get", "min_height"]],
                    "fill-extrusion-opacity": 0.6,
                },
            },
            labelLayerId
        );
    });
    var popup = new mapboxgl.Popup({ offset: 25 }).setText("Buraya adres girilecek");

    // create DOM element for the marker
    var el = document.createElement("div");
    //el.id = 'marker';
    el.classList.add("marker-pin-4");

    // create the marker
    new mapboxgl.Marker(el)
        .setLngLat(pos)
        .setPopup(popup) // sets a popup on this marker
        .addTo(map);
</script>
<script>
    // player
    var mainvideo = document.querySelector("#mainvideo video"),
        playpause = document.getElementById("playpause"),
        lefttoplay = document.getElementById("lefttoplay"),
        righttoplay = document.getElementById("righttoplay"),
        lefttopause = document.getElementById("lefttopause"),
        righttopause = document.getElementById("righttopause");
    mainvideo.removeAttribute("controls");
    playpause.style.display = "block";
    playpause.addEventListener(
        "click",
        function () {
            if (mainvideo.paused) {
                mainvideo.play();
                playpause.classList.add("playing");
            } else {
                mainvideo.pause();
                playpause.classList.remove("playing");
            }
        },
        false
    );
    var videos = document.getElementsByClassName("videos");

    var circlePlayButton = document.getElementsByClassName("circle-play-b");

    for (let i = 0; i < circlePlayButton.length; i++) {
        let playBtn = circlePlayButton[i];
        let video = videos[i];
        function togglePlay() {
            if (video.paused || video.ended) {
                video.play();
            } else {
                video.pause();
            }
        }
        playBtn.addEventListener("click", togglePlay);
        video.addEventListener("playing", function () {
            playBtn.style.opacity = 0;
        });
        video.addEventListener("pause", function () {
            playBtn.style.opacity = 1;
        });
    }
</script>

</html>


