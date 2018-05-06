<!-- Left navbar-header -->
<div class="navbar-default sidebar " role="navigation">
    <div class="sidebar-nav navbar-collapse">
        {{--<div class="user-profile">--}}
        {{----}}
        {{--</div>--}}
        <ul class="nav" id="side-menu">
            <li>
                <a id="users" href="javascript:void(0);" class="waves-effect">
                    <i class="icon-people fa-fw"></i>
                    <span class="hide-menu">
    {{__('dashboard.users')}}
                        <span class="fa arrow"></span>
        </span>
                </a>

                <ul class="nav nav-second-level">
                    <a href="{{url('allUser/')}}">

                    </a>
                    <li><a href="{{url('addUser/')}}">{{__('dashboard.addUser')}}</a></li>

                </ul>
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
            {{--<li>--}}
                {{--<a id="messages" href="javascript:void(0);" class="waves-effect">--}}
                    {{--<i class="icon-envelope-open fa-fw"></i>--}}
                    {{--<span class="hide-menu">--}}
                                        {{--{{__('sms.sms')}}--}}
                        {{--<span class="fa arrow"></span>--}}
                                {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li><a href="{{url('sms')}}">{{__('sms.sendSms')}}</a></li>--}}
                    {{--<li><a href="{{url('myContacts')}}">{{__('sms.myContacts')}}</a></li>--}}
                    {{--<li><a href="{{url('templateSms')}}">{{__('sms.templateSms')}}</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            <li>
                <a id="schoolStages" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                        class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">{{__('lang.schoolStages')}}<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('admin/crud/schoolStage/resource')}}">{{__('lang.schoolStage')}}</a></li>
                    <li><a href="{{url('admin/crud/specialization/resource')}}">{{__('lang.specialization')}}</a></li>
                    <li><a href="{{url('admin/crud/teachingType/resource')}}">{{__('lang.teachingType')}}</a></li>
                    <li><a href="{{url('admin/crud/highSchoolStage/resource')}}">{{__('lang.highSchoolStage')}}</a></li>
                </ul>
            </li>

            <li>
                <a id="location" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                    class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">{{__('lang.location')}}<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('admin/crud/country/resource')}}">{{__('lang.country')}}</a></li>
                    <li><a href="{{url('admin/crud/city/resource')}}">{{__('lang.city')}}</a></li>
                    <li><a href="{{url('admin/crud/address/resource')}}">{{__('lang.address')}}</a></li>
                </ul>
            </li>
            <li>
                <a id="teachingOptions" href="javascript:void(0);" class="waves-effect"><i data-icon=")"
                                                                                           class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">{{__('lang.teachingOptions')}}<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('admin/crud/subject/resource')}}">{{__('lang.subject')}}</a></li>
                    <li><a href="{{url('admin/crud/curricula/resource')}}">{{__('lang.curricula')}}</a></li>
                    <li><a href="{{url('admin/crud/teachingOption/resource')}}">{{__('lang.teachingOptions')}}</a></li>
                </ul>
            </li>













            <li>
                <a id="settings" href="javascript:void(0);" class="waves-effect">
                    <i class=" fa fa-cogs"></i>
                    <span class="hide-menu">{{__('settings.settings')}}<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('principalSettings')}}">{{__('settings.principalSettings')}}</a></li>
                    <li><a href="{{url('staticPages')}}">{{__('settings.staticPages')}}</a></li>
                    <li><a href="{{url('staticTerms')}}">{{__('lang.terms')}}</a></li>
{{--                    <li><a href="{{url('landingCarousel')}}">{{__('settings.landingCarousel')}}</a></li>--}}
                </ul>
            </li>

        </ul>

    </div>
</div>
