@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">
        <div class="bg-img-hero-center" style="background-image: url('/images/banners/21kgroup-banner.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <!--<h2 class="h1 text-white">TeachZe NEET Comprehensive Course</h2>-->
                        <h2 class="h1 text-white">TeachZe NEET Full Power</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2 space-bottom-1 space-bottom-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">A comprehensive 2 year NEET Coaching Program</h2>
            </div>
            
            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <p>Get in-depth knowledge of the subject as top NEET faculty teach and help you build conceptual understanding and its application.</p>
                <p>TeachZe NEET full power pack is the most comprehensive NEET coaching available in the country. The program is taught by TeachZe Experts who have helped thousands of students get scores above 600. This pack is perfect for students who are serious about cracking the NEET in their first attempt and get into their dream college - get subject matter expertise and learn tips and tricks on time management strategies and testing styles to boost your rank further.</p>
                <p>Over the course of 2 years the student will get assistance with each topic across subjects and have access to TeachZe Experts for help with difficult topics and doubt solving.</p>
            </div>

            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <h3>Duration - 2 Years</h3>
                <h2 class="mb-3 mb-lg-5">NEET Full Power Pack</h2>
                <ul>
                    <li>320+ hours of live online interactive Classes by experienced faculty</li>
                    <li>100+ hours of discussion</li>
                    <li>150+ hours of previous question paper discussion</li>
                    <li>90+ online practice and mock test</li>
                    <li>Doubt solving by NEET experts</li>
                </ul>
            </div>
            
            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <h2>Why take NEET Full Power Pack</h2>
                <ul>
                    <li>Get in-depth insight to all topics</li>
                    <li>Learn tips and tricks to give your final ranking a boost</li>
                    <li>Experienced Faculty with over 15 years of experience</li>
                    <li>Get instant result and analysis reports on online mock tests</li>
                    <li>Builds Problem solving speed & accuracy to excel</li>
                    <li>Get access to our performance analysis report: 
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
                            <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>1567</span>
                            <p>Students Enrolled</p>
                        </div>
                    </div>
        
                    <div class="col-4 mb-3 mb-md-5">
                        <div class="pr-lg-4">
                            <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>895</span>
                            <p>Students with 600+ scores</p>
                        </div>
                    </div>
        
                    <div class="col-4 mb-3 mb-md-5">
                        <div class="pr-lg-4">
                            <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>125673</span>
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
