
<!--Section: Team v.1-->
<section class="team-section pb-5">

    <!--Section heading-->
    <h2 class="h1 text-center py-5">{{__('lang.amazingTeachers')}}</h2>
    <!--Section description-->
    <p class="grey-text pb-5 text-center">{{__('lang.teachersDescription')}}</p>

    <!-- Grid row -->
    <div class="row text-center">

        @foreach($teachers as $teacher)
        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-body">
                <div class="avatar mx-auto my-3">
                    <img src="{{asset('avatar/'.$teacher->avatar)}}" class="rounded-circle img-fluid" alt="First sample avatar image">
                </div>
                <h5 class="font-weight-bold">
                    <strong>{{$teacher->name}}</strong>
                </h5>
                <p class="grey-text">
                    <i class="fa fa-map-marker"></i>
                    {{$teacher->country}} - {{$teacher->city}}
                </p>

                <h3>
                    <star-rating :show-rating="false" :rtl="false" :inline="true"
                                 :star-size="15"
                                 :rating="4" :read-only="true"
                                 :increment="0.01"></star-rating>
                </h3>
            </div>
        </div>
        <!-- Grid column -->
         @endforeach



    </div>
    <!-- Grid row -->
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <button class="btn  btn-more">
                More
            </button>
        </div>
    </div>

</section>
<!--Section: Team v.1-->
