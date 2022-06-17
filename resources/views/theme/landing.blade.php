@extends('layouts.frontend')

@section('content')
    <!-- Banner Section -->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h5>أهلا بكم في<span> !</span></h5>
                            <h1>{{ $companies->count() > 0 ? $companies->first()->name : "لم تقم بتسمية الشركة بعد " }}</h1>
                            <div>{{ $companies->count() > 0 ? $companies->first()->short_description : "لا يوجد وصف قصير للشركة" }}</div>
                            <a href="#footer" class="btn_1">تواصل معي</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- About Section -->
    <section class="about-area section-padding" id="about">
        <!-- start section title -->
        <div class="section-title">
            <h2>عن الشركة</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-3 mb-lg-0">
                    <span
                        class="subheading">{{ $companies->count() > 0 ? $companies->first()->name : 'لم تقم بتسمية الشركة بعد '}}</span>
                    <p class="about-description">
                        {{ $companies->count() > 0 ? $companies->first()->description : "لا يوجد وصف للشركة" }}
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        @if($companies->count() > 0)
                            <img class="img-fluid" src="{{ asset('assets/Images/'.$companies->first()->photo) }}"
                                 alt="افضل شركة كشف تسربات مياه بالرياض">
                        @else
                            <h2>لا يوجد صورة</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Gallery Area -->
    <section class="gallery-area section-padding">
        <div class="container">
            @if(isset($galleries) && $galleries->count() > 0)
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        @foreach($galleries as $gallery)
                            <li data-target="#demo" data-slide-to="{{ $loop->index }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ul>
                    <div class="carousel-inner">
                        @foreach($galleries as $gallery)
                            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                <img src="{{ asset('assets/Galleries/') }}/{{ $gallery->image }}"
                                     alt="افضل شركة لكشف تسربات المياه بالرياض شركة الاوائل" width="1100" height="500">
                                <div class="carousel-caption">
                                    <h3>{{ $gallery->title }}</h3>
                                    <p>{{ $gallery->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            @else
                <h2 class="text-center text-danger">المعرض فارغ حاليا</h2>
            @endif
        </div>
    </section>
    <!-- End Gallery Area -->

    <!-- Blog Area -->
    <section class="blog-area section-padding" id="blog">
        <!-- start section title -->
        <div class="section-title">
            <h2>أحدث المقالات</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="blog-column">
                        @if(isset($articles) && $articles->count() > 0)
                            @foreach($articles as $article)
                                <div class="media">
                                    <div class="media-left">
                                        <img width="138" src="{{ asset('assets/Articles/'.$article->image) }}" alt="blog image">
                                    </div>
                                    <div class="media-body">
                                        <h3>{{ $article->title }}</h3>
                                        <a href="#">
                                            <small><i class="icon-calendar"></i>{{ $article->created_at }}</small>
                                        </a>
                                        <p>{{ Str::limit($article->description, 50, $end='...')  }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2 class="text-danger text-center">لا توجد مقالات حاليا</h2>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="blog-img">
                        <img src="{{ asset('public/frontend/img/blog-area/blog-pic.jpg') }}" class="img-fluid"
                             alt="شركة الاوائل أفضل شركة لكشف تسربات المياه بالرياض المملكة العربية السعودية">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
