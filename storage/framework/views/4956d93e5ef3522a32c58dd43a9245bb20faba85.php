<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('front.layouts.nav-coaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="position-relative">
        <div class="bg-dark bg-dark-new space-2" style="background-image: url('/images/coaching/svg/components/abstract-shapes-20.svg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <?php if($course->is_new == 1): ?>
                            <small class="btn btn-xs btn-success btn-pill text-uppercase mb-2 rounded">New</small>
                        <?php endif; ?>
                        <h1 class="text-lh-sm text-white"><?php echo e($course->name); ?></h1>
                        <p class="text-white"><?php echo e($course->excerpt); ?></p>

                        <div class="d-flex align-items-center flex-wrap">
                            <ul class="list-inline mt-b2 mb-0 mr-2">
                                <?php if($course->rating >= 1): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                <?php elseif($course->rating > 0 && $course->rating < 1): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                <?php else: ?>
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                <?php endif; ?>

                                <?php if($course->rating >= 2): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                <?php elseif($course->rating > 1 && $course->rating < 2): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                <?php else: ?>
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                <?php endif; ?>

                                <?php if($course->rating >= 3): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                <?php elseif($course->rating > 2 && $course->rating < 3): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                <?php else: ?>
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                <?php endif; ?>

                                <?php if($course->rating >= 4): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                <?php elseif($course->rating > 3 && $course->rating < 4): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                <?php else: ?>
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                <?php endif; ?>

                                <?php if($course->rating >= 5): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                <?php elseif($course->rating > 4 && $course->rating < 5): ?>
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                <?php else: ?>
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                <?php endif; ?>
                            </ul>
                            <span class="d-inline-block">
                              <small class="font-weight-bold text-white-50 mr-1"><?php echo e(number_format($course->rating, 1)); ?> / 5</small>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container space-top-md-2 position-md-absolute top-0 right-0 left-0">
            <div class="row justify-content-end">
                <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 position-relative z-index-2">
                    <div class="js-sticky-block card card-bordered" data-hs-sticky-block-options="{
                   &quot;parentSelector&quot;: &quot;#stickyBlockStartPoint&quot;,
                   &quot;breakpoint&quot;: &quot;md&quot;,
                   &quot;startPoint&quot;: &quot;#stickyBlockStartPoint&quot;,
                   &quot;endPoint&quot;: &quot;#stickyBlockEndPoint&quot;,
                   &quot;stickyOffsetTop&quot;: 12,
                   &quot;stickyOffsetBottom&quot;: 12
                 }" style="">

                        <div class="position-relative">
                            <div class="w-100 mx-auto">
                                <img class="card-img-top" src="<?php echo e(($course->thumb) ? asset('/storage/'.$course->thumb) : '/images/logos/s-logo.png'); ?>" alt="Image Description">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <?php if($course->price > 0): ?>
                                    <span class="d-block h5 text-lh-sm mb-0 text-danger">₹<?php echo e(number_format($course->price)); ?></span>
                                <?php else: ?>
                                    <span class="d-block h5 text-lh-sm mb-0 text-danger">FREE</span>
                                <?php endif; ?>
                                <?php if($course->original_price > 0): ?>
                                    <span class="text-muted text-lh-sm"><del>₹<?php echo e(number_format($course->original_price)); ?></del></span>
                                <?php endif; ?>
                            </div>

                            <div class="mb-4">
                                <?php if(!in_array($course->id, session('SESSION_TOC_CART_COURSE_IDS', []))): ?>
                                    <form id="add-to-cart" action="<?php echo e(route('add-to-cart')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                                    </form>
                                    <div class="btn btn-block btn-primary" onclick="event.preventDefault();document.getElementById('add-to-cart').submit();">Add to cart</div>
                                <?php else: ?>
                                    <a class="btn btn-block btn-primary" href="<?php echo e(route('cart')); ?>">Go to cart</a>
                                <?php endif; ?>

                                <form id="buy-now" action="<?php echo e(route('buy-now')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                                </form>
                                <div class="btn btn-block btn-outline-info mt-2" onclick="event.preventDefault();document.getElementById('buy-now').submit();">Buy now</div>
                            </div>

                            <h2 class="h4">This course includes</h2>

                            <div class="text-body font-size-1 mb-2">
                                <?php echo $course->features; ?>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-top-2 space-top-md-1">
        <div class="row">
            <div class="col-md-7 col-lg-8" style="min-height: 800px">
                <div class="pt-0 mt-0">
                    <h3 class="mb-4">Description</h3>
                    <?php echo $course->description; ?>

                </div>
            </div>
        </div>
    </div>

    <div id="stickyBlockEndPoint"></div>

    <div class="space-top-1"></div>

    <?php if(count($otherCourses)): ?>

        <div class="container space-bottom-2">
            <div class="border-top pt-7 mt-7">
                <h3 class="mb-4">Students also bought</h3>

                <div class="row">
                    <?php $__currentLoopData = $otherCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="col-md-6 col-lg-4 mb-5">
                            <div class="card card-bordered h-100">
                                <a class="card-img-top position-relative" href="/course/<?php echo e($otherCourse->slug); ?>">
                                    <img class="card-img-top" src="<?php echo e(($otherCourse->thumb) ? asset('/storage/'.$otherCourse->thumb) : '/images/logos/logo_TeachZe.png'); ?>" alt="<?php echo e($otherCourse->name); ?>">
                                </a>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h3>
                                            <a class="text-inherit" href="/course/<?php echo e($otherCourse->slug); ?>"><?php echo e($otherCourse->name); ?></a>
                                        </h3>
                                    </div>
                                    <p class="mb-0"><?php echo e($otherCourse->excerpt); ?></p>
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-0 left-0 mb-3">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <ul class="list-inline mt-b2 mb-0 mr-2">
                                                    <?php if($otherCourse->rating >= 1): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    <?php elseif($otherCourse->rating > 0 && $otherCourse->rating < 1): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    <?php else: ?>
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    <?php endif; ?>

                                                    <?php if($otherCourse->rating >= 2): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    <?php elseif($otherCourse->rating > 1 && $otherCourse->rating < 2): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    <?php else: ?>
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    <?php endif; ?>

                                                    <?php if($otherCourse->rating >= 3): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    <?php elseif($otherCourse->rating > 2 && $otherCourse->rating < 3): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    <?php else: ?>
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    <?php endif; ?>

                                                    <?php if($otherCourse->rating >= 4): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    <?php elseif($otherCourse->rating > 3 && $otherCourse->rating < 4): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    <?php else: ?>
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    <?php endif; ?>

                                                    <?php if($otherCourse->rating >= 5): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    <?php elseif($otherCourse->rating > 4 && $otherCourse->rating < 5): ?>
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    <?php else: ?>
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    <?php endif; ?>
                                                </ul>
                                                <span class="d-inline-block">
                                              <small class="font-weight-bold text-dark mr-1"><?php echo e($otherCourse->rating); ?> / 5</small>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <?php if($otherCourse->original_price > 0): ?>
                                                <small class="d-block text-muted text-lh-sm"><del>₹<?php echo e(number_format($otherCourse->original_price)); ?></del></small>
                                            <?php endif; ?>
                                            <span class="d-block h5 text-lh-sm mb-0 text-danger">₹<?php echo e(number_format($otherCourse->price)); ?></span>
                                        </div>
                                        <a class="btn btn-sm btn-info transition-3d-hover" href="/coaching/course/<?php echo e($otherCourse->slug); ?>">Course details</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="space-top-1"></div>
    <?php endif; ?>



    <div class="border-top">
        <div class="container space-2">
            <div class="text-center" style="background: url('/images/coaching/svg/components/abstract-shapes-19.svg') center no-repeat;">
                <h2>Find the right learning path for you</h2>
                <p>Answer a few questions and match your goals to our programs.</p>
                <span class="d-block mt-5">
                  <a class="btn btn-primary transition-3d-hover" href="#">Explore by Category</a>
                </span>
            </div>
        </div>
    </div>

    <?php echo $__env->make('front.layouts.footer-coaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $('.js-sticky-block').each(function () {
            var stickyBlock = new HSStickyBlock($(this)).init();
        });

        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TeachZe\resources\views/front/pages/coaching/course.blade.php ENDPATH**/ ?>