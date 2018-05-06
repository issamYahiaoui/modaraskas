<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="{{__('lang.frontTitle')}}">
    <meta name="author" content="">
    <title>Laravel Vue Task App</title>
    <!-- CSRF Stuff -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    <meta name="keyword"
          content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../demos/plugins/images/favicon.png">
    <title>{{__('lang.frontTitle')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="{{__('lang.frontDescription')}}">
    <meta name="author" content="">
    <meta name="keyword"
          content="إستقدام,عمالة,خادمة,خدامات,مهندس,مبرية,سائق,طبيب,مكاتب الإستقدام">
    <link rel="icon" type="image/png" sizes="16x16" href="../demos/plugins/images/favicon.png">
    <title>{{__('lang.frontTitle')}}</title>
    <!-- Font Awesome -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb-theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb-theme/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('mdb-theme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('social/css/hexagons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('select/dist/css/selecty.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @if(app()->getLocale()==='ar')
        {{--<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>--}}


        <style>
            nav, body, label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, i, span, option, button {
                /*font-family: 'DroidArabicKufiRegular' !important;*/
                font-family: 'Roboto', sans-serif;

            }

            body {
                direction: rtl;
            }
        </style>
    @else

        <style>
            nav, body, label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, i, span, option, button {
                font-family: 'Roboto';
                /*font-family: 'Amiri', serif;*/
            }
            body {
                direction: ltr;
            }
        </style>
    @endif

    <style>
        @media (min-width: 1200px){
            .container.default{
                max-width: 1250px !important;
            }
        }


        .card.stepper-card{
            position: relative;
            margin-top: -60px;
            min-height: 800px;
            padding: 3%;
            border-radius: unset;

        }
        body{
            background: #f5f5f5 !important;
        }

        .btn.btn-info.bmd-btn-fab, .btn.btn-info[disabled].bmd-btn-fab {
            background: #0091ea;
            color: #fff;
            border: none;
            margin-right: -2%;
            margin-top: -2px;
        }
        .bmd-btn-fab {
            position: absolute;
            top : 0;
            bottom: 0;
            right: 0;
            padding: 0;
            border-radius: 50%;

            -webkit-transform: translate3d(-55px, -25px, 0);
            /* transform: translate3d(-55px, -25px, 0); */
            z-index: 2;
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        }
        .btn.bmd-btn-fab, .bmd-btn-fab.custom-file-control::before {
            width: 3.5rem;
            min-width: 3.5rem;
            height: 3.5rem;
            box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.26);
        }
        .fab.dropdown-menu{
            max-width: 18%;
            margin-top: -2%;
            margin-right: 14%;
            border-radius: unset;
            text-align:initial;
        }


    </style>

    {{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons"--}}
          {{--rel="stylesheet">--}}
    @yield('css')
</head>

<body >
<div id="app">

    @include('front.home.sections.navbar')
    @include('front.home.sections.jumbtron')


    <div class="container default justify-content-center">
        <div class="card stepper-card animated pulse">

            <button class=" animated   btn btn-raised btn-info bmd-btn-fab  waves-effect waves-light" data-toggle="dropdown" ><i class="fa fa-bars"></i>
            </button>
            <div class="dropdown ">

                    <!--Trigger-->
                    {{--<button class="btn btn-raised btn-info bmd-btn-fab  waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="material-icons">menu</i></button>--}}
                    <!--Menu-->
                    <div class="fab dropdown-menu dropdown-primary" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 45px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>

                    </div>
                </div>
            @yield('content')
        </div>
    </div>
</div>



@include('front.home.sections.footer')
<!-- SCRIPTS -->
</div>
<script src="/js/lang.js"></script>

<script>


    var urlBase = '{{url('/')}}';
    var _token = '{{csrf_token()}}';
</script>
<!-- JQuery -->
<script type="text/javascript" src="{{asset('mdb-theme/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb-theme/js/popper.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('mdb-theme/js/tether.js')}}"></script>--}}
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb-theme/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb-theme/js/mdb.min.js')}}"></script>

<script src="{{asset('js/LanguageSwitcher.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('landingpage/particles.js')}}"></script>
<script src="{{asset('social/js/hexagons.min.js')}}"></script>
<script src="{{asset('select/dist/js/selecty.min.js')}}"></script>

<script>

    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', '{{asset('landingpage/particlesjs-config.json')}}', function() {
        console.log('callback - particles.js config loaded');
    });

</script>

@yield('js')
</body>

</html>
