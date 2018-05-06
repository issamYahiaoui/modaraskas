@extends('admin_layout.master')
@section('content')

    <div class="container" style="padding: 5%">
        <div class="fix-width demo-boxes">
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
                @if(Session::has('successPassword'))
                    <div id="alert" class="alert alert-success text-center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fa  fa-minus"></i></span>
                        </button>
                        <h3 class="text-center">
                            {{Session::get('successPassword')}}
                        </h3>
                    </div>
                @endif
                @if(Session::has('failedPassword'))
                    <div id="alert" class="alert alert-danger text-center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fa  fa-minus"></i></span>
                        </button>
                        <h3 class="text-center">
                            {{Session::get('failedPassword')}}
                        </h3>
                    </div>
                @endif


                <div class=" web-view white-box card "
                     style="width: 80%; height: 80%;min-height: 500px; max-height: 700px;">
                    <div class="row">
                        <h3 class="box-title">{{__('lang.profile')}}</h3>
                        <br> <br>
                    </div>
                    <div class="vtabs">
                        <ul class="nav tabs-vertical">
                            <li class="tab nav-item active" aria-expanded="false">
                                <a data-toggle="tab" class="nav-link" id="account-tab" href="#account-info"
                                   aria-expanded="false"> <span><i class="ti-user"></i> {{__('lang.account')}}</span>

                                </a>
                            </li>
                            @if(!auth()->user()->isAdmin())
                                <li class="tab nav-item">
                                    <a data-toggle="tab" class="nav-link" id="location-tab" href="#location"
                                       aria-expanded="false"> <span><i
                                                    class=" ti-location-arrow"></i> {{__('lang.location')}} </span></a>
                                </li>
                            @endif
                            @if(auth()->user()->isStudent())
                                <li class="tab nav-item">
                                    <a data-toggle="tab" class="nav-link" id="school-info-tab" href="#school-info"
                                       aria-expanded="false"> <span><i class=" ti-bag"></i> {{__('lang.school-info')}} </span></a>
                                </li>
                            @endif
                            @if(auth()->user()->isTeacher())
                                <li class="tab nav-item">
                                    <a data-toggle="tab" class="nav-link" id="teaching-info-tab" href="#teaching-info"
                                       aria-expanded="false"> <span><i
                                                    class=" ti-book"></i> {{__('lang.teaching-info')}} </span></a>
                                </li>
                                <li class="tab nav-item">
                                    <a data-toggle="tab" class="nav-link" id="teaching-info2-tab" href="#teaching-info2"
                                       aria-expanded="false"> <span><i
                                                    class=" fa fa-cog"></i> {{__('lang.teaching-info2')}} </span></a>
                                </li>
                                <li class="tab nav-item">
                                    <a data-toggle="tab" class="nav-link" id="teaching-info3-tab" href="#teaching-info3"
                                       aria-expanded="false"> <span><i
                                                    class=" ti-calendar"></i> {{__('lang.teaching-info3')}} </span></a>
                                </li>
                            @endif
                            <li class="tab nav-item">
                                <a aria-expanded="true" class="nav-link " id="avatar-tab" data-toggle="tab"
                                   href="#avatar"> <span><i class="ti-image"></i> {{__('lang.avatar')}}</span></a>
                            </li>
                            <li class="tab nav-item">
                                <a aria-expanded="true" class="nav-link " id="pwd-tab" data-toggle="tab" href="#pwd">
                                    <span><i class="ti-lock"></i> {{__('lang.pwd')}} </span></a>
                            </li>
                        </ul>
                        <div class="tab-content" style="padding: 5%">

                            {{--account tab--}}

                            <div id="account-info" class="tab-pane active" aria-expanded="false">
                                <div class="">
                                    {!! Form::open(["url"=>"user/".auth()->user()->id,'method'=>'PATCH','class'=>'floating-labels  form-horizontal']) !!}
                                    {!! csrf_field() !!}

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" name="name"
                                                           value="{{auth()->user()->name}}" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.name')}}</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group  m-b-40">
                                                    <input type="text" class="form-control" name="email"
                                                           value="{{auth()->user()->email}}" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.email')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" name="firstName"
                                                           value="{{auth()->user()->firstName}}" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.firstName')}}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" name="lastName"
                                                           value="{{auth()->user()->lastName}}" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.lastName')}}</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" name="mobile"
                                                           value="{{auth()->user()->mobile}}" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.mobile')}}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group m-b-40">
                                                    <input type="number" class="form-control" name="age"
                                                           value="{{auth()->user()->age}}" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.age')}}</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group m-b-40 ">
                                                    <select class="form-control p-0" required="" id="gender"
                                                            name="gender">
                                                        <option value="male">{{__('lang.male')}}</option>
                                                        <option value="female">{{__('lang.female')}}</option>
                                                    </select><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="gender">{{__('lang.gender')}}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-info btn-circle btn-lg"><i
                                                                class="fa fa-check"></i></button>
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

                            {{--password tab--}}

                            <div id="pwd" class="tab-pane " aria-expanded="false">
                                <div class="">

                                    {!! Form::open(["url"=>"password",'class'=>'floating-labels  form-horizontal']) !!}
                                    {!! csrf_field() !!}

                                    <div class="form-body ">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" name="password" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.password')}}</label>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="form-group  m-b-40">
                                                    <input type="text" class="form-control" name="new_password"
                                                           required=""><span class="highlight"></span> <span
                                                            class="bar"></span>
                                                    <label for="">{{__('lang.new_password')}}</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">

                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control"
                                                           name="new_password_confirmation" required=""><span
                                                            class="highlight"></span> <span class="bar"></span>
                                                    <label for="">{{__('lang.new_password_confirmation')}}</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row justify-content-center">
                                            <div class="">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-info btn-circle btn-lg"><i
                                                                class="fa fa-check"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {!! Form::close() !!}
                                </div>
                            </div>

                            {{--location tab--}}

                            <div id="location" class="tab-pane" aria-expanded="false">
                                <div class="">
                                    {!! Form::open(["url"=>"user/".auth()->user()->id."/location",'method'=>'post','id'=> 'location_form','class'=>'floating-labels  form-horizontal']) !!}
                                    {!! csrf_field() !!}

                                    <div class="form-body">
                                        <h5>{{__('lang.chooseMsg')}}</h5>
                                        <br>
                                        <input type="text" id="lat" name="lat" hidden>
                                        <input type="text" id="lng" name="lng" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" id="country" name="country"
                                                           required=""><span class="highlight"></span> <span
                                                            class="bar"></span>
                                                    <span class="highlight"></span> <span class="bar"></span>
                                                    <label for="input6">{{__('lang.country')}}</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" id="city" name="city"
                                                           required=""><span class="highlight"></span> <span
                                                            class="bar"></span>
                                                    <span class="highlight"></span> <span class="bar"></span>
                                                    <label for="input6">{{__('lang.city')}}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-info btn-circle btn-lg"><i
                                                                class="fa fa-check"></i></button>

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    {!! Form::close() !!}

                                </div>

                            </div>

                            @if(auth()->user()->isStudent())
                                {{--school info tab --}}

                                <div id="school-info" class="tab-pane" aria-expanded="false">
                                    <div class="">
                                        {!! Form::open(["url"=>"student/".auth()->user()->id."/school-info","method"=> "post",'class'=>'floating-labels  form-horizontal']) !!}
                                        {!! csrf_field() !!}

                                        <div class="form-body">

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" id="school"
                                                               @if(auth()->user()->student)
                                                                        @if(auth()->user()->student->getSchoolStageChoice()->school)
                                                                        value="{{auth()->user()->student->getSchoolStageChoice()->school}}"
                                                                       @endif
                                                                @endif
                                                               name="school" required=""><span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <span class="highlight"></span> <span class="bar"></span>
                                                        <label for="school">{{__('lang.school')}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-40">
                                                        <select class="form-control p-0" id="schoolStage" name="stage"
                                                                required="">
                                                            <option value=""></option>
                                                        @foreach(\App\SchoolStage::all() as $schoolStage)

                                                                <option value="{{$schoolStage->id}}"
                                                                        id="{{$schoolStage->en_name}}">
                                                                    @if(app()->getLocale() =='ar')
                                                                        {{$schoolStage->ar_name}}
                                                                    @else
                                                                        {{$schoolStage->en_name}}
                                                                    @endif
                                                                </option>
                                                            @endforeach
                                                        </select><span class="highlight"></span> <span
                                                                class="bar"></span>
                                                        <label for="schoolStage">{{__('lang.schoolStage')}}</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-40" id="highSchoolStage">
                                                        <select class="form-control p-0" name="highSchoolStage">
                                                            <option value=""></option>
                                                            @foreach(\App\HighSchoolStage::all() as $schoolStage)
                                                                <option value="{{$schoolStage->id}}">
                                                                    @if(app()->getLocale() =='ar')
                                                                        {{$schoolStage->ar_name}}
                                                                    @else
                                                                        {{$schoolStage->en_name}}
                                                                    @endif
                                                                </option>
                                                            @endforeach

                                                        </select><span class="highlight"></span> <span
                                                                class="bar"></span>
                                                        <label for="highSchoolStage">{{__('lang.highSchoolStage')}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-40" id="teachingType">
                                                        <select class="form-control p-0" name="teachingType">
                                                            <option value=""></option>
                                                        @foreach(\App\TeachingType::all() as $teachingType)
                                                                <option value="{{$teachingType->id}}">
                                                                    @if(app()->getLocale() =='ar')
                                                                        {{$teachingType->ar_name}}
                                                                    @else
                                                                        {{$teachingType->en_name}}
                                                                    @endif
                                                                </option>
                                                            @endforeach
                                                        </select><span class="highlight"></span> <span
                                                                class="bar"></span>
                                                        <label for="teachingType">{{__('lang.teachingType')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-40 " id="specialization">
                                                        <select class="form-control p-0" name="specialization">
                                                            <option value=""></option>
                                                            @foreach(\App\Specialization::all() as $specialization)
                                                                <option value="{{$specialization->id}}">
                                                                    @if(app()->getLocale() =='ar')
                                                                        {{$specialization->ar_name}}
                                                                    @else
                                                                        {{$specialization->en_name}}
                                                                    @endif
                                                                </option>
                                                            @endforeach
                                                        </select><span class="highlight"></span> <span
                                                                class="bar"></span>
                                                        <label for="specialization">{{__('lang.specialization')}}</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-info btn-circle btn-lg"><i
                                                                    class="fa fa-check"></i></button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        {!! Form::close() !!}
                                    </div>

                                </div>
                            @endif
                            {{--teaching tab --}}
                            @if(auth()->user()->isTeacher())
                                <div id="teaching-info" class="tab-pane" aria-expanded="false">
                                    <div class="">
                                        <teaching-info></teaching-info>
                                    </div>

                                </div>
                                <div id="teaching-info2" class="tab-pane" aria-expanded="false">
                                    <div class="">
                                        <teaching-info2></teaching-info2>
                                    </div>

                                </div>
                                <div id="teaching-info3" class="tab-pane" aria-expanded="false">
                                    <div class="">
                                        <teaching-info3></teaching-info3>
                                    </div>

                                </div>
                            @endif

                            {{--avatar tab --}}

                            <div id="avatar" class="tab-pane " aria-expanded="false">
                                {!! Form::open(["url"=>"/change_avatar",'files'=>'true','method'=>'POST']) !!}
                                {!! csrf_field() !!}
                                <div class="">

                                    <div class="form-group">
                                        <img id="avatar-img" class="img-responsive img-rounded center-block text-center"
                                             style="height: 250px;"
                                             id="blah"
                                             src="{{asset('avatar/'.auth()->user()->avatar)}}" alt="">
                                        <div class="file-field">
                                            <br>
                                            <div class="row justify-content-center">
                                                <button type="button" id="choose"
                                                        class="btn btn-warning btn-circle btn-lg"><i
                                                            class="fa fa-link"></i></button>
                                                <input id="file-input" name="img" type="file" style="display: none">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-info waves-effect waves-light" type="submit"><span
                                                    class="btn-label"><i
                                                        class="fa fa-check"></i></span>{{__('lang.save')}}</button>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('front.user-space.profile-mobile')
        </div>
    </div>
    </div>


    @include('front.user-space.location')

@endsection


@section('css')

@endsection

@section('js')
    <script>


        var school_stage_id  = 0
        var high_school_stage_id =0
        var specialization_id =0
        var teaching_type_id =0
        init()
          @if(auth()->user()->student)

                 @if(auth()->user()->student->getSchoolStageChoice()->schoolStage)
                     school_stage_id ={{auth()->user()->student->getSchoolStageChoice()->schoolStage->id}}
                     if(school_stage_id == 3){
                         showHigh()
                      }
                    if(school_stage_id == 4){
                        showInternational()
                    }
                @endif

                @if(auth()->user()->student->getSchoolStageChoice()->highSchoolStage)
                     high_school_stage_id = {{auth()->user()->student->getSchoolStageChoice()->highSchoolStage->id}}

                @endif

                @if(auth()->user()->student->getSchoolStageChoice()->specialization)
                     specialization_id = {{auth()->user()->student->getSchoolStageChoice()->specialization->id}}

                @endif

                @if(auth()->user()->student->getSchoolStageChoice()->teachingType)
                     teaching_type_id = {{auth()->user()->student->getSchoolStageChoice()->teachingType->id}}
                @endif


                @endif
                 $("#schoolStage").val(school_stage_id)
                 $("#highSchoolStage > select").val(high_school_stage_id)
                 $("#specialization > select").val(specialization_id)
                 $("#teachingType > select").val(teaching_type_id)

        $('#choose').on('click', function () {
            console.log('clicked')
            $('#file-input').click()
        })
        var tab = ['#location-tab', '#account-tab', '#avatar-tab', '#school-info-tab', "#teaching-info-tab", '#pwd-tab']
        tab.forEach(function (id) {
            console.log('id', id)
            $(id).on('click', function () {
                if (id == '#location-tab') {
                    showMap()
                } else {
                    console.log('clicked', id)
                    hideMap()
                }
            })
        })



        var selectedItem = $("#schoolStage ").on('click', function () {
            console.log($("#schoolStage").val())
            var selectedItem = $("#schoolStage").val()
            if (selectedItem == 3) {
                console.log('high selected')
                showHigh()
            }
            if (selectedItem == 4) {
                console.log('international selected')
               showInternational()

            }

        });
        function showHigh(){

            $('#specialization').show()
            $('#highSchoolStage').hide()
            $('#teachingType').hide()
        }
        function showInternational(){
            $('#highSchoolStage').show()
            $('#teachingType').show()
            $('#specialization').hide()
        }
        function init() {
            $('#specialization').hide()
            $('#highSchoolStage').hide()
            $('#teachingType').hide()
        }

        function hideMap() {

            $('#location-map').addClass('hidden')
            $('#pac-input').addClass('hidden')
        }

        function showMap() {
            $('#location-map').removeClass('hidden')
            setTimeout(function () {
                $('#pac-input').removeClass('hidden')

            }, 3000)
        }


        $('#file-input').on('change', function () {
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar-img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
            else {
                $('#img').attr('src', '/avatar/default-avatar.png');
            }

        })

    </script>
@endsection
