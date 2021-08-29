@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4 space-bottom-2 space-bottom-lg-3 overflow-hidden">
            <div class="w-lg-80 mx-lg-auto">
                <div class="card">
                    <div class="card-header position-relative d-block bg-primary space-1 space-md-2 p-4 px-md-7 px-md-9">
                        <h1 class="text-white">Refunds and Cancellation Policy</h1>
                        <figure class="position-absolute right-0 bottom-0 left-0 mb-n1">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 1920 100.1" width="100%" height="32">
                                <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
                            </svg>
                        </figure>
                    </div>

                    <div class="card-body p-4 p-md-9">
                        
                        <div class="mb-7">

                            <p>
                                Any cancellations, returns or exchange are governed by this policy ("Return Policy"). Unfortunately, currently we do not entertain any claims of refunds or cancellation.
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">1. Cancellations</h2>
                            </div>
                            <p>
                                Programs enrolled cannot be canceled for the duration for which the payment has been made. Customers can cancel the Program and use of the services on this website before the payment of the next installment.
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">2. Refunds</h2>
                            </div>

                            <p>
                                In a rare case of refunds being approved, then the refund will be processed and a credit will automatically be applied to your credit card or original method of payment, within 15 days.
                            </p>
                            <p>
                                In case of any delays or assistance, please contact us at hello@21kclass.com
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer-commerce')


@endsection

@section('script')
@endsection
