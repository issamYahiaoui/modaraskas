<!-- Left navbar-header -->
<div class="navbar-default sidebar " role="navigation">
    <div class="sidebar-nav navbar-collapse">
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
                <a id="previousTeaching"  href="{{url('previousTeaching/teacher')}}" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                                                                        class="icon-arrow-left-circle ti-menu"></i>
                    <span class="hide-menu">{{__('lang.previousTeaching')}}
                    </span></a>
            </li>
            <li>
                <a id="financialDetails"  href="{{url('teacher/financialDetails')}}" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                                                            class="ti-money"></i>
                    <span class="hide-menu">{{__('lang.financialDetails')}}
                    </span></a>
            </li>
            <li>
                <a id="termsConditions"  href="{{url('teacher/terms')}}" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                                                            class="ti-lock"></i>
                    <span class="hide-menu">{{__('lang.termsConditions')}}
                    </span></a>
            </li>






        </ul>

    </div>
</div>
