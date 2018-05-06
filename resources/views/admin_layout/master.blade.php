<!DOCTYPE html>
<html lang="en"
      @if(app()->getLocale()==='ar')
      dir="rtl"
        @endif
>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/plugins/images/favicon.png')}}">
    <title>{{$title}} - {{__('dashboard.dashboard')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    <link href="{{asset('dashboard/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css-rtl/animate.css')}}" rel="stylesheet">
    <link href="{{asset('mdb-theme/css/style.css')}}" rel="stylesheet">
    @if(app()->getLocale()==='en')

        <link href="{{asset('dashboard/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}"
              rel="stylesheet">

        <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">


    @else
        <link href="{{asset('dashboard/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css')}}"
              rel="stylesheet">

        <link href="{{asset('dashboard/css-rtl/style.css')}}" rel="stylesheet">


    @endif
    <link href="{{asset('dashboard/css/colors/blue-deep.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/sweetalert/sweetalert.css')}}" id="theme" rel="stylesheet">


    <!-- Menu CSS -->

    <link href="{{asset('dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">

    <link href="{{asset('dashboard/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/jquery-wizard-master/css/wizard.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css')}}" rel="stylesheet">
    {{----}}
    <style>  .top-left-part {
            background: rgba(120, 130, 140, 0.13) !important;
        }</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @if(app()->getLocale()==='ar')
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        <style>

            .modal {
                display: none; /* Hidden by default */
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0, 0, 0); /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            }

            .modal-content {
                overflow: auto !important;
                margin-top: 30% !important;
            }

            nav, body, label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, i, span, option, button {
                font-family: 'Roboto';
            }

            h1, h2, h3, h4, h5, h6, label, span, p, input, button, textarea, .btn {
                text-align: right;
            }

            li {
                list-style: none;
            }

            .fa-angle-left {
                position: absolute;
                left: 15px;
                top: 18px;
                float: left;
                line-height: 1.42857;
            }

            .bg-title h4 {
                color: rgba(0, 0, 0, .5) !important;
                font-weight: 600;
                margin-top: 6px;
            }

            h4 {
                line-height: 22px;
                font-size: 18px;
            }

            @media (min-width: 768px) {
                .content-wrapper .user-profile .user-pro-body img {
                    width: 40px;
                }
            }

            @media (min-width: 768px) {

                .content-wrapper .user-profile .user-pro-body .u-dropdown {
                    display: none;
                }
            }

            @media (min-width: 768px) {

                .content-wrapper .sidebar .user-profile {
                    width: 60px;
                }
            }

            .user-profile .user-pro-body img {
                width: 50px;
                display: block;
                margin: 0 auto 10px;
            }

            .top-left-part {
                background: #fff;
            }

            .user-profile .user-pro-body .u-dropdown {
                color: #a6acbc;
            }

            .user-profile {
                padding: 15px 0;
                position: relative;
                text-align: center;
            }
        </style>
    @endif
    <style>

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px #01c0c8;;
        }
    </style>
    @yield('css')

    {{--<script>--}}
    {{--(function (i, s, o, g, r, a, m) {--}}
    {{--i['GoogleAnalyticsObject'] = r;--}}
    {{--i[r] = i[r] || function () {--}}
    {{--(i[r].q = i[r].q || []).push(arguments)--}}
    {{--}, i[r].l = 1 * new Date();--}}
    {{--a = s.createElement(o),--}}
    {{--m = s.getElementsByTagName(o)[0];--}}
    {{--a.async = 1;--}}
    {{--a.src = g;--}}
    {{--m.parentNode.insertBefore(a, m)--}}
    {{--})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');--}}

    {{--ga('create', 'UA-19175540-9', 'auto');--}}
    {{--ga('send', 'pageview');--}}
    {{--</script>--}}
</head>

<body class="fixed-layout skin-blue content-wrapper">
<div id="app">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0" style="margin-bottom: 5%;">
            <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                          data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>

                <div class="top-left-part"><a class="logo" href="{{url('/')}}">
                        <img class="img-responsive center-block"
                             style="height: 60px;"
                             src="{{asset('landingpage/images/logo.png')}}"
                             alt=""/>

                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                                    class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
                            <div class="notify">
                                @if(count($newMessages)>0)
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                @endif
                            </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title text-center">
                                    {{__('dashboard.haveNewMessage',['count'=>count($newMessages)])}}
                                </div>
                            </li>
                            <li>
                                <div class="message-center">
                                    @foreach($newMessages as $newMessage)
                                        <a href="{{url('inboxDetail/'.$newMessage->id)}}">
                                            <div class="mail-contnet">
                                                <h5>{{$newMessage->sender}}</h5>
                                                <span class="mail-desc">{{$newMessage->subject}}</span>
                                                <span class="time">{{ date_format(new DateTime($newMessage->created_at),'d M')}}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="{{url('inbox')}}">
                                    <strong>{{ __('dashboard.seeAllMessages') }}</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" id="globe" href="#">
                            <i class="icon-bell"></i>
                            <div class="notify">
                                @if(count(auth()->user()->unreadNotifications)>0)
                                    <span id="notificationNumber">
                                        <span class="heartbit"></span>
                                        <span class="point"></span>
                                        <span class="badge"
                                              style="right: -10px;top: 3px;">{{count(auth()->user()->unreadNotifications)}}</span>
                                    </span>
                                @endif
                            </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">

                            <li style="max-height: 300px">
                                <div class="message-center">
                                    @if(auth()->user()->notifications)
                                        @foreach(auth()->user()->notifications  as $notification)
                                            <a>
                                                Notification
                                            </a>
                                        @endforeach
                                    @else
                                        You have no notifications
                                    @endif
                                </div>
                            </li>

                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="fa fa-language"></i>
                        </a>
                        <!-- /.dropdown-messages -->
                        <ul class="dropdown-menu  animated bounceInDown">
                            <li>
                                @if(app()->getLocale()=='ar')
                                    <a class="switchLang" id="en" href="#">
                                        <div class="mail-contnet">
                                            <h5 class="text-center">English</h5>
                                        </div>
                                    </a>
                                @else
                                    <a class="switchLang" id="ar" href="#">
                                        <div class="mail-contnet">
                                            <h5 class="text-center">العربية</h5>
                                        </div>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a class="dropdown-toggle waves-effect waves-light " data-toggle="dropdown" href="#">
                            <img class="img-circle img-responsive" src="{{asset('avatar/'.auth()->user()->avatar)}}"
                                 alt="user-img" style="height: 50px">
                        </a>

                        {{--<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}

                        {{--</a>--}}
                        <ul class="dropdown-menu animated flipInY text-center">
                            <li><a href="{{url('profile')}}"><i class="ti-user"></i> {{__('dashboard.profile')}}</a>
                            </li>
                            <li>
                                <a href="{{url('inbox')}}"><i class="ti-email"></i> {{__('dashboard.inbox')}}</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="fa fa-power-off"></i> {{__('dashboard.logout')}}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>

                {{--<li class="right-side-toggle"><a class="waves-effect waves-light" href="javascript:void(0)"><i--}}
                {{--class="ti-settings"></i></a></li>--}}
                <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        @if(auth()->user()->isStudent())
            @include('admin_layout.student_layout')
        @elseif(auth()->user()->isTeacher())
            @include('admin_layout.teacher_layout')
        @elseif(auth()->user()->isParent())
            @include('admin_layout.parent_layout')
        @else
            @include('admin_layout.admin_layout')
        @endif
    <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid justify-content-center" style="">
{{--               @if(auth()->user()->isAdmin())--}}
                   @include('admin_layout.header-nav')
               {{--@endif--}}
                <!--row -->
                <div class="row" >
                    @yield('content')
                </div>

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">  <span>Powered by Stqdam version 1.0.0  <a class="text-primary"
                                                                                           href="http://stqdam.com"
                                                                                           target="_blank">stqdam.com</a></span>
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
</div>
<script src="/js/lang.js"></script>

<script>

    var urlBase = '{{url('/')}}';
    var _token = '{{csrf_token()}}';
</script>
<!-- /wrapper -->
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>

<!-- jQuery -->
<script src="{{asset('dashboard/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('dashboard/bootstrap/dist/js/tether.min.js')}}"></script>


@if(app()->getLocale()==='en')
    <!-- Bootstrap Core CSS -->
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
@else
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js')}}"></script>
@endif
<!-- Menu Plugin JavaScript -->
<script src="{{asset('dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
<script src="{{asset('dashboard/plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('dashboard/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('dashboard/js/waves.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<script src="{{asset('js/LanguageSwitcher.js')}}"></script>
<script src="{{asset('js/notification.js')}}"></script>
<script src="{{asset('dashboard/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCis4vluMHt3WRX1tQlC4955sbgzNSbEnc&libraries=places&callback=initAutocomplete"
        async defer></script>

<script>
    $('#{{$active}}').addClass('active');
    @if(app()->getLocale()==='ar')
    $('.fa.arrow').addClass('fa-angle-left').removeClass('arrow')
    $('.icon-arrow-left-circle').addClass('icon-arrow-right-circle').removeClass('.icon-arrow-left-circle')
    $('.page-title').closest('div').removeClass('col-md-pull-8')
    $('.breadcrumb').closest('div').removeClass('col-md-push-4')
    @endif


</script>
<script src="{{asset('js/timeago/jquery.timeago.js')}}"></script>
@if(app()->getLocale()!='en')
    <script src="{{asset('js/timeago/jquery.timeago.'.app()->getLocale().'.js')}}"></script>
@endif
<script>
    jQuery("time.timeago").timeago();
    @if(!auth()->user()->isAdmin())
    setTimeout(function () {
        // $('.open-close').click()
    },200)
    @endif
</script>
@yield('js')
</body>

</html>
