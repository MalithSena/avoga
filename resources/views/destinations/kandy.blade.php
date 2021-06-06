 @extends('layouts.site')

 @section('content')
    <!-- page-head -->

    <div class="page-head white-content">
      <div class="height50vh parallax-container" style="background-image: url('{{ asset('img/pera.jpg') }}')">
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
                        <li class="breadcrumb-item active" aria-current="page">Kandy</li>
                      </ol>
                    </nav>
                    <h1 class="big-title mt-60">Kandy the town in Misty Hills</h1>
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
            <p><span class="dropcap-2">K</span>andy, the last sovereign kingdom of Sri Lanka that ended its sinhalese monarchy in 1815, is a city which showcases its heritage and culture so proudly even today. Located 120kms away from Colombo, Kandy is also known as the <em>Hill Capital</em> due to it&#39;s position in the central highlands of the country.</p>
            <p>The most anticipated and popular event in Kandy is the  <em>Esala Perahera pageant</em>  (The Kandy Procession). It is considered the pinnacle of Kandyan and Buddhist culture as it showcases the casket of the Tooth Relic of Lord Buddha which the majestic elephant Rajah carries on its back. The Kandyan dancers, drummers, whip crackers and many more adorn this procession where the most number of elephants also participate.</p>

             <blockquote class="blockquote-2">
              <p>This sacred Buddhist site, popularly known as the city of Senkadagalapura, was the last capital of the Sinhala kings whose patronage enabled the Dinahala culture to flourish for more than 2,500 years until the occupation of Sri Lanka by the British in 1815. It is also the site of the Temple of the Tooth Relic (the sacred tooth of the Buddha), which is a famous pilgrimage site.</p>
              <span class="author">UNESCO World Heritage Centre </span>
            </blockquote>
            <p>Apart from the luscious green hills and the charming atmosphere, Kandy is quintessentially a city of culture. It has been named as a  <strong>UNESCO</strong> heritage site. The Temple of the Tooth Relic is a must see if you are in Kandy not just for the religious value but also for its art and architecture. This historical edifice was once a palace and the Octagon has been used since ancient times as a sign of royalty. You are not allowed to see the tooth Relic but the golden Casket of the tooth relic is open for public viewing two times a day. You can also enjoy the bold red and yellow paintings of the Kandyan era that adorn the walls of the temple. Many Hindu shrines dedicated to God Vishnu, Goddess Paththini are also situated closely to the Temple of the Tooth.</p>
            <!--<h4>Quisque cursus</h4>-->
            <!--<p>The Lankatilaka temple has a historic background can be visited for it s historical value and its existence dates back to the 14th century. You will definitely enjoy the wall paintings inside the temple and the picturesque view of the surrounding hills as the temple is on top a rock. </p>-->

            <img src="{{ asset('img/queens-hotel.jpg') }}" alt="Queens Hotel">

            <!--<p>As a result of the influence of Hindu culture Sri Lanka is blessed with diverse forms of art. The architecture of the temple influenced by Dravidian architecture has been built in 1344 according to historical records. This amazing monument of history is just 15kms away from the city. The renowned Embekke Temple built in the 14th Century stands for the magnificent and intricate wood carvings that depict dancers, mythical beasts etc. </p>-->
            <p>For  nature lovers and outdoor people, Kandy offers many options to go trekking and you will be able to see exotic flora and fauna if you happen to go trekking in Udawatte Kele which is also known as the ‘Forbidden Forest of the Kings’. Just outside the boundary of Kandy lies the Hantana and Knuckles Mount Ranges which are also ideal grounds for trekking. </p>
            p>The Botanical Gardens of Peradeniya is also a popular place among tourists and this has been in existence since the time of kings. The orchid house and the suspension bridge remain major attractions among visitors.</p>
            <hr>
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
