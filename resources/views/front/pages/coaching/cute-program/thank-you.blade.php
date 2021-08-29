@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">
        <div class="container space-top-1 space-top-lg-2">
            <div class="container space-top-1 space-bottom-1">
                <!--<div class="w-lg-80 text-left mx-lg-auto mb-5">-->
                <!--    <h2>Welcome Students and Parents</h2>-->
                <!--</div>-->
                <p><b>Welcome Students and Parents</b></p>
                <p>CUTE’21 is an online test for students from Class VI to Class XII. (Class XI is exempted). Students from CBSE & TN State Board Schools can take this test.</p>
                <p>This test attempts to test the conceptual understanding in Maths & Science of their previous class. The questions will be of Objective type and can be answered through your Computer.</p>
                <p><b>Test Date: From 20-July-2021 to 15-August-2021 </b></p>
                
                <p><b>Benefits to students:</b></p>
                <p>The CUTE’21 Test result will showcase the conceptual understanding of the subjects the student studied in the previous class. Almost all the key concepts keep expanding as they progress in the next year. Hence, it becomes important for the student to know his/her understanding level to prepare accordingly.</p>
                <p>The result will give a bird's eye view of the academic requirements of the student, and being at the beginning of the school year, it can help them prepare accordingly.</p>
                
                <p><b>Tests for Classes VI to X:</b></p>
                <p>15 questions from Science and 15 questions from Maths with a total of 30 questions to be answered in 40 minutes. The total mark is 60.</p>
                 
                <p><b>Tests for Classes XII:</b></p>
                <p>Science Group students can take the question set of Maths, Physics & Chemistry (MPC) with 10 questions from each subject.</p>
                <p>Science Group students can also take the question set of Maths, Physics, Chemistry & Biology with 10 questions each from Maths, Physics & Chemistry and 15 questions in Biology. The total marks will be 90.</p>
                <p>Commerce Group students can take the questions set of Accountancy, Commerce & Economics with 10 questions each. The total marks will be 60.</p>
                
                <p><b>Test Pattern:</b></p>
                <div class="table-responsive-lg w-lg-75 mx-lg-auto">
                
                    <table class="table table-align-middle table-thead-bordered">
                        <thead class="text-center">
                        <tr>
                            <th scope="col" class="align-middle">
                                <span class="text-dark">Class</span>
                            </th>
                            <th scope="col" class="align-middle border-left">
                                <span class="text-dark">Subjects</span>
                            </th>
                            <th scope="col" class="align-middle border-left">
                                <span class="text-dark">No.of questions</span>
                            </th>
                            <th scope="col" class="align-middle border-left">
                                <span class="text-dark">Marks</span>
                            </th>
                            <th scope="col" class="align-middle border-left">
                                <span class="text-dark">Time</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="border-top border-bottom">
                                <td class="font-size-1 bg-white">VI to X</td>
                                <td class="font-size-1 bg-white border-left">Maths & Science</td>
                                <td class="font-size-1 bg-white border-left">30(15 each subject)</td>
                                <td class="font-size-1 bg-white border-left">60</td>
                                <td class="font-size-1 bg-white border-left">40 Minutes</td>
                            </tr>
                            <tr class="border-top border-bottom">
                                <td class="font-size-1 bg-white">XII</td>
                                <td class="font-size-1 bg-white border-left">
                                    1. Maths, Physics, Chemistry <br/>
                                    2. Commerce, Accountancy, Economics
                                </td>
                                <td class="font-size-1 bg-white border-left">30( 10 each subject)</td>
                                <td class="font-size-1 bg-white border-left">60</td>
                                <td class="font-size-1 bg-white border-left">40 Minutes</td>
                            </tr>
                            <tr class="border-top border-bottom">
                                <td class="font-size-1 bg-white">XII With Biology</td>
                                <td class="font-size-1 bg-white border-left">Maths, Physics, Chemistry, Biology</td>
                                <td class="font-size-1 bg-white border-left">45(MPC -30, B-15)</td>
                                <td class="font-size-1 bg-white border-left">90</td>
                                <td class="font-size-1 bg-white border-left">60 Minutes(1 Hour)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p><b>Courses from TeachZe:</b></p>
                <p>(All classes will be Live & Online. Students from any city or town can join our programs)</p>
                <p>For Class VIII – Pre-Foundation Program - Concept understanding classes in Science & Maths</p> 
                <p>For Class IX & X – Foundation Program to prepare students for NEET & JEE</p>
                
                
                <p><b>For Class XI:</b></p>
                <ul style="list-style-type:square;">
                    <li>NEET 2 year Program</li>
                    <li>JEE 2 year Program</li>
                    <li>CA Foundation 2 year Program</li>
                </ul>
                
                <p><b>For Class XII:</b></p>
                <ul style="list-style-type:square;">
                    <li>NEET 1 Year Program</li>
                    <li>NEET Test Series</li>
                    <li>NEET Crash Program</li>
                    <li>NEET Repeater Program</li>
                    <li>JEE Test Series</li>
                    <li>JEE Crash Program</li>
                    <li>CA Foundation 1 year Program</li>
                </ul>
            </div>
            
            <div class="mt-4">
                <a class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#registerCuteProgram">Register</a>
            </div><br /><br />
            
            
        </div>
    </div>
    
    
            
    @include('front.layouts.register')

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