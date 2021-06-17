@extends('layouts.site')

@section('content')
<!-- page-head -->

<div class="page-head white-content">
    <div class="height50vh parallax-container" style="background-image: url('{{ $blog->background_img }}')">
        <div class="page-head-wrap">
            <div class="display-r">
                <div class="display-a">
                    <div class="container">
                        <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $blog->slug }}</li>
                                    </ol>
                                </nav>
                                <h1 class="big-title mt-60">{{ $blog->title }}</h1>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>{{ $blog->body }}</p>
                <hr>
                <img src="{{ $blog->post_img }}" alt="">
                <!--<iframe src="https://player.vimeo.com/video/66516165" width="640" height="360"></iframe>-->
                <!--<div class="text-center">-->
                <!--  <p><a href="https://vimeo.com/66516165">London time-lapse (2013)</a> from <a href="https://vimeo.com/bh2">BH-2</a> on <a href="https://vimeo.com">Vimeo</a>.</p>-->
            </div>

            <!--<p>Metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. </p>-->
        </div>
    </div>
</div>
</div>


@endsection