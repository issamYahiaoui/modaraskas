@extends('front_layout.master')

@section('css')

    <style>
        .card.login-card{
            position: relative;
            margin-top: -40%;
            padding:0 ;
        }

        .fragment-1{
            display: flex;
            flex-direction: column;
            min-height: 400px;
            padding: 3%;
            background-color:rgb(63, 81, 181);

        }
        .fragment-2{
            display: block;
            padding : 3%;
            min-height: 400px;

        }
        .text-container{
            color: white ;
        }

        .tab-vertical {
            border-right: 1px solid  #f1f1f1 !important;
        }
        .tab-vertical li:hover {
            background-color:rgb(63, 81, 181);
            width : 100% ;
            height : 100% ;
        }
        .tab-vertical li {
            width : 100% ;
            height : 100% ;
        }

        .tab-vertical a:hover {
            color: #ffffff;
        }

        .tab-vertical a {
            color: #000;

        }
        .tab-vertical .nav-item .nav-link.active{
            background-color:rgb(63, 81, 181);
            width : 100%  !important;
            color: #ffffff;
        }
        .md-form select {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #bdbdbd !important;
        }
    </style>
@endsection
@section('content')
    {{app()->setLocale('en')}}

    @include('front.home.sections.header-navbarless')
    <div class="container">
        <div class="card login-card">
            <div class="row">
                <div class="col-md-6 fragment-1">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class=" ">
                                <img src="{{asset('landingpage/images/logo.png')}}" alt="brand" class="">
                                <br> <br>
                                <div class="text-container text-center">
                                    <h1>{{__('lang.frontTitle')}}</h1>
                                    <h5>This is a private space for the admin</h5>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 fragment-2 ">
                    <div class="row" style="padding: 20px;">
                        <form method="POST" action="{{ route('login') }}" id="loginform" style="padding: 5px 60px 60px 60px; width: 100%;">
                            {!! csrf_field() !!}
                            <h1 class="h4 text-center mb-4" style="color : rgb(63, 81, 181) ; font-weight: bold; font-size: 25px">{{__('lang.signin')}}</h1>

                            <div class="">
                                <input type="email"  name="login" id="defaultFormLoginEmailEx" class="form-control"
                                       placeholder="Email"
                                >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="">
                                <!-- Default input password -->
                                <input type="password" name="password" id="defaultFormLoginPasswordEx" class="form-control"
                                       placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                @endif
                            </div>


                            <div class="text-center mt-4">
                                <button class="btn btn-indigo" type="submit">Login</button>


                            </div>
                        </form>
                        <!-- Default form login -->

                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
@endsection
