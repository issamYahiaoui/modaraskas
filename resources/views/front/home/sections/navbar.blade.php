<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar "
     style="background: transparent; !important">

    <a href="#" class=" navbar-brand">
        <img src="{{asset('landingpage/images/logo.png')}}" alt="brand" class="logo">
    </a>

    <a href="navbar-toggler">
        <span><i class="fas fa-align-justify"></i></span>
    </a>
    <div class="collapse navbar-collapse  auth"  id="navbarSupportedContent-4" >

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"
                                                                                        aria-hidden="true"></i> </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">

                    @if(app()->getLocale()=='ar')
                        <a class="switchLang" id="en" href="{{url('language?locale=en')}}">
                            <div>
                                <h5>English</h5>
                            </div>
                        </a>
                    @else
                        <a class="switchLang" id="ar" href="{{url('language?locale=ar')}}">
                            <div>
                                <h5>العربية</h5>
                            </div>
                        </a>
                    @endif

                </div>
            </li>
            <li class="nav-item">
                <a id="home" class="nav-link" href="{{url('/')}}">{{__('lang.home')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{url('about')}}"> {{__('lang.aboutUs')}}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="{{url('contact')}}"> {{__('lang.contactUs')}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{url('terms')}}"> {{__('lang.terms')}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{url('faq')}}"> {{__('lang.faq')}}
                </a>
            </li>





        </ul>
        <ul class="navbar-nav">

            @if (Auth::guest())
                <li class="nav-item  ">
                    <a href="{{url('/signin')}}"
                       class="nav-link">{{__('lang.login')}}</a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/signup')}}"
                       class="nav-link">{{__('lang.register')}}</a>
                </li>
            @else
                {{--logout--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  {{ Auth::user()->name }} </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                         aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-menu-item" href="{{ url('profile') }}">
                            {{__('lang.profile')}}
                        </a>

                        <a class="dropdown-menu-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{__('lang.logout')}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav>