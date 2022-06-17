<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Author Meta -->
    <meta name="author" content="شركة الاوائل افضل شركة لكشف تسربات المياه بالرياض السعودية 0569920886">
    <!-- Meta Description -->
    <meta name="description"
          content="افضل شركة كشف تسربات المياه بالرياض بدون تكسير مع افضل اجهزة تكنولوجيا واصلاح تسربات المياه">
    <!-- Meta Keyword -->
    <meta name="keywords"
          content="  عزل فوم بالرياض , عزل فوم بالسعودية , افضل شركة عزل فوم بالمملكة  , عزل حراري , افضل شركة لعزل الفوم والعزل الحراري بالرياض السعودية ,عزل مائي بالرياض">
    <meta charset="UTF-8">
    <meta property="og:locale" content="ar_AR"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="افضل شركة كشف تسربات المياه بالرياض 0569920886 "/>
    <meta property="og:image"
          content="@if(isset($companies) && $companies->count() > 0){{asset('assets/Images/'.$companies->first()->photo)}} @else {{ asset('assets/Images/about.jpg') }} @endif">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description"
          content=" 0569920886 افضل شركة كشف تسربات المياه بالرياض بدون تكسير مع افضل اجهزة تكنولوجيا واصلاح تسربات المياه ."/>
    <meta property="og:url" content="{{ route('elawaael') }}"/>
    <meta property="og:site_name" content="الاوائل للخدمات المنزلية وكشف تسربات المياه بالرياض"/>
    <meta property="og:image:alt" content="افضل شركة متخصصة في كشف تسربات المياه بالرياض"/>
    <meta property="og:image"
          content="@if(isset($companies) && $companies->count() > 0){{asset('assets/Images/'.$companies->first()->photo)}} @else {{ asset('assets/Images/about.jpg') }} @endif">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description"
          content="شركة عزل اسطح فوم متخصصون في كافة خدمات العزل للاسطح المباني والخزانات والمسابح والحمامات باحدث التقنيات. شركة الشهد لجمبع انواع عزل الأسطح وخزانات المياه الشركة الاكثر تطورا بالمملكة العربية السعودية في خدمات عزل الفوم 0538069369 ">
    <meta name="twitter:title"
          content="افضل شركة لكشف تسربات المياه بالرياض والمملكة العربية السعودية - شركة الاوائل 0569920886">
    <meta name="twitter:image"
          content="@if(isset($companies) && $companies->count() > 0){{asset('assets/Images/'.$companies->first()->photo)}} @else {{ asset('assets/Images/about.jpg') }} @endif">
    <meta name="twitter:description"
          content="رقم عزل فوم عزل مائي عزل حراري في الرياض 24 ساعة 0538069369 تتعرض المنازل للكثير من المشاكل سواء كان في فصل الصيف أو فصل الشتاء وهذا بسبب الحرارة الزائده وأيضا هطول الأمطار الكثيرة في افصل الشتاء، ويجب هنا إستخدام وعمل عزل الفوم لأن تلك الأشياء تتسسب في مشاكل للأسطح وأيضا ضرر بالغ علي المنازل نفسها، وعمل العزل بالفوم من أفضل الأشياء لعمل العزل علي الأسطح للكثير من الأسباب ومنها أن لها سعر يناسب الجميع وأيضا لما له من سهولة في التركيب وهو آمن علي الأسطح وخفيف الوزن وهناك نصائح هامة من خبراء عزل الفوم بأنه آمن وسهل ويغني المنازل عن العزل عن تسريب المياه."/>

    <title>افضل شركة لكشف تسربات المياه بالرياض والمملكة - شركة الاوائل 0569920886</title>
    <link rel="icon" href="{{ asset('public/frontend/img/fav.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">
</head>

<body>
<header class="main_menu">
    <div class="sub_menu">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-sm-8">
                    <div class="sub_menu_right_content">
                        <a href="tel:+{{$companies->count() > 0 ? $companies->first()->phone : null}}"
                           title="الاتصال المباشر"><i
                                class="fa fa-phone"></i>{{$companies->count() > 0 ? $companies->first()->phone : 'لا يوجد رقم'}}
                        </a>
                        <span>|</span>
                        <div>
                            <i class="fa fa-map-marker"></i>{{ $companies->count() > 0 ? $companies->first()->location : 'لا يوجد موقع للشركة بعد'}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-4">
                    <div class="sub_menu_social_icon d-flex justify-content-end">
                        <a target="_blank" href="{{ $companies->count() > 0 ? $companies->first()->facebook : '#' }}"><i
                                class="fa fa-facebook"></i></a>
                        <a target="_blank" href="{{ $companies->count() > 0 ? $companies->first()->twitter : '#' }}"><i
                                class="fa fa-twitter"></i></a>
                        {!! WhatsappBtn::make($companies->count() > 0 ? $companies->first()->phone : ''); !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu_iner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('elawaael') }}">
                            <img src="{{ asset('public/frontend/img/logo.png') }}" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                             id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('elawaael') }}">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">عنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog.index') }}">المقالات</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#footer">اتصل بنا</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer-area" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer-top flex-column">
                    <div class="footer-logo text-center">
                        <a href="{{ route('elawaael') }}">
                            <img src="{{ asset('public/frontend/img/footer-logo.png') }}"
                                 alt="شركة الاوائل - افضل شركة للكشف عن تسربات الماء بالرياض">
                        </a>
                        <h4>يمكنك متابعتي علي</h4>
                    </div>
                    <div class="footer-social text-center">
                        <a target="_blank" href="{{$companies->count() > 0 ? $companies->first()->facebook : '#'}}"><i
                                class="fa fa-facebook transition"></i></a>
                        <a target="_blank" href="{{$companies->count() > 0 ? $companies->first()->twitter : '#' }}"><i
                                class="fa fa-twitter transition"></i></a>
                        <a target="_blank" href="tel:+{{$companies->count() > 0 ? $companies->first()->phone : null}}"
                           title="الاتصال المباشر">
                            <i class="fa fa-phone transition"></i>
                        </a>
                        {!! WhatsappBtn::make($companies->count() > 0 ? $companies->first()->phone : null); !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom text-center justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                كل الحقوق محفوظة لشركة الاوائل <i class="fa fa-heart-o" aria-hidden="true"></i> تصميم وبرمجة <a
                    href="#" target="_blank">كريم عزت</a>
            </p>
        </div>
    </div>
</footer>
<script src="{{ asset('public/frontend/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/custom.js') }}"></script>
</body>
</html>
