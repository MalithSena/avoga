 @extends('layouts.site')

 @section('content')

<div class="page-head white-content">
      <div class="height50vh parallax-container" style="background-image: url('{{ asset('img/cat_main_imgs/cat_main_about.jpg') }}">
        <div class="page-head-wrap">
          <div class="display-r">
            <div class="display-a">
              <div class="container">
                <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                  <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                      </ol>
                    </nav>
                    <h1 class="big-title mt-60">About Us</h1>
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

    <div class="content mt-60 mb-40">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-5">
            <img src="{{ asset('img/about.jpg') }}" alt="About">
          </div>
          <div class="col-md-12 col-lg-7">

            <blockquote class="blockquote-1">
               <p><span class="dropcap-2">V</span>isit Sri Lanka with Avoga Holidays to experience the best of Sri Lanka has to offer. Avoga Holidays is run by a group of passionate Sri Lankans who are well experienced in the tourism  industry.</p>
                <p>Our tour guides, chauffeurs are well trained to offer best customer service to all guests.  They will do their best to ensure you have a memorable holiday in Sri Lanka.</p>
                <p>We pride ourselves in paying attention to the smallest details in your itinerary in Sri Lanka to make sure you have a smooth, well organized tour in Sri Lanka. We will provide you with all necessary tips about the activities in Sri Lanka. Our recommendations will be based on our experiences.</p>

                        <span class="author">AvogaHolidays Team <span class="ti-face-smile"></span></span>

            </blockquote>

          </div>
          <div class="col-md-12 text-center mt-40 mb-20">
            <h2>Meet our extraordinary team</h2>
          </div>

          <!-- team-item-1 -->
          <div class="col-md-3">
            <div class="team-item-1">
              <img src="https://via.placeholder.com/400x400" onmouseover="this.src='https://via.placeholder.com/400x400'" onmouseout="this.src='https://via.placeholder.com/400x400'" alt="Team 1">
              <div class="team-info text-center mb-10">
                <p class="name">Sam</p>
                <p class="position">CEO</p>
              </div>
            </div>
          </div>
          <!-- /. team-item-1 -->

          <!-- team-item-1 -->
          <div class="col-md-3">
            <div class="team-item-1">
              <img src="https://via.placeholder.com/400x400" onmouseover="this.src='https://via.placeholder.com/400x400'" onmouseout="this.src='https://via.placeholder.com/400x400'" alt="Team 1">
              <div class="team-info text-center mb-10">
                <p class="name">Indika</p>
                <p class="position">Travel Expert</p>
              </div>
            </div>
          </div>
          <!-- /. team-item-1 -->

          <!-- team-item-1 -->
          <div class="col-md-3">
            <div class="team-item-1">
              <img src="https://via.placeholder.com/400x400" onmouseover="this.src='https://via.placeholder.com/400x400g'" onmouseout="this.src='https://via.placeholder.com/400x400'" alt="Team 1">
              <div class="team-info text-center mb-10">
                <p class="name">Anny</p>
                <p class="position">Head of Transport</p>
              </div>
            </div>
          </div>
          <!-- /. team-item-1 -->

          <!-- team-item-1 -->
          <div class="col-md-3">
            <div class="team-item-1">
              <img src="https://via.placeholder.com/400x400" onmouseover="this.src='https://via.placeholder.com/400x400'" onmouseout="this.src='https://via.placeholder.com/400x400'" alt="Team 1">
              <div class="team-info text-center mb-10">
                <p class="name">Priyankara</p>
                <p class="position">Tour Guide</p>
              </div>
            </div>
          </div>
          <!-- . team-item-1 -->
          <div class="mt-60 mb-40">
            <div class="row">

              <div class="col-md-12 text-center mt-10 mb-20">
                <h2>Why we?</h2>
              </div>

          <div class="mt-40 mb-40">
         <div class="row">

              <!-- Infography item style 2 -->
              <div class="col-md-4">
                <div class="infography infography-2 text-center">
                  <i class="icon-plane icons"></i>
                  <div class="infography-title"><h4>Easy Fly</h4></div>
                  <div class="infography-description">We take the trouble of reserving your hotels to even go further and book your flight tickets for you if it is your wish. Relax and fly easy we are waiting for you at the Airport to Welcome you!</div>
                </div>
              </div>
              <!-- / Infography item style 2 -->

              <!-- Infography item style 2 -->
              <div class="col-md-4">
                <div class="infography infography-2 text-center">
                  <i class="icon-flag icons"></i>
                  <div class="infography-title"><h4>Any country</h4></div>
                 <div class="infography-description">We respect all the nationalities and willing to serve you being sensitive to your cultural background, medical requirements, meal preference etc.</div>
                </div>
              </div>
              <!-- / Infography item style 2 -->

              <!-- Infography item style 2 -->
              <div class="col-md-4">
                <div class="infography infography-2 text-center">
                  <i class="icon-emotsmile icons"></i>
                  <div class="infography-title"><h4>Happy customers</h4></div>
                   <div class="infography-description">Happy customers is our ultimate goal. Our biggest profit is the happy ending of your tour.</div>
                </div>
              </div>
              <!-- / Infography item style 2 -->
            </div>

          </div> <!-- / .advantage-div -->

        </div>
      </div>
    </div>

</div>
</div>

@endsection