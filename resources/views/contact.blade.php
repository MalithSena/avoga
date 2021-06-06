@extends('layouts.site')

@section('content')

 <!-- page-head -->

    <div class="page-head white-content">
      <div class="height50vh parallax-container" style="background-image: url('{{ ('img/image_contact_main.jpg') }}">
        <div class="page-head-wrap">
          <div class="display-r">
            <div class="display-a">
              <div class="container">
                <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                  <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                      </ol>
                    </nav>
                    <h1 class="big-title mt-60">Contact</h1>
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

    <div class="content mt-50 mb-40 container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mb-20">Let&lsquo;s deal with your vacation</h3>

          <p>Let&lsquo;s discuss about your dream vacation. Contact us in any way you find convenient and we&lsquo;ll be in touch with you!</p>

          <h3 class="mb-30">Our Office </h3>

         <!-- <div class="row">
            <div class="col-md-6">
              <h3 class="mb-20">Colombo</h3>
              <p>227/3, Nalinpriya Mawatha Siyabalagoda, Polgasowita</p>
            </div>
         </div> -->
         <div class="col-md-6">
              <div class="contact-info mb-30">
                <h4>Colombo</h4>
                <p><span class="ti-map-alt"></span>227/3, Nalinpriya Mawatha Siyabalagoda, Polgasowita</p>
                <p><span class="ti-headphone-alt"></span> +947-7362-6506</p>
                <p><span class="ti-headphone-alt"></span> +947-1883-1632</p>
                <p><span class="ti-email"></span><a href="mailto:info@voyagetime.com">info@avogaholidays.com</a></p>
              </div>
            </div>

          <h3 class="mb-30">Our Social</h3>
          <div class="clearfix mb-20">
            <ul class="contact-social">
              <li><a href="https://www.facebook.com/avogaholidays"><span class="ti-facebook"></span></a></li>
              <li><a href="https://www.instagram.com/avogaholidays/"><span class="ti-instagram"></span></a></li>
              <li><a href="https://twitter.com/AvogaHolidays"><span class="ti-twitter"></span></a></li>
              <li><a href="https://www.youtube.com/channel/UC8V-Cy5zjLM5TsHV4USdd0w"><span class="ti-youtube"></span></a></li>
              <li><a href="https://www.pinterest.com/avogaholidays"><span class="ti-pinterest"></span></a></li>
              <!-- <li><a href="https://www.tripadvisor.com/Profile/SamAvoga"><span class="ti-tripadvisor"></span></a></li>
              <li><a href="https://www.tripadvisor.com/Profile/SamAvoga"><span class="ti-whatsapp"></span></a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-mr">
            <h3 class="mb-20">Get in Touch</h3>
            
              @if (session('message'))
                <div>
                  {{ session('message') }}
                </div>
              @endif
            <form method="POST" class="mt-20 form-block" action="{{ route('send_mail') }}">
              @csrf
              <div class="form-row contact-form">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>
                <div class="col-md-12">
                  <textarea name="message" id="message" placeholder="Message"></textarea>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-1">Send Message</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="map-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3905.0843031472305!2d79.96790001470694!3d6.790621021884415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24e495837d849%3A0x4c3e06b0a8fd1012!2sNalinpriya%20Mawatha%2C%20Polgasowita!5e1!3m2!1sen!2slk!4v1589723948146!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <!-- / content -->

@endsection