@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4 space-bottom-2 space-bottom-lg-3 overflow-hidden">
            <div class="w-lg-80 mx-lg-auto">
                <div class="card">
                    <div class="card-header position-relative d-block bg-primary space-1 space-md-2 p-4 px-md-7 px-md-9">
                        <h1 class="text-white">Shipping & Delivery Policy</h1>
                        <p class="text-white-70">Contact us at hello@21kclass.com</p>
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
                                Any shipping and delivery matters of the Student Learning Kit and such other materials are governed by this policy ("Shipping & Delivery Policy")
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">1. Delivery charges</h2>
                            </div>
                            <p>
                                You will be shown the delivery charges due for each order prior to making a payment. We work with logistics providers to provide you with the best possible rates, where applicable.
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">2. Dispatch time</h2>
                            </div>

                            <p>
                                Please allow 2-5 working days post your placement of order for the shipment to be dispatched.
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">3. Delivery time</h2>
                            </div>

                            <p>
                                The delivery time is approximately 5 working days for domestic shipments from the date of shipment within India. Deliveries will be made to the address provided by you at the time of the order.
                            </p>
                            <p>
                                Though we endeavour to ensure that the shipment reaches you in time, there may be delays due to unforeseen circumstances.
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">4. Damaged / Defective goods</h2>
                            </div>

                            <p>
                                If the goods you receive are damaged or defective or not matching your order, you will be required to intimate us about such cases within 24 hours of delivery. Please refer to our Returns & Exchange policy for more details.
                            </p>
                        </div>
                        
                        <div class="mb-7">
                            <div class="mb-3">
                                <h2 class="h3">5. Product Returns</h2>
                            </div>

                            <p>
                                The shipping costs incurred for the return of any item(s) will be borne you. Please refer to our Returns & Exchange policy for more details.
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
