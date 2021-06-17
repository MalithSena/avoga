@extends('layouts.site')

@section('content')

<!-- page-head -->

<div class="page-head white-content">
    <div class="height50vh parallax-container"
        style="background-image: url('{{ asset('img/cat_main_imgs/cat_main_blog.jpg') }}">
        <div class="page-head-wrap">
            <div class="display-r">
                <div class="display-a">
                    <div class="container">
                        <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Content</li>
                                    </ol>
                                </nav>
                                <h1 class="big-title mt-60">Places We Love</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- / page-head -->

<!-- content -->

<div class="content mt-60 mb-40 container">
    <div class="row mb-30">

        <div class="col-md-3">
            <div class="blog-page-info">
                <div class="blog-page-info-item">
                    <select class="form-control">
                        <option>Categories</option>
                        <option>Cultural</option>
                        <option>Happy</option>
                        <option>Adventure</option>
                        <option>Resorts</option>
                        <option>Travel</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="blog-page-info">
                <div class="blog-page-info-item">
                    <select class="form-control">
                        <option>Archive</option>
                        <option>May 2018</option>
                        <option>June 2018</option>
                        <option>July 2018</option>
                        <option>August 2018</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="blog-page-info">
                <div class="blog-page-info-item">
                    <select class="form-control">
                        <option>Tags</option>
                        <option>Cultural</option>
                        <option>Happy</option>
                        <option>Adventure</option>
                        <option>Resorts</option>
                        <option>Travel</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="sidebar-item mb-30">
                <form method="POST">
                    <div class="input-group">
                        <input type="text" name="search" id="search" placeholder="Search..." class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-3"><span class="ti-search"></span></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-6 col-lg-4">
            <div class="blog-item effect-1">
                <a class="block" href="{{ route('blog.show', $blog->slug) }}">
                    <img src="{{ $blog->post_img}}" alt="{{ $blog->title }}">
                </a>
                <div class="caption clearfix">
                    <a href="{{asset('destinations/kandy')}}">
                        <p class="title">{{ $blog->title }}</p>
                    </a>
                    <p class="date"><span class="ti-calendar"></span>{{ $blog->create_at }}</p>
                    <p class="author"><span class="ti-user"></span>By AvogaHolidays</p>
                    <ul class="tags">
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Trip</a></li>
                        <li><a href="#">Happy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

        <!--<div class="col-md-6 col-lg-4">-->
        <!--  <div class="blog-item effect-1">-->
        <!--    <a class="block" href="#">-->
        <!--      <img src="https://via.placeholder.com/800x600" alt="img12">-->
        <!--    </a>-->
        <!--    <div class="caption clearfix">-->
        <!--      <a href="#">-->
        <!--        <p class="title">The Best Travel Blog Ever</p>-->
        <!--      </a>-->
        <!--      <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>-->
        <!--      <p class="author"><span class="ti-user"></span>By TravelUser</p>-->
        <!--      <ul class="tags">-->
        <!--        <li><a href="#">Photos</a></li>-->
        <!--        <li><a href="#">Trip</a></li>-->
        <!--        <li><a href="#">Happy</a></li>-->
        <!--      </ul>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!--<div class="col-md-6 col-lg-4">-->
        <!--  <div class="blog-item effect-1">-->
        <!--    <a class="block" href="#">-->
        <!--      <img src="https://via.placeholder.com/800x600" alt="img12">-->
        <!--    </a>-->
        <!--    <div class="caption clearfix">-->
        <!--      <a href="#">-->
        <!--        <p class="title">The Best Travel Blog Ever</p>-->
        <!--      </a>-->
        <!--      <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>-->
        <!--      <p class="author"><span class="ti-user"></span>By TravelUser</p>-->
        <!--      <ul class="tags">-->
        <!--        <li><a href="#">Photos</a></li>-->
        <!--        <li><a href="#">Trip</a></li>-->
        <!--        <li><a href="#">Happy</a></li>-->
        <!--      </ul>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!--<div class="col-md-6 col-lg-4">-->
        <!--  <div class="blog-item effect-1">-->
        <!--    <a class="block" href="#">-->
        <!--      <img src="https://via.placeholder.com/800x600" alt="img12">-->
        <!--    </a>-->
        <!--    <div class="caption clearfix">-->
        <!--      <a href="#">-->
        <!--        <p class="title">The Best Travel Blog Ever</p>-->
        <!--      </a>-->
        <!--      <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>-->
        <!--      <p class="author"><span class="ti-user"></span>By TravelUser</p>-->
        <!--      <ul class="tags">-->
        <!--        <li><a href="#">Photos</a></li>-->
        <!--        <li><a href="#">Trip</a></li>-->
        <!--        <li><a href="#">Happy</a></li>-->
        <!--      </ul>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

    </div>
    <!--<div class="pagination">-->
    <!--  <ul>-->
    <!--    <li><a href="#"><i class="icon-arrow-left icons"></i></a></li>-->
    <!--    <li><a href="#">1</a></li>-->
    <!--    <li><a href="#">2</a></li>-->
    <!--    <li><a class="active" href="#">3</a></li>-->
    <!--    <li><a href="#">4</a></li>-->
    <!--    <li><a href="#"><i class="icon-arrow-right icons"></i></a></li>-->
    <!--  </ul>-->
    <!--</div>-->
</div>

<!-- / content -->


@endsection