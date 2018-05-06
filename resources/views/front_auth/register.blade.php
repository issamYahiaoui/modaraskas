@extends('front_layout.master')

@section('css')

    <style>
        .card.login-card{
            position: relative;
            margin-top: -30%;
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
            font-size: 15px;
            border-bottom: 1px solid #bdbdbd !important;
        }
    </style>
@endsection
@section('content')
    {{app()->setLocale('en')}}

    @include('front.home.sections.header')
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
                                    <h5>{{__('lang.modaraskasDescription')}}</h5>



                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 fragment-2 ">
                    <div class="row" style="padding: 20px;">
                        <form method="POST" action="{{ route('register') }}" style="padding: 5px 60px 60px 60px; width: 100%;">
                            {!! csrf_field() !!}
                            <h1 class="h4 text-center mb-4" style="color : rgb(63, 81, 181) ; font-weight: bold; font-size: 25px">{{__('lang.signup')}}</h1>
                            <div class="md-form">
                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="type">
                                            {{__('lang.joinMsg')}}
                                        </label>
                                        <br> <br>
                                        <select name="type" id="type"  class="form-control">
                                            <option value=""></option>
                                            <option value="student" selected>{{__('lang.student')}}</option>
                                            <option value="teacher">{{__('lang.teacher')}}</option>
                                            <option value="parent">{{__('lang.parent')}}</option>
                                        </select>

                                        @if ($errors->has('type'))
                                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!-- Default input email -->
                            <div class="">
                                <input type="text"  name="name" id="defaultFormLoginEmailEx" class="form-control"
                                       placeholder="Name"
                                >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="">
                                <input type="email"  name="email" id="defaultFormLoginEmailEx" class="form-control"
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
                            <div class="">
                                <!-- Default input password -->
                                <input type="password" name="password_confirmation" id="defaultFormLoginPasswordEx" class="form-control"
                                       placeholder=" Confirm Password">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                                @endif
                            </div>


                            <div class="text-center mt-4">
                                <button class="btn btn-indigo" type="submit">{{__('lang.register')}}</button>

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
    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>
@endsection
