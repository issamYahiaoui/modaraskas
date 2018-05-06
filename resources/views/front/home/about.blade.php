@extends('front_layout.master')

@section('css')

    <style>
        .card.login-card{
            position: relative;
            margin-top: -400px;
            padding:0 ;
            min-height: 400px;

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
            min-height: 400px;
            padding : 3%;


        }
        .text-container{
            color: white ;
        }

    </style>
@endsection
@section('content')
    @include('front.home.sections.header')
    <div class="container">
        <div class="card login-card">
            <div class="row">

            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
@endsection


