

<?php $__env->startSection('content'); ?>
<div class="search-relative search-relatives " id="search-relatives">

  <div class="item height25vh" id="vid">


    
    <video class="embed-responsive video" src="<?php echo e(asset($homepage->video)); ?>" muted loop autoplay></video>










    <div class="caption-top caption-top-mb" style="margin-bottom: 20%" data-timeout="800">
      
      <div class="text page-head-caption container">
        <h2><?php echo e($homepage->tagline_bg); ?></h3>
          
          <h3><?php echo e($homepage->tagline_sm); ?></h3>
          
          <a href="#packages"><?php echo e($homepage->link_redirect); ?></a>
      </div>
    </div>

  </div>
</div>
</div>





<!-- slider -->




<!-- BLOCK popular -->

<div class="main-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="packages">
        <div class="text-center block width100 mb-50 block-title">
          <h2>Popular packages</h2>
          <div class="col-md-12">
            <p class="mb-40">We know how important a vacation for the relaxation of your body and soul. Leave the whole
              planning to us and be stress free with your vacation. We are dedicated to design your vacation with so
              much care and attention. Our promise is your vacation your way. Start holidaying with us and discover the
              undiscovered...</p>
          </div>

          <div class="separator"><span>Start by going through our packages!</span></div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php if($post->find($homepage->itinerary1)): ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="<?php echo e(route('itinerary', $post->find($homepage->itinerary1))); ?>">
            <div class="img-wrap">
              <img src="<?php echo e($post->find($homepage->itinerary1)->post_image); ?>" class="lazyload"
                alt="<?php echo e($post->find($homepage->itinerary1)->title); ?>">
              <!--<p class="price">1450 $</p>-->
            </div>
          </a>
          <div class="caption">
            <a href="<?php echo e(route('itinerary', $post->find($homepage->itinerary1))); ?>">
              <p class="title"><?php echo e($post->find($homepage->itinerary1)->title); ?></p>
            </a>
            <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
            <p class="time"><span class="ti-time"></span><?php echo e($post->find($homepage->itinerary1)->days); ?> days</p>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="#">
            <div class="img-wrap">
              <img src="<?php echo e(asset('img/adventure_1.jpg')); ?>" class="lazyload" alt="Adventure">
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
      <?php endif; ?>
      <?php if($post->find(2)): ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="<?php echo e(route('itinerary', $post->find(2))); ?>">
            <div class="img-wrap">
              <img src="<?php echo e($post->find(2)->post_image); ?>" class="lazyload" alt="<?php echo e($post->find(2)->title); ?>">
              <!--<p class="price">1450 $</p>-->
            </div>
          </a>
          <div class="caption">
            <a href="<?php echo e(route('itinerary', $post->find(2))); ?>">
              <p class="title"><?php echo e($post->find(2)->title); ?></p>
            </a>
            <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
            <p class="time"><span class="ti-time"></span><?php echo e($post->find(2)->days); ?> days</p>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="#">
            <div class="img-wrap">
              <img src="<?php echo e(asset('img/adventure_1.jpg')); ?>" class="lazyload" alt="Adventure">
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
      <?php endif; ?>
      <?php if($post->find(3)): ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="<?php echo e(route('itinerary', $post->find(3))); ?>">
            <div class="img-wrap">
              <img src="<?php echo e($post->find(3)->post_image); ?>" class="lazyload" alt="<?php echo e($post->find(3)->title); ?>">
              <!--<p class="price">1450 $</p>-->
            </div>
          </a>
          <div class="caption">
            <a href="<?php echo e(route('itinerary', $post->find(3))); ?>">
              <p class="title"><?php echo e($post->find(3)->title); ?></p>
            </a>
            <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
            <p class="time"><span class="ti-time"></span><?php echo e($post->find(3)->days); ?> days</p>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="#">
            <div class="img-wrap">
              <img src="<?php echo e(asset('img/adventure_1.jpg')); ?>" class="lazyload" alt="Adventure">
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
      <?php endif; ?>
      <?php if($post->find(4)): ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="<?php echo e(route('itinerary', $post->find(4))); ?>">
            <div class="img-wrap">
              <img src="<?php echo e($post->find(4)->post_image); ?>" class="lazyload" alt="<?php echo e($post->find(4)->title); ?>">
              <!--<p class="price">1450 $</p>-->
            </div>
          </a>
          <div class="caption">
            <a href="<?php echo e(route('itinerary', $post->find(4))); ?>">
              <p class="title"><?php echo e($post->find(4)->title); ?></p>
            </a>
            <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
            <p class="time"><span class="ti-time"></span><?php echo e($post->find(4)->days); ?> days</p>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="#">
            <div class="img-wrap">
              <img src="<?php echo e(asset('img/adventure_1.jpg')); ?>" class="lazyload" alt="Adventure">
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
      <?php endif; ?>
      <?php if($post->find(5)): ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="<?php echo e(route('itinerary', $post->find(5))); ?>">
            <div class="img-wrap">
              <img src="<?php echo e($post->find(5)->post_image); ?>" class="lazyload" alt="<?php echo e($post->find(5)->title); ?>">
              <!--<p class="price">1450 $</p>-->
            </div>
          </a>
          <div class="caption">
            <a href="<?php echo e(route('itinerary', $post->find(5))); ?>">
              <p class="title"><?php echo e($post->find(5)->title); ?></p>
            </a>
            <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
            <p class="time"><span class="ti-time"></span><?php echo e($post->find(5)->days); ?> days</p>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="#">
            <div class="img-wrap">
              <img src="<?php echo e(asset('img/adventure_1.jpg')); ?>" class="lazyload" alt="Adventure">
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
      <?php endif; ?>
      <?php if($post->find(6)): ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <a href="<?php echo e(route('itinerary', $post->find(6))); ?>">
            <div class="img-wrap">
              <img src="<?php echo e($post->find(6)->post_image); ?>" class="lazyload" alt="<?php echo e($post->find(6)->title); ?>">
              <!--<p class="price">1450 $</p>-->
            </div>
          </a>
          <div class="caption">
            <a href="<?php echo e(route('itinerary', $post->find(6))); ?>">
              <p class="title"><?php echo e($post->find(6)->title); ?></p>
            </a>
            <p class="date"><span class="ti-calendar"></span><?php echo date("Y/m/d") ?></p>
            <p class="time"><span class="ti-time"></span><?php echo e($post->find(6)->days); ?> days</p>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="col-md-6 col-lg-4">
      <div class="tour-item">
        <a href="#">
          <div class="img-wrap">
            <img src="<?php echo e(asset('img/adventure_1.jpg')); ?>" class="lazyload" alt="Adventure">
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
    <?php endif; ?>
  </div>

</div>


<!-- BLOCK / popular -->


<div class="ctoa text-center parallax-container color-white" class="lazyload"
  style="background-image: url('<?php echo e(asset('img/ancient_roots_3.jpg')); ?>');">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 style="text-shadow: 2px 2px 5px  #363636;" class="mb-30">Get 15% Off on your first travel</h2>
      <p style="text-shadow: 2px 2px 5px  #363636;" class="mb-40">We respect relationships and rapport. That's why your
        acquaintance is important to as more than any other priorities in life. Come and grab this opportunity to
        experience the unique Avoga way of Tourism. </p>
      <a class="btn btn-1" href="<?php echo e(asset('contact')); ?>">Contact Us</a>
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
            <p>We are ready to serve you in any manner you wish to communicate with us. Contact us today from your
              preferable method and we are available to serve you the way you want it. </p>
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
            <p>Fill our inquiry form in our <a href="contact">Contact Page</a> or send us an E-mail to <a
                href="mailto:inquiries@avogaholidays.com">inquiries@avogaholidays.com</a></p>
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
            <p>Already in Sri Lanka? Having many ideas of destinations and need professional assistance? Let's discuss
              and see what suits you. </p>
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
          <a class="block" href="<?php echo e(asset('destinations/kandy')); ?>">
            <img src="<?php echo e(asset('img/destinations/kandy_main.jpg')); ?>" class="lazyload" alt="img12">
          </a>
          <div class="caption clearfix">
            <a href="<?php echo e(asset('destinations/kandy')); ?>">
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
          <a class="block" href="<?php echo e(asset('destinations/galle')); ?>">
            <img src="<?php echo e(asset('img/destinations/galle_main.jpg')); ?>" class="lazyload" alt="Galle">
          </a>
          <div class="caption clearfix">
            <a href="<?php echo e(asset('destinations/galle')); ?>">
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
          <a class="block" href="<?php echo e(asset('destinations/arugambay')); ?>">
            <img src="<?php echo e(asset('img/destinations/arugambay_main.jpg')); ?>" class="lazyload" alt="Arugambay">
          </a>
          <div class="caption clearfix">
            <a href="<?php echo e(asset('destinations/arugambay')); ?>">
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
  function myFunction() {
       document.getElementById("packages") ;
} 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Google Drive\Avoga Version control\avoga\resources\views/home.blade.php ENDPATH**/ ?>