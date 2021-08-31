<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('front.layouts.nav-tutoring', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="content" role="main">
        <div class="container space-top-1 space-top-lg-2">
            <div class="container space-top-1 space-bottom-1">
                <!--<div class="w-lg-80 text-left mx-lg-auto mb-5">-->
                <!--    <h2>Welcome Students and Parents</h2>-->
                <!--</div>-->
                <p><b>TeachZe NEET Test Series 2021</b></p>
                <p>Give your rank a boost by completing online mock tests. Get your performance reports and live doubt solving sessions with NEET Experts.
                    This set of test series is based on the Latest NEET pattern and syllabus. The test series is developed by TeachZe NEET Experts responsible for helping hundreds of students crack NEET each year.</p>
                <!--<p><b>Test Date: From 20-July-2021 to 15-August-2021 </b></p>-->
                
                
                <p><b>Why take the TeachZe NEET Test Series 2021?</b></p>
                <ul style="list-style-type:square;">
                    <li>Assess the Preparedness</li>
                    <li>Build Problem-solving speed & accuracy in exams</li>
                    <li>Performance analysis report
                        <ul style="list-style-type:square;">
                            <li>Scorecard (Overall score & rank, Subject score & rank, Percentage)</li>
                            <li>Chapter-wise report (Strength & weakness, competent area)</li>
                            <li>Subject-Wise report (summarized after each concept test)</li>
                            <li>Progression Graph (efforts)</li>
                            <li>Analyze and rectify errors with the step by step self explanatory solution.</li>
                        </ul>
                    </li>
                </ul>
                
                <p><b>Free Mock Test:</b></p>
                <p>This test will cover the complete syllabus as per the NEET format. The test will be for 3 hours, and you will get four marks for every correct answer and one negative impact for every wrong answer.</p>
                <p><b>The process to take the TeachZe NEET Test Series 2021:</b></p>
                <p>&nbsp;&nbsp;- Click Registration Form at the end of this page</p>
                <p>&nbsp;&nbsp;- Fill the registration form and click the Submit button</p>
                <p>&nbsp;&nbsp;- You will receive a mail from us acknowledging your registration, login credentials for the free mock Full NEET Test and the online payment link </p>
                <p>&nbsp;&nbsp;- Once the payment is cleared, you will receive the acknowledgement and the login credentials for taking the tests.</p>
                <p>Meanwhile, you can take our Free Mock Test and understand your preparation for the NEET 2021.</p>
            </div>
            
            <div class="mt-4">
                <a class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#registerNeetSeries">Register</a>
            </div><br /><br />
        </div>
    </div>
    
    
            
    <?php echo $__env->make('front.layouts.neet-register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </main>

    <?php echo $__env->make('front.layouts.footer-tutoring', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TeachZe\resources\views/front/pages/tutoring/neet-test-series/intro.blade.php ENDPATH**/ ?>