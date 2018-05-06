
@extends('front_layout.master')
@section('css')
    <style>

    </style>

    @endsection
@section('content')


    <header style="">
        @include('front.home.sections.navbar')
        <div class=""style="background-color: rgb(255, 255, 255);">

            <div class="view jarallax" id="particles-js" data-jarallax='{"speed": 0.2}'  >
                <!-- Mask & flexbox options-->
                <div class="mask  d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="container">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 white-text text-center">
                                <h1 class="display-3 mb-0 pt-md-3 pt-3 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">{{__('lang.modaras')}}
                                    <a class="indigo-text font-weight-bold">{{__('lang.kas')}}</a>
                                </h1>
                                <h2 class=" pt-md-3 pt-sm-2 pt-3 pb-md-3 pb-sm-3 pb-3 white-text  wow fadeInDown" data-wow-delay="0.3s">{{__('lang.textHeader')}}</h2>
                                <div class="wow  fadeInDown row" data-wow-delay="0.3s">
                                    <div class="col-md-12">
                                        <a href="{{url('/signup')}}" class="btn blue-btn ">{{__('lang.startStudent')}}</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{url('/signup')}}" class="btn white-btn ">{{__('lang.startTeacher')}}</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{url('/signup')}}" class="btn white-btn ">{{__('lang.startParent')}}</a>
                                    </div>

                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->

            </div>
            <!-- Full Page Intro -->
            @include('front.home.sections.social')

        </div>
    </header>



    <div class="container" style="margin-top: 5%">
        <div class="card landing-content" style="padding: 3%;">
            {{--        @include('front.home.sections.subjects')--}}
            @include('front.home.sections.teachers')
            {{--        @include('front.home.sections.testimonials')--}}

        </div>

    </div>

@endsection
@section('js')
    <script>

        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', '{{asset('landingpage/particlesjs-config.json')}}', function() {
            console.log('callback - particles.js config loaded');
        });

    </script>
@endsection
