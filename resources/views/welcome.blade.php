@extends('layouts.app')

@section('content')
    {{-- Cover --}}
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center cover-bg-gray-light mt-sm-5 cover-border-radius">

        <div class="row">

            <div class="col-lg-4 row flex-column justify-content-center align-items-center">

                <div class="col-lg-5 p-2 align-self-lg-start">
                    <img src="{{ asset('img/desktop-solid.svg') }}" class="img-fluid" width="100" height="100" alt="desktop">
                </div>
                <div class="col-lg-4 p-2 align-self-lg-center">
                    <img src="{{ asset('img/laptop-solid.svg') }}" class="img-fluid" width="100" height="100" alt="laptop">
                </div>
                <div class="col-lg-3 p-2 align-self-lg-end">
                    <img src="{{ asset('img/mobile-solid.svg') }}" class="img-fluid" width="100" height="100" alt="mobile">
                </div>

            </div>

            <div class="col-md-5">

                <div class="col-md-12 p-lg-12 mx-auto my-5 px-5">
                    <h1 class="display-4 dev-creative-solutions-font">Dev Creative Solutions</h1>
                    <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with
                        this
                        example based on Apple's marketing pages. </p>
                    <a class="btn btn-outline-secondary" href="#">Contactanos!</a>
                </div>

            </div>
            
        </div>
        <div class="product-device shadow-sm d-none d-md-block"> </div>


    </div>



    {{-- 2 blocks --}}
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mt-0 justify-content-lg-center">
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded">
            <div class="my-3 py-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-light shadow-sm mx-auto mb-3" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded">
            <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
    </div>
@endsection
