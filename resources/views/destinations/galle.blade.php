 @extends('layouts.site')

 @section('content')
    <!-- page-head -->

    <div class="page-head white-content">
      <div class="height50vh parallax-container" style="background-image: url('{{ asset('img/seahd1.jpg') }}')">
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
                        <li class="breadcrumb-item active" aria-current="page">Galle</li>
                    </nav>
                    <h1 class="big-title mt-60">The Colonial Heritage</h1>
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
            <p><span class="dropcap-2">G</span>alle is the manifestation of ancient colonial richness that is the reflection of this magnificient city even today. Galle fort is first built by Protugese and later developed under Dutch and English influence. Galle Fort is fortified with its beautiful architecture, breathtaking natural surroundings and rich heritage. Looking down from the Fort, one could see the cerulean waters lazily lapping the shore and if you are lucky you could witness the crimson sun dipping into the Indian Ocean in the evenings. </p>

		<p>Placed in the southern city of Galle, the Fort is one of the main attractions of the Galle city. Due to the colonial architecture and its historical value the Galle Fort stands today as a World Heritage Site recognised by UNESCO. Today there are a few old churches which are well maintained and the stables are used to house the Fort Museum and many shops and cafes are scattered inside the Fort premises targeting the tourists that frequent the area.</p>

		<p>Most of the buildings inside the Fort pose as classic examples of the combination of  Dutch architectural styles and South Asian architecture. In fact the Governor’s residence is transformed into a hotel called Amangalla.</p>
            <blockquote class="blockquote-2">
              <p>Founded in the 16th century by the Portuguese, Galle reached the height of its development in the 18th century, before the arrival of the British. It is the best example of a fortified city built by Europeans in South and South-East Asia, showing the interaction between European architectural styles and South Asian traditions.</p>
              <span class="author">UNESCO World Heritage </span>
            </blockquote>
            <h4>The Maritime Museum</h4>
            <p>Anyone who visits the Galle Fort should first step into the museum which houses all the antiquities that belong to the Dutch era. From ceramic wear to jewellery, garments, furniture, beeralu weavings and even a well that has been used in the Dutch era can be observed in National Museum of Galle. It will give you a glimpse to the culture and lifestyle that existed in Ceylon under the Dutch rule.</p>

            <p>The maritime museum of Galle is also housed inside the Fort in one of the Fort’s warehouses. It houses many archaeological items which depict the marine biology and the anthropological aspects of the southern coast. Old watercrafts used for transportation, fishing equipment, samples of corals etc can be seen and it even has a skeleton of a whale.</p>

            <img src="{{ asset('img/gallehd.jpg') }}" alt="Galle">
            <h4>Cafes & Restaurants in the old city</h4>
            <p>There are many cafes and restaurants to suit anyones budget with a range of cuisines from Sri Lankan styled dishes to fusion cuisine. Peddlar’s Inn cafe, Heritage Cafe, Royal Dutch cafe and Serendipity Arts cafe are some of the places where you can grab a bite and enjoy a drink after a stroll around the Fort. Boutique and luxury hotels are also inside the Fort premises which have the Dutch architecture. The Amangalla Hotel, Rampart Hotel and Galle Fort Hotel are a few of the hotels that you could find in this splendid rampart.</p>

            <p>Like the gentlemen in the Dutch era you could try the wet shave for a clean and smooth shave, if you are in the Amangalla Hotel. There are cooking tours where you could find the best Sri Lankan street food and you could also enjoy guided walking tours inside this best preserved colonial rampart. If you want to shop for handloom garments, gemstones and jewellery there are quite a few shops and you may be able to find a souvenir or two to cherish your memorable experience at the Galle Fort.</p>
          </div>
        </div>
      </div>
    </div>
    
@endsection
