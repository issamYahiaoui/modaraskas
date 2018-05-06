@extends('admin_layout.master')

@section('content')
    <div class="container ">
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
                    <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i class="fa fa-minus" ></i></span>
                </div>
            @endif

            <div class="col-md-12 ">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                {{__('settings.staticPages')}}
                            </h2>
                        </div>

                        <form action="{{url('savePrincipalSettings/'.$settings->id)}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}



                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h3>
                                        {{__('settings.office_en_name')}}
                                    </h3>
                                    <input required="true" value="{{$settings->office_en_name}}" name="office_en_name" type="text" value="{{old('office_en_name')}}"
                                           class="form-control">
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <h4>
                                        {{__('settings.office_ar_name')}}
                                    </h4>

                                    <input required="true" value="{{$settings->office_ar_name}}" name="office_ar_name" type="text" value="{{old('office_ar_name')}}"
                                           class="form-control">
                                    <br>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h4>
                                        {{__('settings.phone')}}
                                    </h4>
                                    <input required="true" value="{{$settings->phone}}" name="phone" type="tel" value="{{old('phone')}}"
                                           class="form-control">
                                    <br>
                                </div>
                                <div class="col-md-6 ">
                                    <h4>
                                        {{__('settings.website_email')}}
                                    </h4>
                                    <input required="true"  value="{{$settings->website_email}}" name="website_email" type="email"
                                           class="form-control">
                                    <br>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h3>
                                        {{__('settings.ar_address')}}
                                    </h3>
                                    <input required="true"  value="{{$settings->ar_address}}" name="ar_address" type="tel" value="{{old('ar_address')}}"
                                           class="form-control">
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <h4>
                                        {{__('settings.en_address')}}
                                    </h4>

                                    <input required="true"  value="{{$settings->en_address}}" name="en_address" type="text" value="{{old('en_address')}}"
                                           class="form-control">
                                    <br>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="col-md-6">
                                    <h4>{{__('settings.logo')}}</h4>
                                    <input type="file"  value="{{$settings->logo}}" name="logo" class="dropify" />
                                </div>

                            </div>


                            <div class="col-md-12">
                                <div class="col-md-12 text-center">
                                    <br>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 center-">
                                        {{__('dashboard.submit')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>


@endsection

@section('css')
    <style>
        .custom-control-indicator {
            width : 20px ;
            height: 20px;
            top : 1.25rem;
            padding : 5px auto ;
        }
        .custom-control {
            padding-right : 30px !important;
            padding-left : 30px  !important ;
        }
    </style>
    <link rel="stylesheet" href="{{asset('dashboard/plugins/bower_components/dropify/dist/css/dropify.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('dashboard/plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify({
                @if(app()->getLocale()=='ar')
                messages: {
                    default: 'لإختيار ملف إضغط هنا',
                    replace: 'لإستبدال الملف إضغط هنا',
                    remove: 'حذف',
                    error: 'عذرا  !! الملف الذي إخترته كبير جدا !!'
                }
                @endif
            });

        });
    </script>

@endsection



