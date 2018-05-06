@extends('front_layout.profile')


@section('content')
    <div class="container default justify-content-center">
        <div class="card personal-info animated pulse">
            <div class="" style="padding : 5px">
                <div class="avatar-container">
                    <div class="avatar text-center ">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle" alt="First sample avatar image">
                    </div>
                    <h2 class="headline mb-0">
                        {{ $teacher->name}}
                    </h2>
                </div>
                <personal-info-card></personal-info-card>
            </div>
        </div>

        <div class="card educational-info animated pulse ">
            <educational-info-card></educational-info-card>
        </div>
        <div class="card location-info animated pulse ">
            <location-card></location-card>
        </div>
    </div>

@endsection
@section('css')

    <style>

        @media (min-width: 1200px){
            .card{
                margin: 5%;

            }
            .container.default{
                max-width: 800px;
            }
            .personal-info{
                min-height: 400px !important;

            }
            .educational-info{
                min-height: 250px !important;
                margin-bottom : 20% !important;
            }
            .location-info{
                min-height: 400px !important;
                padding: 0px;

            }

        }

        @media (max-width: 700px) {
            .card{
                margin: 10%;

            }
        }


        .card.personal-info{
            position: relative;
            margin-top: -60px;
            min-height: 400px;
            padding: 3%;
            border-radius: unset;

        }
      .avatar-container{
            margin-top: -20%;
            text-align: center;
      }
        .avatar>img{
            height : 200px !important ;
            margin-bottom : 5px;
        }
    </style>
@endsection
@section('js')
@endsection


