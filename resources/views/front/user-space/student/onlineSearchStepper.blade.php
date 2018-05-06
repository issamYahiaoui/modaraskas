@extends('front_layout.default')

@section('css')

    <style>
        .side-card{
            margin-right: 1%;
            margin-left: 1%;
        }
        .main-card{
            margin-right: 1%;
            margin-left: 1%;
        }
    </style>
@endsection
@section('content')
    <div class="" style="padding : 5px">
        <div class="row">
            <div class="col-md-4 side-card" >
                <location></location>
            </div>
            <div class="col-md-7 main-card ">
                <div class="row ">
                    <search-filter :online="true"></search-filter>
                </div>
                <div class="row ">
                    <result-list></result-list>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection


