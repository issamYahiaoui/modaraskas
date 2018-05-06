<div align="right" class="row transparent" style="direction :rtl;text-align: right; background: rgba(59,183,120,1);background: -moz-linear-gradient(left, rgba(59,183,120,1) 47%, rgba(71,196,218,1) 100%);background: -webkit-gradient(left top, right top, color-stop(47%, rgba(59,183,120,1)), color-stop(100%, rgba(71,196,218,1)));background: -webkit-linear-gradient(left, rgba(59,183,120,1) 47%, rgba(71,196,218,1) 100%);background: -o-linear-gradient(left, rgba(59,183,120,1) 47%, rgba(71,196,218,1) 100%);background: -ms-linear-gradient(left, rgba(59,183,120,1) 47%, rgba(71,196,218,1) 100%);background: linear-gradient(to right, rgba(59,183,120,1) 47%, rgba(71,196,218,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bb778', endColorstr='#47c4da', GradientType=1 );
">
    <div class="tuyin first" style=" margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.37);
            border: 1px solid #F7F7F7;
            border-radius: 5px;
            box-shadow: 0px 0px 2px 0px rgba(181, 181, 181, 0.3);
            padding: 4%;
            text-align: center;
            width: 97%;
            min-height: 315px;
            position: relative;
            margin-bottom: 25px;">

        <div class="plan-name" style="color: #ffffff;
            font-weight: 300;margin-top: 40px;
            margin-bottom: 13px;
            font-size: 2em;">السلام عليكم و رحمة الله و بركاته
        </div>
        <div class="text" style=" margin-top: 20px;
            color: #474747;
            font-weight: 300;
            margin-bottom: 13px;
            font-size: 16px;
            text-align: center;">
            <h3>مرحبا بك : </h3>
            <h3>{{$user->name}}</h3>
            <h4 style="text-align: center;">يرجى تفعيل حسابك بالضغط على الرابط أدناه
                </h4>
            <a style="text-align: center;"  href="{{url('activation/'.$user->id.'/'.$confirmation_code)}}">رابط التفعيل</a>
        </div>

    </div>
</div>


