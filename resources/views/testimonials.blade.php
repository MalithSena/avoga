@extends('layouts.site')

@section('content')

div class="page-head white-content">
      <div class="height100vh" style="background-image: url('{{ asset("img/coming_soon.jpg") }}">
        <div class="page-head-wrap">
          <div class="page-head-inner">
            <div class="page-head-caption container text-center">
              <div class="row justify-content-center animate" data-animation="fadeIn" data-timeout="500">
                <div class="col-md-6">
                  <h1 class="big-title mt-60 mb-30 animate" data-animation="fadeInDown" data-timeout="900">Coming soon</h1>
                  <p style="text-shadow: 2px 2px 5px  #363636; font-weight:bold;" class="mb-30 animate" data-animation="fadeIn" data-timeout="1100">Sorry this page is currently getting a face lift.<br> Check back soon for the new and improved site.</p>
                  <a class="btn btn-1 animate btn-show navbar-toggler btn-contact" href="/" data-animation="fadeInUp" data-timeout="900">Return to Home page</a>
                </div>

                  <!-- carousel -->
                  <div class="owl-carousel mt-50 coming-soon-carousel" id="coming-soon-carousel">

                    <div class="text-center">
                      <p><span>"</span>Better to see something once than hear about it a thousand times<span>"</span></p>
                    </div>
                    <div class="text-center">
                      <p><span>"</span>The most beautiful in the world is, of course, the world itself.<span>"</span></p>
                    </div>
                    <div class="text-center">
                      <p><span>"</span>Work, Travel, Save, Repeat<span>"</span></p>
                    </div>
                    <div class="text-center">
                      <p><span>"</span>The journey not the arrival matters.<span>"</span></p>
                    </div>
                    <div class="text-center">
                      <p><span>"</span>Don’t listen to what they say. Go see.<span>"</span></p>
                    </div>

                  </div> <!-- / .owl-carousel -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- page-head -->

    <!--<div class="page-head white-content">-->
    <!--  <div class="height50vh parallax-container" style="background-image: url(https://via.placeholder.com/1920x1280);">-->
    <!--    <div class="page-head-wrap">-->
    <!--      <div class="display-r">-->
    <!--        <div class="display-a">-->
    <!--          <div class="container">-->
    <!--            <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">-->
    <!--              <div class="col-md-12">-->
    <!--                <nav aria-label="breadcrumb">-->
    <!--                  <ol class="breadcrumb">-->
    <!--                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
    <!--                    <li class="breadcrumb-item"><a href="#">Elements</a></li>-->
    <!--                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>-->
    <!--                  </ol>-->
    <!--                </nav>-->
    <!--                <h1 class="big-title mt-60">Testimonials</h1>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!-- / page-head -->

    <!-- content -->

    <!--<div class="content mt-60 mb-40">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-12">-->
    <!--        <div class="content-box mb-20">-->

    <!--          <div class="row">-->

                <!-- testimonial-1 -->
    <!--            <div class="col-md-4">-->
    <!--              <div class="testimonial-1 text-center mt-20 mb-20">-->
    <!--                <div class="testimonial-image">-->
    <!--                  <img src="https://via.placeholder.com/600x600" alt="Testimonial 1">-->
    <!--                </div>-->
    <!--                <div class="testimonial-info">-->
    <!--                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore at, voluptate itaque blanditiis eligendi eveniet dolorem soluta adipisci atque voluptatem rerum quos asperiores laboriosam aut ratione explicabo. Harum, iure?</p>-->
    <!--                  <p class="testimonial-person">Emma Eliza</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
                <!-- / .testimonial-1 -->

                <!-- testimonial-1 -->
    <!--            <div class="col-md-4">-->
    <!--              <div class="testimonial-1 text-center mt-20 mb-20">-->
    <!--                <div class="testimonial-image">-->
    <!--                  <img src="https://via.placeholder.com/600x600" alt="Testimonial 1">-->
    <!--                </div>-->
    <!--                <div class="testimonial-info">-->
    <!--                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore at, voluptate itaque blanditiis eligendi eveniet dolorem soluta adipisci atque voluptatem rerum quos asperiores laboriosam aut ratione explicabo. Harum, iure?</p>-->
    <!--                  <p class="testimonial-person">John Mask</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
                <!-- / .testimonial-1 -->

                <!-- testimonial-1 -->
    <!--            <div class="col-md-4">-->
    <!--              <div class="testimonial-1 text-center mt-20 mb-20">-->
    <!--                <div class="testimonial-image"><span></span></div>-->
    <!--                <div class="testimonial-info">-->
    <!--                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore at, voluptate itaque blanditiis eligendi eveniet dolorem soluta adipisci atque voluptatem rerum quos asperiores laboriosam aut ratione explicabo. Harum, iure?</p>-->
    <!--                  <p class="testimonial-person">Someone</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->

    <!--            <div class="col-md-12">-->
    <!--              <div class="mb-50 mt-50"></div>-->
    <!--            </div>-->

                <!-- testimonial-item-border -->
    <!--            <div class="col-md-4">-->
    <!--              <div class="testimonial-item-border text-center" data-animation="fadeIn" data-timeout="600">-->

    <!--                <div class="testimonial-info testimonial-info-quote">-->
    <!--                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore at, voluptate itaque blanditiis eligendi eveniet dolorem soluta adipisci atque voluptatem rerum quos asperiores laboriosam aut ratione explicabo. Harum, iure?</p>-->
    <!--                  <p class="testimonial-person">Thomas Andrews</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
                <!-- / .testimonial-item-border -->

                <!-- testimonial-item-border -->

    <!--            <div class="col-md-4">-->
    <!--              <div class="testimonial-item-border text-center" data-animation="fadeIn" data-timeout="600">-->

    <!--                <div class="testimonial-info testimonial-info-quote">-->
    <!--                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore at, voluptate itaque blanditiis eligendi eveniet dolorem soluta adipisci atque voluptatem rerum quos asperiores laboriosam aut ratione explicabo. Harum, iure?</p>-->
    <!--                  <p class="testimonial-person">Someone</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
                <!-- / .testimonial-item-border -->

                <!-- testimonial-item-border -->
    <!--            <div class="col-md-4">-->
    <!--              <div class="testimonial-item testimonial-item-border text-center" data-animation="fadeIn" data-timeout="600">-->

    <!--                <div class="testimonial-info testimonial-info-quote">-->
    <!--                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolore at, voluptate itaque blanditiis eligendi eveniet dolorem soluta adipisci atque voluptatem rerum quos asperiores laboriosam aut ratione explicabo. Harum, iure?</p>-->
    <!--                  <p class="testimonial-person">Emma Eliza</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->

    <!--          </div>-->
    <!--        </div>    -->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!-- / content -->

@endsection
