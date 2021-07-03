<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Posts
        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="<?php echo e(route('posts.update', $post->id)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="<?php echo e(old('title', $post->title)); ?>" />
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="slug" class="block font-medium text-sm text-gray-700">Slug</label>
                            <input type="text" name="slug" id="slug" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="<?php echo e(old('slug', $post->slug)); ?>" />
                            <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="background_img" class="block font-medium text-sm text-gray-700">Background
                            Image</label>
                        <input type="file" name="background_img" id="background_img" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('background_img', $post->background_img)); ?>" />
                        <?php $__errorArgs = ['background_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="post_image" class="block font-medium text-sm text-gray-700">Post Image</label>
                        <input type="file" name="post_image" id="post_image" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('post_image', $post->post_image)); ?>" />
                        <?php $__errorArgs = ['post_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="similar" class="block font-medium text-sm text-gray-700">Similar</label>
                        
                        <?php for($i=1; $i < 4; $i++): ?> <select name="similar[]" id="similar" class="form-control">
                            <?php $__currentLoopData = $similar_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->id); ?>" <?php if($similar !=NULL && $similar_posts->find($similar[$i-1]
                                == $value->id)): ?> selected="selected" <?php elseif($similar == Null): ?>
                                <?php echo e("No posts to display"); ?> <?php endif; ?>>
                                <?php echo e($value->title); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php endfor; ?>
                            <?php $__errorArgs = ['similar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="days" class="block font-medium text-sm text-gray-700">Total Days</label>
                        <input type="text" name="days" id="days" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('days', $post->days)); ?>" />
                        <?php $__errorArgs = ['days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="tagline" class="block font-medium text-sm text-gray-700">Tagline</label>
                        <input type="text" name="tagline" id="tagline" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('tagline', $post->tagline)); ?>" />
                        <?php $__errorArgs = ['tagline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                        <input type="text" name="description" id="description" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('description', $post->description)); ?>" />
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <?php if(empty($post->tips)): ?>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <?php for($i=0; $i < 5; $i++): ?> <label for="tips" class="block font-medium text-sm text-gray-700">
                            Tips</label>
                            <input type="text" name="tips[]" id="tips" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="<?php echo e("Tip " . $i + 1); ?>" />
                            <?php endfor; ?>
                    </div>
                    <?php else: ?>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="tips" class="block font-medium text-sm text-gray-700">Tips</label>

                        <?php for($i=0; $i
                        < 5; $i++): ?> <input type="text" name="tips[]" id="tips" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('points', $points[$i]  )); ?>" />
                        <?php endfor; ?>

                    </div>
                    <?php endif; ?>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="introduction" class="block font-medium text-sm text-gray-700">Introduction</label>
                        <input type="text" name="introduction" id="introduction" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('introduction', $post->introduction)); ?>" />
                        <?php $__errorArgs = ['introduction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <?php for($i=0; $i < $post->days; $i++): ?>
                            <label for="from_to" class="block font-medium text-sm text-gray-700">From - To</label>

                            <input type="text" name="from_to[]" id="from_to" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="<?php echo e(old('from_to', $from[$i] ?? "" )); ?>" />
                            <label for="tour_itinerary" class="block font-medium text-sm text-gray-700">Tour
                                Itinerary</label>
                            <input type="text" name="tour_itinerary[]" id="tour_itinerary" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="<?php echo e(old('tour_itinerary', $destined[$i] ?? "")); ?>" />

                            <?php endfor; ?>
                    </div>
                    
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="map_url" class="block font-medium text-sm text-gray-700">Map URL</label>
                        <input type="text" name="map_url" id="map_url" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('map_url', $post->map_url)); ?>" />
                        <?php $__errorArgs = ['map_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_1" class="block font-medium text-sm text-gray-700">Gallery Image
                            1</label>
                        <input type="file" name="gallery_image_1" id="gallery_image_1" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('gallery_image_1', $post->gallery_image_1)); ?>" />
                        <?php $__errorArgs = ['gallery_image_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_2" class="block font-medium text-sm text-gray-700">Gallery Image
                            2</label>
                        <input type="file" name="gallery_image_2" id="gallery_image_2" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('gallery_image_2', $post->gallery_image_2)); ?>" />
                        <?php $__errorArgs = ['gallery_image_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_3" class="block font-medium text-sm text-gray-700">Gallery Image
                            3</label>
                        <input type="file" name="gallery_image_3" id="gallery_image_3" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('gallery_image_3', $post->gallery_image_3)); ?>" />
                        <?php $__errorArgs = ['gallery_image_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_4" class="block font-medium text-sm text-gray-700">Gallery Image
                            4</label>
                        <input type="file" name="gallery_image_4" id="gallery_image_4" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('gallery_image_4', $post->gallery_image_4)); ?>" />
                        <?php $__errorArgs = ['gallery_image_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_5" class="block font-medium text-sm text-gray-700">Gallery Image
                            5</label>
                        <input type="file" name="gallery_image_5" id="gallery_image_5" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('gallery_image_5', $post->gallery_image_5)); ?>" />
                        <?php $__errorArgs = ['gallery_image_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_6" class="block font-medium text-sm text-gray-700">Gallery Image
                            6</label>
                        <input type="file" name="gallery_image_6" id="gallery_image_6" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('gallery_image_6', $post->gallery_image_6)); ?>" />
                        <?php $__errorArgs = ['gallery_image_6'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_1" class="block font-medium text-sm text-gray-700">Extra Image 1</label>
                        <input type="file" name="extra_image_1" id="extra_image_1" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('extra_image_1', $post->extra_image_1)); ?>" />
                        <?php $__errorArgs = ['extra_image_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_2" class="block font-medium text-sm text-gray-700">Extra Image 2</label>
                        <input type="file" name="extra_image_2" id="extra_image_2" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('extra_image_2', $post->extra_image_2)); ?>" />
                        <?php $__errorArgs = ['extra_image_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_3" class="block font-medium text-sm text-gray-700">Extra Image 3</label>
                        <input type="file" name="extra_image_3" id="extra_image_3" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('extra_image_3', $post->extra_image_3)); ?>" />
                        <?php $__errorArgs = ['extra_image_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_4" class="block font-medium text-sm text-gray-700">Extra Image 4</label>
                        <input type="file" name="extra_image_4" id="extra_image_4" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="<?php echo e(old('extra_image_4', $post->extra_image_4)); ?>" />
                        <?php $__errorArgs = ['extra_image_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Edit Post
                        </button>
                    </div>



            </div>
            </form>
        </div>
    </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\Google Drive\Avoga Version control\avoga\resources\views/posts/edit.blade.php ENDPATH**/ ?>