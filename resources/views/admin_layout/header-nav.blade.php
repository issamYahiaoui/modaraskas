<div class="row nav-head bg-title" style="display: flex ; justify-content: space-between;">
    <div class="">

        <h4 class="page-title">
            {{__('dashboard.dashboard')}}
        </h4>
    </div>
    @if(auth()->user()->isStudent() )

    <div class="">


            <!-- Button trigger modal -->
        <a  href="#" data-toggle="modal" data-target="#searchChoice"  class="btn  btn-success  waves-effect waves-light" ><span class="btn-label"><i class="fa fa-search"></i></span>
            {{__('lang.findTeacher')}}</a>
    </div>
    @if(auth()->user()->isParent())
     <div class="">


            <!-- Button trigger modal -->
            <a  href="#" data-toggle="modal" data-target="#addModal"  class="btn  btn-warning  waves-effect waves-light" ><span class="btn-label"><i class="fa fa-plus"></i></span>
                {{__('lang.addStudent')}}</a>
      </div>
        @endif
    @endif
    <div class=" align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$title}}</a></li>
                <li class="breadcrumb-item active">  {{__('dashboard.dashboard')}}
                </li>
            </ol>
        </div>
    </div>
</div>

        <div id="searchChoice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">{{__('lang.chooseTeachingMethod')}}</h4>
                    </div>
                    <div class="modal-body ">
                        <div class="row justify-content-center">

                            <a href="{{url('student/searchTeacher/'.'normal')}}" class="btn btn-warning">{{__('lang.normalEducation')}}</a>
                            <a href="{{url('student/searchTeacher/'.'online')}}" class="btn btn-success">{{__('lang.onlineEducation')}}</a>
                        </div>
                     </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">{{__('lang.chooseAddMethod')}}</h4>
            </div>
            <div class="modal-body ">
                <div class="row justify-content-center">

                    <a href="{{url('parent/addStudent/'.'new')}}" class="btn btn-warning">{{__('lang.newStudent')}}</a>
                    <a href="{{url('parent/addStudent/'.'old')}}" class="btn btn-success">{{__('lang.oldStudent')}}</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@section('css')
    <style>


        .row.nav-head {
            display: flex !important;
            justify-content: space-between !important;
        }
    </style>


    @endsection