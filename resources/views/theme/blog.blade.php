@extends('layouts.frontend')

@section('content')
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h1>المدونة</h1>
                            <p><a href="{{ route('elawaael') }}">الرئيسية</a> <span>-</span>المدونة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area section-padding">
        <!-- start section title -->
        <div class="section-title">
            <h2>المقالات</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- start blog left sidebar -->
                    <div class="blog_left_sidebar">

                    @if(isset($articles) && $articles->count() > 0)
                        @foreach($articles as $article)
                            <!-- start blog item -->
                                <article class="blog_item">
                                    <!-- start blog item image -->
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0"
                                             src="{{ asset('assets/Articles/'.$article->image) }}"
                                             alt="افضل شركة كشف تسربات المياه بالرياض شركة الاوائل">
                                        <a href="#" class="blog_item_date gradient-bg">
                                            <h4>{{ $article->created_at }}</h4>
                                        </a>
                                    </div>
                                    <!-- end blog item image -->
                                    <!-- start blog details -->
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="#">
                                            <h3>{{ $article->title }}</h3>
                                        </a>
                                        <p>{{ $article->description }}</p>
                                    </div>
                                    <!-- end blog details -->

                                </article>
                                <!-- end blog item -->
                            @endforeach
                        @else
                            <h2 class="text-center text-danger mb-3">لا يوجد مقالات بعد</h2>
                    @endif

                    <!-- start blog pagination-->
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $articles->links() }}
                        </nav>
                        <!-- end blog pagination -->

                    </div>
                    <!-- end blog left sidebar -->

                </div>
            </div>
        </div>
    </section>
@endsection
