
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <hr>
            <div class="footer-container">

                <div class="location">
                    @if(app()->getLocale() =='ar')
                        {{$settings->ar_address}}
                    @else
                        {{$settings->en_address}}
                    @endif

                </div>
                <div class="phone">
                   {{$settings->phone}}  <span>هاتف</span>
                </div>
                <div class="email">{{$settings->website_email}}</div>
            </div>

        </div>
    </div>
</div>
<style>
    .condition{
        float: right;
    }

    .footer-container{
        display: flex;
        flex-direction : column;
        align-items: center ;
        line-height: 30px;
    }
    .location {
        font-size : 30px;
        font-weight: bold;
    }
    .phone > span  {
        font-size : 20px;
        font-weight : bold;
    }


</style>