<div class="mobile-view">
    <div class="white-box card " style="width: 80%; height: 80%;min-height: 500px; max-height: 500px;">
        <div class="row" >
            <h3 class="box-title">{{__('lang.account')}}</h3>
            <br> <br>
        </div>
        <div class="vtabs">
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
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control"  name="firstName"  value="{{auth()->user()->firstName}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.firstName')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control"  name="lastName"  value="{{auth()->user()->lastName}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.lastName')}}</label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control"  name="mobile"  value="{{auth()->user()->mobile}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.mobile')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control"  name="age"  value="{{auth()->user()->age}}" required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.age')}}</label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-b-40 " >
                                    <select class="form-control p-0"  required="" id="gender" name="gender">
                                        <option value="*"></option>
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
    <div class="white-box card " style="width: 80%; height: 80%;min-height: 500px; max-height: 500px;">
        <div class="row" >
            <h3 class="box-title">{{__('lang.pwd')}}</h3>
            <br> <br>
        </div>
        <div class="vtabs">
            {{--password tab--}}

            <div id="pwd" class="tab-pane " aria-expanded="false">
                <div class="">

                    {!! Form::open(["url"=>"password",'class'=>'floating-labels  form-horizontal']) !!}
                    {!! csrf_field() !!}

                    <div class="form-body ">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control"  name="password"   required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.password')}}</label>
                                </div>

                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group  m-b-40">
                                    <input type="text" class="form-control"  name="new_password"  required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.new_password')}}</label>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control"  name="new_password_confirmation"   required=""><span class="highlight"></span> <span class="bar"></span>
                                    <label for="">{{__('lang.new_password_confirmation')}}</label>
                                </div>
                            </div>
                        </div>



                        <div class="row justify-content-center">
                            <div class="">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @if(auth()->user()->isStudent())
    <div class="white-box card " style="width: 80%; height: 80%;min-height: 500px; max-height: 500px;">
        <div class="row" >
            <h3 class="box-title">{{__('lang.school-info')}}</h3>
            <br> <br>
        </div>
        <div class="vtabs">
            {{--school info tab --}}
            <div id="school-info" class="tab-pane" aria-expanded="false">
                <div class="">
                    {!! Form::open(["url"=>"student/".auth()->user()->id."/school-info","method"=> "post",'class'=>'floating-labels  form-horizontal']) !!}
                    {!! csrf_field() !!}

                    <div class="form-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" id="school" name="school"   required=""><span class="highlight"></span> <span class="bar"></span>
                                    <span class="highlight"></span> <span class="bar"></span>
                                    <label for="school">{{__('lang.school')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="schoolStage" required="">
                                        @foreach(\App\SchoolStage::all() as $schoolStage)
                                            <option  value="{{$schoolStage->en_name}}" id="{{$schoolStage->en_name}}">
                                                @if(app()->getLocale() =='ar')
                                                    {{$schoolStage->ar_name}}
                                                @else
                                                    {{$schoolStage->en_name}}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select><span class="highlight"></span> <span class="bar"></span>
                                    <label for="schoolstage">{{__('lang.schoolStage')}}</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-b-40" id="highSchoolStage">
                                    <select class="form-control p-0"  required="">
                                        @foreach(\App\HighSchoolStage::all() as $schoolStage)
                                            <option  value="{{$schoolStage->en_name}}" >
                                                @if(app()->getLocale() =='ar')
                                                    {{$schoolStage->ar_name}}
                                                @else
                                                    {{$schoolStage->en_name}}
                                                @endif
                                            </option>
                                        @endforeach

                                    </select><span class="highlight"></span> <span class="bar"></span>
                                    <label for="highSchoolStage">{{__('lang.highSchoolStage')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-b-40" id="teachingType">
                                    <select class="form-control p-0"  required="">
                                        @foreach(\App\TeachingType::all() as $teachingType)
                                            <option  value="{{$teachingType->en_name}}" id="{{$teachingType->en_name}}">
                                                @if(app()->getLocale() =='ar')
                                                    {{$teachingType->ar_name}}
                                                @else
                                                    {{$teachingType->en_name}}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select><span class="highlight"></span> <span class="bar"></span>
                                    <label for="teachingType">{{__('lang.teachingType')}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-b-40 " id="specialization">
                                    <select class="form-control p-0"  required="">
                                        @foreach(\App\Specialization::all() as $specialization)
                                            <option  value="{{$specialization->en_name}}" id="{{$specialization->en_name}}">
                                                @if(app()->getLocale() =='ar')
                                                    {{$specialization->ar_name}}
                                                @else
                                                    {{$specialization->en_name}}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select><span class="highlight"></span> <span class="bar"></span>
                                    <label for="specialization">{{__('lang.specialization')}}</label>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <div class="">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>

                                </div>
                            </div>
                        </div>
                    </div>



                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
    @endif
    @if(auth()->user()->isTeacher())

        <div class="white-box card " style="width: 80%; height: 80%;min-height: 500px; max-height: 500px;">
            <div class="row" >
                <h3 class="box-title">{{__('lang.teaching-info')}}</h3>
                <br> <br>
            </div>
            <div class="vtabs">
                <div id="teaching-info" class="tab-pane" aria-expanded="false">
                    <div class="">
                        {!! Form::open(["url"=>"user/".auth()->user()->id."/school-info",'class'=>'floating-labels  form-horizontal']) !!}
                        {!! csrf_field() !!}

                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="school" name="school"   required=""><span class="highlight"></span> <span class="bar"></span>
                                        <span class="highlight"></span> <span class="bar"></span>
                                        <label for="school">{{__('lang.school')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-b-40">
                                        <select class="form-control p-0" id="schoolStage" required="">
                                            <option></option>
                                            <option>Primary</option>
                                            <option>Medium</option>
                                            <option  value="high" id="high" >High</option>
                                            <option value="international"  id="international" >international</option>

                                        </select><span class="highlight"></span> <span class="bar"></span>
                                        <label for="schoolstage">{{__('lang.schoolStage')}}</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-b-40" id="highSchoolStage">
                                        <select class="form-control p-0"  required="">
                                            <option></option>
                                            <option>Primary</option>
                                            <option>Medium</option>
                                            <option>high</option>

                                        </select><span class="highlight"></span> <span class="bar"></span>
                                        <label for="highSchoolStage">{{__('lang.highSchoolStage')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-b-40" id="teachingType">
                                        <select class="form-control p-0"  required="">
                                            <option></option>
                                            <option>algerian</option>
                                            <option>american</option>

                                        </select><span class="highlight"></span> <span class="bar"></span>
                                        <label for="teachingType">{{__('lang.teachingType')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-b-40 " id="specialization">
                                        <select class="form-control p-0"  required="">
                                            <option></option>
                                            <option>algerian</option>
                                            <option>american</option>

                                        </select><span class="highlight"></span> <span class="bar"></span>
                                        <label for="specialization">{{__('lang.specialization')}}</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-center">
                                <div class="">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>

                                    </div>
                                </div>
                            </div>
                        </div>



                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    @endif
    <div class="white-box card " style="width: 80%; height: 80%;min-height: 500px; max-height: 500px;">
        <div class="row" >
            <h3 class="box-title">{{__('lang.avatar')}}</h3>
            <br> <br>
        </div>
        <div class="vtabs">
            {{--avatar tab --}}

            <div id="avatar" class="tab-pane " aria-expanded="false">
                {!! Form::open(["url"=>"/change_avatar",'files'=>'true','method'=>'POST']) !!}
                {!! csrf_field() !!}
                <div class="">

                    <div class="form-group">
                        <img class="img-responsive img-rounded center-block text-center" style="height: 250px;"
                             id="avatar-img"
                             src="{{asset('avatar/'.auth()->user()->avatar)}}" alt="">
                        <div class="file-field">
                            <br>
                            <div class="row justify-content-center">
                                <button type="button" id="choose" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-link"></i> </button>
                                <input id="file-input" name="img" type="file" >
                            </div>
                        </div>

                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-info waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-check"></i></span>{{__('lang.save')}}</button>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="white-box card " style="width: 80%; height: 80%;min-height: 500px; max-height: 500px;">
        <div class="row" >
            <h3 class="box-title">{{__('lang.location')}}</h3>
            <br> <br>
        </div>
        <div class="vtabs">
            {{--location tab--}}
            <div id="location" class="tab-pane" aria-expanded="false">
                <div class="">
                    {!! Form::open(["url"=>"user/".auth()->user()->id."/location", "method"=>"post","id"=>"location_form_mobile" ,'class'=>'floating-labels  form-horizontal']) !!}
                    {!! csrf_field() !!}

                    <div class="form-body">
                        <h5>{{__('lang.chooseMsg')}}</h5>
                        <br>
                        <input type="text" id="lat" name="lat" hidden>
                        <input type="text"  id="lng" name="lng" hidden>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" id="country" name="country"   required=""><span class="highlight"></span> <span class="bar"></span>
                                    <span class="highlight"></span> <span class="bar"></span>
                                    <label for="input6">{{__('lang.country')}}</label>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" id="city" name="city"   required=""><span class="highlight"></span> <span class="bar"></span>
                                    <span class="highlight"></span> <span class="bar"></span>
                                    <label for="input6">{{__('lang.city')}}</label>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row justify-content-center">
                        <div class="">
                            <div class="col-md-12 text-center">
                                <button id="post_location_form_mobile" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>

                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}


                </div>

            </div>
        </div>
    </div>
</div>