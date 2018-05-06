<footer class="page-footer center-on-small-only stylish-color-dark" style="margin-top: 5%">
    <!--Footer Links-->
    <div class="container">
        <div class="row">
            <!--First column-->
            <div class="col-md-6 mt-3 mx-auto text-center">

                <h3 class="text-white ">
                    @if(app()->getLocale() =='ar')
                        {{\App\PrincipalSettings::first()->office_ar_name}}
                    @else
                        {{\App\PrincipalSettings::first()->office_en_name}}
                    @endif
                </h3>
                <p class="m-t-30">
                    {{__('lang.modaraskasDescription')}}
                </p>
            </div>
            <!--/.First column-->


            <!--Second column-->
            <div class="col-md-3 mt-3 mx-auto">
                <h3 class="text-center font-bold">
                    {{__('landing.communicationData')}}
                </h3>
                <ul>
                    <li class="footer-link text-center"><a href="#"><i
                                    class="pr-2 pl-2 fa fa-phone"></i>{{\App\PrincipalSettings::first()->phone}}</a>
                    </li>
                    <li class="footer-link text-center"><a href="#"><i
                                    class="pr-2 pl-2 fa fa-envelope"></i>{{\App\PrincipalSettings::first()->website_email}}
                        </a></li>
                    <li class="footer-link text-center"><a href="#"><i class="pr-2 pl-2 fa fa-home"></i>
                            @if(app()->getLocale() =='ar')
                                {{\App\PrincipalSettings::first()->ar_address}}
                            @else
                                {{\App\PrincipalSettings::first()->en_address}}
                            @endif
                        </a></li>
                </ul>
            </div>
            <!--/.Second column-->


            <!--Third column-->
            <div class="col-md-2 mt-3 mx-auto">
                <h3 class="text-center font-bold ">
                    {{__('landing.links')}}
                </h3>
                <ul>
                    <li class="footer-link text-center"><a href="{{url('about-us')}}"><i></i> {{__('settings.about')}}
                        </a></li>
                    <li class="footer-link text-center"><a
                                href="{{url('privacy-terms')}}"><i></i> {{__('settings.privacy_term')}}</a></li>
                    <li class="footer-link text-center"><a href="{{url('contact')}}"><i></i> {{__('landing.contactUs')}}
                        </a></li>

                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">


        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            <div class="row" style="padding: 5px">
                <div class="col-md-6 text-center">
                <span>Powered by modaraskas version 1.0.0  <a class="text-white"
                                                              href="http://modaraskas.com"
                                                              target="_blank">modaraskas.com</a></span>
                </div>

                @include('front.home.sections.social')

            </div>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
{{--end footer --}}
