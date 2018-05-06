@extends('front_layout.master')

@section('css')

    <style>
        .card.login-card{
            position: relative;
            margin-top: -400px;
            padding:0 ;
            min-height: 400px;

        }

        .contact{
            background-color: #103f6d;
            height: 100%;
            color : #FFFFFF ;
        }
        .card .card-body h3 {
            margin-bottom: 0;
            padding: .7rem;
        }
        section .contact .contact-icons li i.fa {
            font-size: 1.5rem;
        }

        section .contact .contact-icons li i {
            float: left;
            clear: both;
            margin-right: 1rem;
        }
        section .contact i {
            color: #6b89a5;
        }
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        section .form form .btn-floating {
            float: right;
            position: relative;
            bottom: 3rem;
            margin-right: 0;
        }
        a:not([href]):not([tabindex]), a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }
        .btn-floating.btn-lg {
            width: 61.1px;
            height: 61.1px;
        }
        a.waves-effect, a.waves-light {
            display: inline-block;
        }


    </style>
@endsection
@section('content')
    @include('front.home.sections.header')
    <div class="container">
        <div class="">
            <div class="row">

                <!--Section: Contact v.3-->
                <section class="py-5">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <!--Form with header-->
                            <div class="card login-card">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card-body form">
                                            <!--Header-->
                                            <div class="formHeader mb-1 pt-3">
                                                <h3>
                                                    <i class="fa fa-envelope"></i> Write to us:</h3>
                                            </div>

                                            <br>

                                            <form>
                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <input type="text" id="form-contact-name" class="form-control">
                                                            <label for="form-contact-name" class="">{{__('lang.name')}}</label>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <input type="text" id="form-contact-email" class="form-control">
                                                            <label for="form-contact-email" class="">{{__('lang.email')}}</label>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->

                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <input type="text" id="form-contact-phone" class="form-control">
                                                            <label for="form-contact-phone" class="">{{__('lang.phone')}}</label>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <input type="text" id="form-contact-company" class="form-control">
                                                            <label for="form-contact-company" class="">{{__('lang.company')}}</label>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->

                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-12">

                                                        <div class="md-form">
                                                            <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                                            <label for="form-contact-message">Your message</label>
                                                            <a class="btn-floating btn-lg blue">
                                                                <i class="fa fa-send-o"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card-body contact text-center">
                                            <div class="mb-5">
                                                <h3>Contact information</h3>
                                            </div>

                                            <ul class="contact-icons list-unstyled ml-4">
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    <p>San Francisco, CA 94126, USA</p>
                                                </li>

                                                <li>
                                                    <i class="fa fa-phone"></i>
                                                    <p>+ 01 234 567 89</p>
                                                </li>

                                                <li>
                                                    <i class="fa fa-envelope"></i>
                                                    <p>contact@example.com</p>
                                                </li>
                                            </ul>

                                            <hr class="hr-light mb-4 mt-4">

                                            <ul class="list-inline text-center list-unstyled">
                                                <li class="list-inline-item">
                                                    <a class="icons-sm tw-ic">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="icons-sm li-ic">
                                                        <i class="fa fa-linkedin"> </i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="icons-sm ins-ic">
                                                        <i class="fa fa-instagram"> </i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Form with header-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Contact v.3-->


            </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection


