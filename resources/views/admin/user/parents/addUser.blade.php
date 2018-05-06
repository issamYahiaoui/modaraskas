@extends('admin_layout.master')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(count($errors->all())>0)
                <div class="alert alert-danger text-center col-md-12 ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-minus"></i></span>
                    </button>
                    <ul class="list-unstyled text-center">
                        @foreach($errors->all() as $error)
                            <li class="text-center">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div id="alert" class="alert alert-success text-center col-md-12">

                    {{Session::get('success')}}
                    <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i
                                class="fa fa-minus"></i></span>
                </div>
            @endif

            <div class="row justify-content-center ">
                <div class="white-box card " style="width: 100%; height: 80%;min-height: 500px; ">
                    <div class="row" >
                        <h3 class="box-title">{{__('lang.account')}}</h3>
                        <br> <br><br> <br>
                    </div>
                    <div class="">
                        {{--account tab--}}
                        <div id="account-info" class="tab-pane active" aria-expanded="false">
                            <div class="">
                                {!! Form::open(["url"=>"user/".auth()->user()->id,'method'=>'PATCH','class'=>'floating-labels  form-horizontal']) !!}
                                {!! csrf_field() !!}

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-b-40">
                                                <input type="text" class="form-control"  name="name"  value="{{auth()->user()->name}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                                <label for="">{{__('lang.name')}}</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group  m-b-40">
                                                <input type="text" class="form-control"  name="email"  value="{{auth()->user()->email}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                                <label for="">{{__('lang.email')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="form-group  m-b-40">
                                                <input type="text" class="form-control"  name="password"  required=""><span class="highlight"></span> <span class="bar"></span>
                                                <label for="">{{__('lang.password')}}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group m-b-40">
                                                <input type="text" class="form-control"  name="password_confirmation"   required=""><span class="highlight"></span> <span class="bar"></span>
                                                <label for="">{{__('lang.new_password_confirmation')}}</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group m-b-40">
                                                <input type="text" class="form-control"  name="mobile"  value="{{auth()->user()->firstName}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                                <label for="">{{__('lang.mobile')}}</label>
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-b-40 " id="type">
                                                    <select class="form-control p-0"  required="">
                                                        <option></option>
                                                        <option>{{__('lang.admin')}}</option>
                                                        <option>{{__('lang.student')}}</option>
                                                        <option>{{__('lang.teacher')}}</option>
                                                        <option>{{__('lang.parent')}}</option>

                                                    </select><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="specialization">{{__('lang.type')}}</label>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                                                {{--<button type="submit" class="btn btn-info waves-effect waves-light m-r-10 center-">--}}
                                                {{--{{__('lang.save')}}--}}
                                                {{--</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


@endsection






