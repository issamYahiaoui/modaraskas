<!-- Left navbar-header -->
<div class="navbar-default sidebar " role="navigation">
    <div class="sidebar-nav navbar-collapse" style="overflow: hidden ;">
        {{--<div class="user-profile">--}}
        {{----}}
        {{--</div>--}}
        <ul class="nav" id="side-menu">

            <li>
                <a id="profile"  href="{{url('profile')}}" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                                              class="ti-user"></i>
                    <span class="hide-menu">{{__('lang.profile')}}
                    </span></a>

            </li>
            <li>
                <a id="inbox" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                 class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">{{__('dashboard.mailBox')}}<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('inbox')}}">{{__('dashboard.inbox')}}</a></li>
                    <li><a href="{{url('compose')}}">{{__('inbox.compose')}}</a></li>
                </ul>
            </li>
            <li>
                <a id="students"  href="{{url('parent/students')}}" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                                                                       class="ti-user"></i>
                    <span class="hide-menu">{{__('lang.students')}}
                    </span></a>
            </li>


            <li>
                <a id="termsConditions"  href="{{url('parent/terms')}}" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                                                           class="ti-lock"></i>
                    <span class="hide-menu">{{__('lang.termsConditions')}}
                    </span></a>
            </li>





        </ul>

    </div>
</div>
