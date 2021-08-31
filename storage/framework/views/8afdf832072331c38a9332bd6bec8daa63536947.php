<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('front.layouts.nav-coaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="content" role="main">

        <div class="bg-light">
            <div class="container space-top-2 space-top-md-4 space-top-lg-0">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 space-2 space-top-lg-5 space-bottom-lg-3">
                        <div class="mb-3">
                            <h1>How to apply?</h1>
                        </div>
























                    </div>

                    <div class="col-lg-6 align-self-lg-end d-none d-lg-inline-block">
                        <figure class="mb-n7 ml-lg-4">
                            <img class="img-fluid" src="/images/coaching/svg/illustrations/knowledgebase-community-1.svg" alt="Image Description">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="mb-10">
                <h2>Schools</h2>
                <p>Please send us a mail about your School and an appointment time for our Person to meet the School Authority to <a href="mailto:hello@21kclass.com">hello@21kclass.com</a></p>
            </div>
            <div class="mb-5">
                <h2>Individuals</h2>
                <p>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Contact us</button>
                </p>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-21.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with TeachZe</h3>
                </div>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        <?php echo $__env->make('front.layouts.apply', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </main>

    <?php echo $__env->make('front.layouts.footer-coaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TeachZe\resources\views/front/pages/coaching/admission/how-to-apply.blade.php ENDPATH**/ ?>