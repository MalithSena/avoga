

<?php $__env->startSection('content'); ?>
<div class="page-head white-content">
  <div class="height60vh parallax-container"
    style="background-image: url('<?php echo e(asset('img/cat_main_itineraries.jpg')); ?>');">
    <div class="page-head-wrap">
      <div class="display-r">
        <div class="display-a">
          <div class="container">
            <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
              <div class="col-md-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('itineraries')); ?>">Tours</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Tours</li>
                  </ol>
                </nav>
                <h1 class="big-title mt-60">Our Tours</h1>
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


<div class="content mb-40 container">
  <div class="row">
    <div class="col-md-12 mt-40 mb-40">
      <!-- order form -->
      <div class="order-form p-relative animate" data-animation="fadeIn" data-timeout="1000">
        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-12">

              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center block width100 mb-50 block-title">
                      <h2>Popular packages</h2>
                      <div class="col-md-12">
                        <p class="mb-40">We know how important a vacation for the relaxation of your body and soul.
                          Leave the whole planning to us and be stress free with your vacation. We are dedicated to
                          design your vacation with deep care and attention. Our promise is a great holiday memory of a
                          lifetime. Start holidaying with us and discover the undiscovered...</p>
                      </div>

                      <div class="separator"><span>Start by going through our packages!</span></div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- / order form -->
        </div>
      </div>

      <div class="row container-sm">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-lg-4">
          <div class="tour-item">
            <a href="<?php echo e(route('itinerary', $post->slug)); ?>">
              <div class="img-wrap">
                <img src="<?php echo e($post->post_image); ?>" alt="">
              </div>
            </a>
            <div class="caption">
              <a href="<?php echo e(route('itinerary', $post->id)); ?>">
                <p class="title"><?php echo e($post->title); ?></p>
              </a>
              <p class="date"><span class="ti-calendar"></span><?php echo e($post->created_at->diffForHumans()); ?><p>
                  <p class="time"><span class="ti-time"></span><?php echo e($post->days); ?> days</p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="col-md-12">
        <!-- <div class="pagination">
            <ul>
              <li><a href="#"><i class="icon-arrow-left icons"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a class="active" href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="icon-arrow-right icons"></i></a></li>
            </ul>
          </div> -->
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Google Drive\Avoga Version control\avoga\resources\views/itineraries.blade.php ENDPATH**/ ?>