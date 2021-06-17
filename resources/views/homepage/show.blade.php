@extends('layouts.site2')

@section('content')
<div class="search-relative search-relatives " id="search-relatives">

    <div class="item height25vh" id="vid">
        <video class="embed-responsive video" src="{{ asset($homepage->video) }}" muted loop autoplay></video>
        <div class="caption-top caption-top-mb" style="margin-bottom: 20%" data-timeout="800">
            {{-- The text class mentioned before is custom made by developer. It's not inheriting from the original template --}}
            <div class="text page-head-caption container">
                <h2>{{ $homepage->tagline_bg }}</h3>
                    {{-- <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate" data-animation="fadeInRight" data-timeout="800">Avoga Holidays</h2> --}}
                    <h3>{{ $homepage->tagline_sm }}</h3>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p> --}}
                    <a href="#packages">{{ $homepage->link_redirect }}</a>
            </div>
        </div>

    </div>
</div>
</div>



{{-- <div class="search-relative">
      
      <div class="owl-carousel" class="media_container">
        
        <div >
             
          <div class="page-head-wrap">
            <div class="page-head-inner">
           
              <div class="page-head-caption container text-left">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-11">
                      <p class="animate" data-animation="fadeInLeft" data-timeout="800">Tropical paradise island in the Indian Ocean</p>
                      <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate" data-animation="fadeInRight" data-timeout="800">Avoga Holidays</h2>
                      <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">for travellers seeking true smiles... </p>
                      <a href="#packages" class="btn btn-4 animate" data-animation="fadeInUp" data-timeout="900">Our Packages</a>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   --}}

<!-- slider -->
{{-- <div class="owl-carousel" class="media_container" id="fullscreen-slider">
        <div class="item height100vh" style="background-image: url({{ asset('img/main_slider/main_slider_1.jpg') }});">
<div class="page-head-wrap">
    <div class="page-head-inner">
        <div class="page-head-caption container text-left">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <p class="animate" data-animation="fadeInLeft" data-timeout="800">Tropical paradise island in
                            the Indian Ocean</p>
                        <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate"
                            data-animation="fadeInRight" data-timeout="800">Avoga Holidays</h2>
                        <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">for travellers seeking
                            true smiles... </p>
                        <a href="#packages" class="btn btn-4 animate" data-animation="fadeInUp" data-timeout="900">Our
                            Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="item height100vh" style="background-image: url({{ asset('img/main_slider/main_slider_2.jpg') }})">
    <div class="page-head-wrap">
        <div class="page-head-inner">
            <div class="page-head-caption container text-left">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <p class="animate clearfix" data-animation="fadeInUp" data-timeout="1000">Programs
                                tailor-made just for you</p>
                            <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate"
                                data-animation="fadeInUp" data-timeout="800">Safari in National Parks</h2>
                            <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">Exclusively for
                                animals and bird lovers.</p>
                            <a href="#packages" class="btn btn-4 animate" data-animation="fadeInUp"
                                data-timeout="1200">Our Packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="item height100vh" style="background-image: url({{ asset('img/main_slider/main_slider_3.jpg') }})">
    <div class="page-head-wrap">
        <div class="page-head-inner">
            <div class="page-head-caption container text-left">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <p class="animate clearfix" data-animation="fadeInUp" data-timeout="1000">Birds paradise</p>
                            <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate"
                                data-animation="fadeInUp" data-timeout="800">Bird Watching & Landscapes</h2>
                            <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">Exclusively for
                                animals and bird lovers.</p>
                            <a href="#packages" class="btn btn-4 animate" data-animation="fadeInUp"
                                data-timeout="1200">Our Packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- new slider created on 05/12/2019 for testing -->

<div class="item height100vh" id="main_presenter"
    style="background-image: url({{ asset('img/main_slider/main_slider_4.jpg') }})">
    <div class="page-head-wrap">
        <div class="page-head-wrap">
            <div class="page-head-inner">
                <div class="page-head-caption container text-left">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-11">
                                <p class="animate clearfix" data-animation="fadeInUp" data-timeout="1000">Adventure</p>
                                <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate"
                                    data-animation="fadeInUp" data-timeout="800">White Water Rafting & More</h2>
                                <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">For those who
                                    dare</p>
                                <a href="#packages" class="btn btn-4 animate" data-animation="fadeInUp"
                                    data-timeout="1200">Our Packages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="item height100vh" style="background-image: url({{ asset('img/main_slider/main_slider_5.jpg') }})">
    <div class="page-head-wrap">
        <div class="page-head-inner">
            <div class="page-head-caption container text-left">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <p class="animate clearfix" data-animation="fadeInUp" data-timeout="1000">Leopard in the den
                            </p>
                            <h2 style="text-shadow: 2px 2px 5px  #363636;" class="big-title mb-10 animate"
                                data-animation="fadeInUp" data-timeout="800">Luck is Called Leopard</h2>
                            <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">Too hard to find
                                challenge</p>
                            <a href="#packages" class="btn btn-4 animate" data-animation="fadeInUp"
                                data-timeout="1200">Our Packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of new slider -->
</div> --}}

{{-- </div> <!-- / search-relative --> --}}

<!-- BLOCK popular -->

<div class="main-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="packages">
                <div class="text-center block width100 mb-50 block-title">
                    <h2>Popular packages</h2>
                    <div class="col-md-12">
                        <p class="mb-40">We know how important a vacation for the relaxation of your body and soul.
                            Leave the whole planning to us and be stress free with your vacation. We are dedicated to
                            design your vacation with so much care and attention. Our promise is your vacation your way.
                            Start holidaying with us and discover the undiscovered...</p>
                    </div>

                    <div class="separator"><span>Start by going through our packages!</span></div>
                </div>
            </div>
        </div>

        <div class="row">
            @if ($post->find($homepage->itinerary1))
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="{{ route('itinerary', $post->find($homepage->itinerary1)) }}">
                        <div class="img-wrap">
                            <img src="{{$post->find($homepage->itinerary1)->post_image}}" class="lazyload"
                                alt="{{$post->find($homepage->itinerary1)->title}}">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>

                    <div class="caption">
                        <a href="{{ route('itinerary', $post->find($homepage->itinerary1)) }}">
                            <p class="title">{{$post->find($homepage->itinerary1)->title}}</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>{{$post->find($homepage->itinerary1)->days}} days
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="{{asset('img/adventure_1.jpg')}}" class="lazyload" alt="Adventure">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>
                    <div class="caption">
                        <a href="#">
                            <p class="title">Coming Soon</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>0 days</p>
                    </div>
                </div>
            </div>
            @endif

            @if ($post->find($homepage->itinerary2))
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="{{ route('itinerary', $post->find($homepage->itinerary2)) }}">
                        <div class="img-wrap">
                            <img src="{{$post->find($homepage->itinerary2)->post_image}}" class="lazyload"
                                alt="{{$post->find($homepage->itinerary2)->title}}">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>

                    <div class="caption">
                        <a href="{{ route('itinerary', $post->find($homepage->itinerary2)) }}">
                            <p class="title">{{$post->find($homepage->itinerary2)->title}}</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>{{$post->find($homepage->itinerary2)->days}} days
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="{{asset('img/adventure_1.jpg')}}" class="lazyload" alt="Adventure">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>
                    <div class="caption">
                        <a href="#">
                            <p class="title">Coming Soon</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>0 days</p>
                    </div>
                </div>
            </div>
            @endif
            @if ($post->find($homepage->itinerary3))
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="{{ route('itinerary', $post->find($homepage->itinerary3)) }}">
                        <div class="img-wrap">
                            <img src="{{$post->find($homepage->itinerary3)->post_image}}" class="lazyload"
                                alt="{{$post->find($homepage->itinerary3)->title}}">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>

                    <div class="caption">
                        <a href="{{ route('itinerary', $post->find($homepage->itinerary3)) }}">
                            <p class="title">{{$post->find($homepage->itinerary3)->title}}</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>{{$post->find($homepage->itinerary3)->days}} days
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="{{asset('img/adventure_1.jpg')}}" class="lazyload" alt="Adventure">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>
                    <div class="caption">
                        <a href="#">
                            <p class="title">Coming Soon</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>0 days</p>
                    </div>
                </div>
            </div>
            @endif
            @if ($post->find($homepage->itinerary4))
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="{{ route('itinerary', $post->find($homepage->itinerary4)) }}">
                        <div class="img-wrap">
                            <img src="{{$post->find($homepage->itinerary4)->post_image}}" class="lazyload"
                                alt="{{$post->find($homepage->itinerary4)->title}}">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>

                    <div class="caption">
                        <a href="{{ route('itinerary', $post->find($homepage->itinerary4)) }}">
                            <p class="title">{{$post->find($homepage->itinerary4)->title}}</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>{{$post->find($homepage->itinerary4)->days}} days
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="{{asset('img/adventure_1.jpg')}}" class="lazyload" alt="Adventure">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>
                    <div class="caption">
                        <a href="#">
                            <p class="title">Coming Soon</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>0 days</p>
                    </div>
                </div>
            </div>
            @endif
            @if ($post->find($homepage->itinerary5))
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="{{ route('itinerary', $post->find($homepage->itinerary5)) }}">
                        <div class="img-wrap">
                            <img src="{{$post->find($homepage->itinerary5)->post_image}}" class="lazyload"
                                alt="{{$post->find($homepage->itinerary5)->title}}">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>

                    <div class="caption">
                        <a href="{{ route('itinerary', $post->find($homepage->itinerary5)) }}">
                            <p class="title">{{$post->find($homepage->itinerary5)->title}}</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>{{$post->find($homepage->itinerary5)->days}} days
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="{{asset('img/adventure_1.jpg')}}" class="lazyload" alt="Adventure">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>
                    <div class="caption">
                        <a href="#">
                            <p class="title">Coming Soon</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>0 days</p>
                    </div>
                </div>
            </div>
            @endif
            @if ($post->find($homepage->itinerary6))
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="{{ route('itinerary', $post->find($homepage->itinerary6)) }}">
                        <div class="img-wrap">
                            <img src="{{$post->find($homepage->itinerary6)->post_image}}" class="lazyload"
                                alt="{{$post->find($homepage->itinerary6)->title}}">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>

                    <div class="caption">
                        <a href="{{ route('itinerary', $post->find($homepage->itinerary6)) }}">
                            <p class="title">{{$post->find($homepage->itinerary6)->title}}</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>{{$post->find($homepage->itinerary6)->days}} days
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-lg-4">
                <div class="tour-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="{{asset('img/adventure_1.jpg')}}" class="lazyload" alt="Adventure">
                            <!--<p class="price">1450 $</p>-->
                        </div>
                    </a>
                    <div class="caption">
                        <a href="#">
                            <p class="title">Coming Soon</p>
                        </a>
                        <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
                        <p class="time"><span class="ti-time"></span>0 days</p>
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>


    <!-- BLOCK / popular -->

    <div class="ctoa text-center parallax-container color-white" class="lazyload"
        style="background-image: url('{{ $homepage->background_img }}');">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 style="text-shadow: 2px 2px 5px  #363636;" class="mb-30">{{ $homepage->promotional_message_h1 }}
                </h2>
                <p style="text-shadow: 2px 2px 5px  #363636;" class="mb-40">{{ $homepage->promotional_message }}</p>
                <a class="btn btn-1" href="{{ asset('contact') }}">Contact Us</a>
            </div>
        </div>
    </div>



    <!-- BLOCK / popular -->

    <!-- BLOCK advantage -->

    <div class="main-block bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-10 block-title">
                        <h2>How we work?</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Infography item style 1 -->
                <div class="col-md-4">
                    <div class="infography infography-1">
                        <div class="infography-icon">
                            <i class="icon-call-in icons"></i>
                        </div>
                        <div class="infography-text">
                            <h4>Call, WhatsApp, Imo, Messenger Us</h4>
                            <p>We are ready to serve you in any manner you wish to communicate with us. Contact us today
                                from your preferable method and we are available to serve you the way you want it. </p>
                        </div>
                    </div>
                </div>
                <!-- / Infography item style 1 -->

                <!-- Infography item style 1 -->
                <div class="col-md-4">
                    <div class="infography infography-1">
                        <div class="infography-icon">
                            <i class="icon-envelope-letter icons"></i>
                        </div>
                        <div class="infography-text">
                            <h4>Mail us</h4>
                            <p>Fill our inquiry form in our <a href="contact">Contact Page</a> or send us an E-mail to
                                <a href="mailto:inquiries@avogaholidays.com">inquiries@avogaholidays.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- / Infography item style 1 -->

                <!-- Infography item style 1 -->
                <div class="col-md-4">
                    <div class="infography infography-1">
                        <div class="infography-icon">
                            <i class="icon-notebook icons"></i>
                        </div>
                        <div class="infography-text">
                            <h4>Let's meet at our office</h4>
                            <p>Already in Sri Lanka? Having many ideas of destinations and need professional assistance?
                                Let's discuss and see what suits you. </p>
                        </div>
                    </div>
                </div>
                <!-- / Infography item style 1 -->



            </div>
        </div>
    </div>

    <!-- BLOCK / advantage -->

    <!-- BLOCK news -->

    <div class="main-block">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center block width100 mb-50 block-title">
                        <h2>Our Blog</h2>
                        <div class="separator"><span>Checkout latest news from our blog</span></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item effect-1">
                        <a class="block" href="{{ asset('destinations/kandy') }}">
                            <img src="{{ asset('img/destinations/kandy_main.jpg')}}" class="lazyload" alt="img12">
                        </a>
                        <div class="caption clearfix">
                            <a href="{{ asset('destinations/kandy') }}">
                                <p class="title">The World Heritage Kandy City</p>
                            </a>
                            <p class="date"><span class="ti-calendar"></span>November 10, 2019</p>
                            <p class="author"><span class="ti-user"></span>By Avoga Holidays</p>
                            <ul class="tags">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Trip</a></li>
                                <li><a href="#">Happy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item effect-1">
                        <a class="block" href="{{ asset('destinations/galle') }}">
                            <img src="{{ asset('img/destinations/galle_main.jpg') }}" class="lazyload" alt="Galle">
                        </a>
                        <div class="caption clearfix">
                            <a href="{{ asset('destinations/galle') }}">
                                <p class="title">The Ancient Galle City</p>
                            </a>
                            <p class="date"><span class="ti-calendar"></span>November 10, 2019</p>
                            <p class="author"><span class="ti-user"></span>By Avoga Holidays</p>
                            <ul class="tags">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Trip</a></li>
                                <li><a href="#">Happy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item effect-1">
                        <a class="block" href="{{ asset('destinations/arugambay')}}">
                            <img src="{{ asset('img/destinations/arugambay_main.jpg')}}" class="lazyload"
                                alt="Arugambay">
                        </a>
                        <div class="caption clearfix">
                            <a href="{{ asset('destinations/arugambay')}}">
                                <p class="title">The surfing paradise, Arugambay</p>
                            </a>
                            <p class="date"><span class="ti-calendar"></span>August 20, 2018</p>
                            <p class="author"><span class="ti-user"></span>By Avoga Holidays</p>
                            <ul class="tags">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Trip</a></li>
                                <li><a href="#">Happy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- BLOCK / news -->
    <script>
        function myFunction() 
    {
        document.getElementById("packages") ;
    } 
    </script>
    @endsection