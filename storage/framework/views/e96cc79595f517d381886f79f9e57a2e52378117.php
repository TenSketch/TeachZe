<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('front.layouts.nav-coaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="content" role="main">

        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-competitive-exam.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">Competitive Examinations</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">TeachZe Competitive Examinations</h2>
            </div>

            <div class="container space-bottom-3">
                <p>We conduct a series of Tests to prepare the students to face the competitive examinations for Class IX to XII students. The tests shall indicate the current level of knowledge the child has and the areas of strength and weakness to be prepared to attend such competitive examinations.</p>
                <p>The competitive examinations that can be attempted through our practice test series are <span class="text-dark">KVPY, NTSE, NSTSE and Olympiads – NSO, IMO & IEO</span></p>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-19.svg');">
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
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TeachZe\resources\views/front/pages/coaching/academics/competitive-examination.blade.php ENDPATH**/ ?>