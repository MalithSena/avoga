 @extends('layouts.site')

 @section('content')
    <!-- page-head -->

    <div class="page-head white-content">
      <div class="height50vh parallax-container" style="background-image: url('{{ asset('img/yala-head.jpg') }}')">
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
                        <li class="breadcrumb-item active" aria-current="page">Yala</li>
                      </ol>
                    </nav>
                    <h1 class="big-title mt-60">Yala National Park</h1>
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
            <p><span class="dropcap-2">Y</span>ala National Park is the most visited and second largest national park in Sri Lanka.The park covers 979 square kilometres (378 sq mi) and is located about 300 kilometres (190 mi) from Colombo.The park is best known for its variety of wild animals. It is important for the conservation of Sri Lankan elephants, Sri Lankan leopards and aquatic birds.Yala harbours 215 bird species including six endemic species of Sri Lanka. The number of mammals that has been recorded from the park is 44, and it has one of the highest leopard densities in the world.</p>
            <h4>Flora & Fauna</h4>
            <p>Yala National Park has a variety of ecosystems including moist monsoon forests, dry monsoon forests, semi deciduous forests, thorn forests, grasslands, fresh water and marine wetlands, and sandy beaches. The area under forest cover mainly consists of Block I and rangelands of open parkland (Pelessa grasslands) including some extensive grasslands. The forest area is restricted to around the Menik River while rangelands are found towards the sea side. Other habitat types of the Block I are tanks and water holes, lagoons and mangroves and chena lands. The mangrove vegetation in the Buthuwa lagoon is largely Rhizophora mucronata while Avicennia spp. and Aegiceras spp. are less abundant. The vegetation of Block II is similar to those of Block I, and Yalawela, once a fertile paddy field, represents Pitiya grasslands. The mangroves of Block II occur around the estuary of Menik River, which extent to 100 hectares (0.39 sq mi). The common mangrove plants are Rhizophora mucronata, Sonneratia caseolaris, Avicennia spp., and Aegiceras corniculatum. The lagoons of Pilinnawa, Mahapothana, and Pahalapothana are also located in this block. The other common mangrove species are Sonneratia caseolaris, Acanthus ilicifolius, Excoecaria agallocha, and Lumnitzera racemosa. In the bare sand Crinum zeylanicum is found.</p>

                <p>Out of 215 bird species of the park, six are endemic to Sri Lanka. They are Sri Lanka Grey Hornbill, Sri Lanka Junglefowl, Sri Lanka Wood-pigeon, Crimson-fronted Barbet, Black-capped Bulbul, and Brown-capped Babbler. The number of waterbirds inhabiting wetlands of Yala is 90 and half of them are migrants. Waterfowls (Lesser Whistling Duck, Garganey), Cormorants (Little Cormorant, Indian Cormorant), large waterbirds (Grey Heron, Black-headed Ibis, Eurasian Spoonbill, Asian Openbill, Painted Stork), medium-sized waders Tringa spp., and small waders Charadrius spp. are among the common waterbirds. Black-necked Stork and Lesser Adjutant are the rare birds that can be seen in the park. The migrant Great White Pelican and resident Spot-billed Pelican are also have been recorded. Other waterbirds attracted to the Yala lagoons include Lesser Flamingo, and Pelicans, and rare species such as Purple Heron, Night herons, Egrets, Purple Swamphen, and Oriental Darter. Thousands of waterfowls migrate to the lagoons of Yala during the northeast monsoon. They are Northern Pintail, White-winged Tern, Eurasian Curlew, Whimbrel, Godwits, and Ruddy Turnstone. The visiting species mingled with residing Lesser Whistling Duck, Yellow-wattled Lapwing, Red-wattled Lapwing, and Great Stone-curlew. Rock Pigeon, Barred Buttonquail, Indian Peafowl, Black Stork, Black-winged Stilt, and Greater Flamingo are among the other bird species. Crested Serpent-eagle and White-bellied Sea Eagle are the raptors of the park. The forest birds are Orange-breasted Green Pigeon, Hornbills, Old World flycatchers, Asian Paradise-flycatcher, Asian barbets, and Orioles.</p>
            <img src="{{ asset('img/leopard1.jpg') }}" alt="Leopard">
                <p>44 species of mammals are resident in Yala National Park, and it has one of the highest leopard densities in the world. The elephant herd of Yala contains 300–350 individuals. Sri Lankan Sloth Bear, Sri Lankan Leopard, Sri Lankan Elephant, Wild water buffalo are threatened species. Toque Macaque, Golden Palm Civet, Red Slender Loris, and Fishing Cat are among the other mammals that can be seen in Yala.</p>

                <p>The reptile fauna recorded from the park is 46 and five of them are endemic: Sri Lankan Krait, Boulenger's Keelback, Sri Lankan Flying Snake, Painted-lip Lizard and Wiegmann's Agama. The coastal line of the park is visited by the all five globally endangered sea turtles (Leatherback turtle, Olive Ridley, Loggerhead Sea Turtle, Hawksbill turtle, and Green turtle) that visit Sri Lanka. The two breeding crocodile species of Sri Lanka, Mugger crocodile and Saltwater Crocodile inhabit the park. The Indian Cobra and Russell's viper are among the other reptiles. There are 18 amphibians species that have been recorded from Yala while Bufo atukoralei and Adenomus kelaartii are endemic to Sri Lanka. In the water courses of Yala, 21 fresh water fishes are found. The fish population in the perennial reservoirs contain mostly exotic food fish Mozambique tilapia. The Stone sucker and Esomus thermoicos are endemic among other species. The Blackspot barb, Olive Barb, Orange chromide and Common Spiny Loach are the common fish species. Crabs and prawns include the fauna in the lagoons of the park. A variety of butterfly species is found here. The Common bluebottle, Common Lime Butterfly, Crimson Rose, Common Jezebel, and Common Mormon are the common species.</p>
          </div>
        </div>
      </div>
    </div>
  
@endsection
