

<?php $__env->startSection('content'); ?>

<div class="page-head white-content">
  <div class="height60vh parallax-container" style="background-image: url('<?php echo e(asset($post->background_img)); ?>');">
    <div class="page-head-wrap">
      <div class="display-r">
        <div class="display-a">
          <div class="container">
            <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
              <div class="col-md-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('posts.index')); ?>">Tours</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($post->title); ?></li>
                  </ol>
                </nav>
                <h1 class="big-title mt-60"><?php echo e($post->title); ?></h1>
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

<div class="tour-single-info">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="tour-single-sidebar-info-item">
          <span class="ti-calendar"></span>
          <p><?php echo date("Y/m/d") ?></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="tour-single-sidebar-info-item">
          <span class="ti-timer"></span>
          <p><?php echo e($post->days); ?> days</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="tour-single-sidebar-info-item">
          <span class="ti-location-pin"></span>
          <p>Round Tour</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="tour-single-sidebar-info-item">
          <a href="<?php echo e(asset('contact')); ?>">
            <span class="ti-credit-card"></span>
            <p class="price"><i></i>Request a quote today</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content mt-20 mb-40 container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- tab-1 -->
        <div class="tab-1">
          <ul class="nav nav-tabs" role=tablist>
            <li class="nav-item">
              <a class="nav-link active" id="highlights-tab" data-toggle="tab" href="#tab-1" role="tab"
                aria-selected="true">Highlights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="itinerary-tab" data-toggle="tab" href="#tab-2" role="tab"
                aria-selected="false">Itinerary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="map-tab" data-toggle="tab" href="#tab-3" role="tab" aria-selected="false">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#tab-4" role="tab"
                aria-selected="false">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="book-tab" data-toggle="tab" href="#tab-5" role="tab" aria-selected="false">Book
                tour</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="highlights-tab">
              
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo e($post->post_image); ?>">
                </div>
                <div class="col-md-6">
                  <h2><?php echo e($post->tagline); ?></h2>
                  <p><?php echo e($post->description); ?></p>
                  <ul class="list-1">
                    <?php $__currentLoopData = $points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($point); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  </ul>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="itinerary-tab">
              <div class="row">
                <div class="col-md-6">
                  <!-- accordion-1 -->
                  <ul class="accordion-element accordion-2">
                    <li>
                      <a class="toggle" href="javascript:void(0);" data-item="item-1">Introduction</a>
                      <p class="inner">
                        <?php echo e($post->introduction); ?>

                      </p>
                    </li>
                    <?php if($post->from_to): ?>
                    <?php for($i = 0; $i < $post->days ; $i++): ?>
                      <li>
                        
                        <a class="toggle" href="javascript:void(0);" data-item="item-2">Day <?php echo e($i + 1); ?>:
                          <?php echo e($from[$i]); ?></a>
                        <p class="inner">
                          <?php echo e($destined[$i]); ?>

                        </p>
                      </li>
                      <?php endfor; ?>
                      <?php else: ?>
                      nothing to show
                      <?php endif; ?>
                  </ul>
                </div>
                <div class="col-md-6">
                  <img src="<?php echo e(asset($post->extra_image_2)); ?>" alt="Image">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="map-tab">
              
              <?php echo $post->map_url; ?>

            </div>
            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="gallery-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="image-grid-item">
                    <a href="<?php echo e(asset($post->gallery_image_1)); ?>" class="image-link">
                      <img src="<?php echo e(asset($post->gallery_image_1)); ?>" alt="Image">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="image-grid-item">
                    <a href="<?php echo e($post->gallery_image_2); ?>" class="image-link">
                      <img src="<?php echo e($post->gallery_image_2); ?>" alt="Image">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="image-grid-item">
                    <a href="<?php echo e($post->gallery_image_3); ?>" class="image-link">
                      <img src="<?php echo e($post->gallery_image_3); ?>" alt="Image">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="image-grid-item">
                    <a href="<?php echo e($post->gallery_image_4); ?>" class="image-link">
                      <img src="<?php echo e($post->gallery_image_4); ?>" alt="Image">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="image-grid-item">
                    <a href="<?php echo e($post->gallery_image_5); ?>" class="image-link">
                      <img src="<?php echo e($post->gallery_image_5); ?>" alt="Image">
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="image-grid-item">
                    <a href="<?php echo e($post->gallery_image_6); ?>" class="image-link">
                      <img src="<?php echo e($post->gallery_image_6); ?>" alt="Image">
                    </a>
                  </div>
                </div>
              </div>


            </div>
            <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="book-tab">

              <div class="row">
                <div class="col-md-6">
                  <div class="tour-single-sidebar-form mb-30">
                    <form id="modal-book" class="form-block" method="POST">
                      <div class="form-group col-md-12">
                        <label class="col-form-label">Your Name</label>
                        <input class="form-control" name="name" type="text" value="" placeholder="Your name" />
                      </div>
                      <div class="form-group col-md-12">
                        <label class="col-form-label">Your Email</label>
                        <input class="form-control" type="email" name="email" value="" placeholder="Your email" />
                      </div>
                      <div class="form-group col-md-12">
                        <label class="col-form-label">Depart Date</label>
                        <input type="text" class="form-control" name="depart" id="date3"
                          placeholder="<?php echo date("Y/m/d"); ?>">
                      </div>
                      <div class="form-group col-md-12">
                        <label class="col-form-label">Person(s)</label>
                        <input class="form-control" type="text" name="person" value="" placeholder="Person(s)" />
                      </div>
                      <div class="form-group col-md-12">
                        <!-- <label class="col-form-label">category</label> -->
                        <input type="hidden" class="form-control" name="category" value="<?php echo e($post->title); ?>" id="date3">
                      </div>
                      <div class="form-group col-md-12">
                        <button type="submit" name="search_btn" class="btn btn-1 mt-20 width100">Book tour</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="tour-single-sidebar mb-30 tour-single-sidebar-padding">
                    <h4>24/7 Customer Support</h4>
                    <ul class="support">
                      <li><span class="ti-time"></span>24-hour support service of customers</li>
                      <li><span class="ti-headphone-alt"></span>(094)7-7362-650</li>
                      <li><span class="ti-email"></span><a
                          href="mailto:inquiries@avogaholidays.com">inquiries@avogaholidays.com</a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /.tab-1 -->
      </div>

      <div class="col-md-12 mt-30">
        <h2>Similar tours</h2>
      </div>
      <?php $__currentLoopData = $similar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-6 col-lg-4">
        <div class="tour-item">
          <?php if($post->similar > 0): ?>
          <a href="<?php echo e($post->findOrFail($tour)->id); ?>">
            <?php else: ?>
            <a href="<?php echo e($post->id); ?>">
              <?php endif; ?>
              <div class="img-wrap">
                <?php if($tour > 0): ?>
                <img src="<?php echo e($post->findOrFail($tour)->post_image); ?>" alt="<?php echo e($post->findOrFail($tour)->title); ?>">
                <!--<p class="price">1450 $</p>-->
                <?php else: ?>
                <img src="<?php echo e($post->post_image); ?>" alt="<?php echo e($post->title); ?>">
                <!--<p class="price">1450 $</p>-->
                <?php endif; ?>
              </div>
            </a>
            <div class="caption">
              <?php if($tour > 0): ?>
              <a href="<?php echo e($post->findOrFail($tour)->id); ?>">
                <p class="title"><?php echo e($post->findOrFail($tour)->title); ?></p>
              </a>
              <p class="date"><span class="ti-calendar"></span><?php echo date("M d, Y") ?></p>
              <p class="time"><span class="ti-time"></span> <?php echo e($post->findOrFail($tour)->days); ?> </p>
              <?php else: ?>
              <a href="<?php echo e($post->id); ?>">
                <p class="title"><?php echo e($post->title); ?></p>
              </a>
              <p class="date"><span class="ti-calendar"></span><?php echo date("M d, Y") ?></p>
              <p class="time"><span class="ti-time"></span> <?php echo e($post->days); ?> </p>
              <?php endif; ?>

            </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Google Drive\Avoga Version control\avoga\resources\views/posts/show.blade.php ENDPATH**/ ?>