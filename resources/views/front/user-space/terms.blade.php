@extends('admin_layout.master')
@section('content')

    <div class="container" style="padding: 5%">
        <div class="fix-width demo-boxes white-box">
            <div class="row justify-content-center">

                <h3>{{$title}}</h3>

            </div>
            <div class="row justify-content-center">


                <div class="row">
                    @if(auth()->user()->isTeacher())
                            @if(app()->getLocale() == 'ar')
                                {!! $settings->ar_teacher_terms !!}

                            @else
                                {!! $settings->en_teacher_terms !!}
                            @endif
                    @elseif(auth()->user()->isStudent())

                            @if(app()->getLocale() == 'ar')

                                {!! $settings->ar_student_terms !!}
                            @else
                                {!! $settings->en_student_terms !!}
                            @endif
                    @elseif(auth()->user()->isParent())
                            @if(app()->getLocale() == 'ar')
                                {!! $settings->ar_parent_terms !!}
                            @else
                                {!! $settings->en_parent_terms !!}
                            @endif
                     @endif

                </div>


            </div>
        </div>
    </div>



@endsection


@section('css')

@endsection

@section('js')

@endsection
