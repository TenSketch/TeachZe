@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">
        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-jee.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">JEE Test Series</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2 space-bottom-1 space-bottom-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">Get JEE Test Series Online Combo Pack</h2>
            </div>
            
            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <p>Give your rank a boost by completing online mock tests. Get an instant performance report and live doubt solving session with JEE Experts.</p>
                <p>This 4 month test series pack is ideal for students who have almost completed their syllabus and would now want to brush up on their exam skills. This set of test series will help you build speed and strategy required to perform well on exam day. The test series is developed by 21K JEE Experts who are responsible for helping hundreds of students each year crack JEE. Their students have regularly secured seats in IITs and other premium engineering colleges based on their JEE performance.</p>
            </div>

            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <h3>Duration - 4 Months</h3>
                <h2 class="mb-3 mb-lg-5">JEE Test Series Pack</h2>
                <ul>
                    <li>55+ test combo of Unit Test, Subject wise and full portion Mock Test.</li>
                    <li>Doubt clearance through video chat.</li>
                    <li>Support practice with formulae sheet, practice sheet & study cards.</li>
                </ul>
            </div>
            
            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <h2>Why take the JEE Test Series Pack</h2>
                <ul>
                    <li>Assess the Preparedness and performance instant result and analysis reports.</li>
                    <li>Builds Problem solving speed & accuracy to excel</li>
                    <li>Performance analysis report:  
                        <ul style="list-style-type:circle">
                            <li>Score card (Overall score & rank, Subject score & rank, Percentage)</li>
                            <li>Question wise report (Summary attempted, un-attempted, correct & incorrect)</li>
                            <li>Chapter wise report (Strength & weakness, competent area)</li>
                            <li>Subject Wise report (summarized after each concept test)</li>
                            <li>Difficulty level report (tough, medium & easy)</li>
                            <li>Progression Graph (efforts)</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5"><br /><br />
            <div class="row">
                <div class="row col-md-2">
                    
                </div>
                <div class="row col-md-10">
                    <div class="col-4 mb-3 mb-md-5">
                        <div class="pr-lg-4">
                            <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>6142</span>
                            <p>Students Enrolled</p>
                        </div>
                    </div>
        
                    <div class="col-4 mb-3 mb-md-5">
                        <div class="pr-lg-4">
                            <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>2879</span>
                            <p>Students in 90-100 percentile</p>
                        </div>
                    </div>
        
                    <div class="col-4 mb-3 mb-md-5">
                        <div class="pr-lg-4">
                            <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>155370</span>
                            <p>hours of live classes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative text-center border-top">
            <div class="container space-2 space-bottom-lg-3">
                <div class="w-md-60 mx-md-auto mb-5 mb-md-7">
                    <h2 class="h1">Stay in the know</h2>
                    <p>Get offers on our latest programs from TeachZe.</p>
                </div>

                <div class="w-md-75 w-lg-50 mx-md-auto">
                    <form class="js-validate mb-3">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary btn-pill btn-wide" data-toggle="modal" data-target="#applyNow">Apply now</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-none d-lg-block position-absolute bottom-0 left-0 max-w-35rem w-100">
                    <img class="img-fluid" src="/images/coaching/svg/illustrations/mobile-article.svg" alt="Image Description">
                </div>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-coaching')


@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
