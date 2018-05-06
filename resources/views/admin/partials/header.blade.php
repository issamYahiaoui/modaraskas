<div class="container">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

    <div class="row ">
        <div class="col-md-12">
            <div class="header-container">
                <div class="logo">
                    <a class="navbar-brand" href="#"><img class="img-responsive"
                                                                     style="height: 120px;"
                                                                     src="{{asset('landingpage/images/elite-admin-logo.png')}}"
                                                                     alt="Eliteadmin"/></a>
                </div>
                <div class="info-container">
                    <div class="name">
                        @if(app()->getLocale() =='ar')
                            {{$settings->office_ar_name}}
                        @else
                            {{$settings->office_en_name}}
                        @endif
                    </div>
                    <div class="permission">
                        ({{$settings->permission_number}}) ترخيص رقم
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<style>
    nav, body, label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, i, span, option, button {
        font-family: 'DroidArabicKufiRegular';
    }
    .header-container{
        display : flex ;
        flex-direction : row   ;
        justify-content: space-between;
        font-size:40px;
        font-weight: bold;
        color: rgba(0, 0, 0, 0.8);
    }

    .info-container{
        display: flex;
        flex-direction:column;
        justify-content: center;
     }
    .permission{
        font-size: 20px;
        color: rgba(0, 0, 0, 0.51);
        align-self: center;
    }
    hr{
        border-color: #03a9f3;
    }
</style>