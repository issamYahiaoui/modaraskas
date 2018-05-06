@extends('admin_layout.master')


@section('content')
    @if(Session::has('success'))
        <div id="alert" class="alert alert-success text-center col-md-12">
            <a data-dismiss="alert" aria-label="Close" class="fa  fa-times pull-right"></a>
            {{Session::get('success')}}
        </div>
    @endif
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="white-box text-center">
                    <button type="button"
                            class="fcbtn btn btn-outline btn-success btn-1f btn-rounded "
                            data-toggle="modal"
                            data-target="#addDemand">
                        {{__('dashboard.addCarousel')}}
                    </button>

                    <div class="modal fade" id="addDemand" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"
                                        id="exampleModalLabel1">{{__('dashboard.addCarousel')}} </h4>
                                </div>
                                <div class="modal-body">

                                    {!! Form::open(["url"=>"imageCarousel/","files"=>true]) !!}
                                    {!! csrf_field() !!}


                                    <div class="col-md-6">
                                        <h3 class="text-center">
                                            {{__('dashboard.ar_description')}}
                                        </h3>
                                        <input name="ar_title" type="text" class="form-control" >

                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="text-center">
                                            {{__('dashboard.en_description')}}
                                        </h3>
                                        <input name="en_title" type="text" class="form-control" >

                                    </div>
                                    <div class="col-md-12">
                                        <h3>{{__('dashboard.image')}}</h3>
                                        <input type="file" name="img" class="dropify" required/>
                                    </div>


                                    <div class="col-md-12 text-center">
                                        <br>
                                        <button class="btn btn-info"> {{__('dashboard.submit')}}</button>
                                        {!! Form::close() !!}
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">
                                            {{__('dashboard.close')}}
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="white-box">
                    <table id="allUsers" class="display responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>

                            <th class="text-center">{{__('dashboard.ar_description')}}</th>
                            <th class="text-center">{{__('dashboard.en_description')}}</th>
                            <th class="text-center">{{__('dashboard.image')}}</th>
                            <th class="text-center">{{__('dashboard.edit')}}</th>
                            <th class="text-center">{{__('dashboard.delete')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach(\App\Carousel::all() as $carousel)
                                <tr>
                                    <td class="text-center">{{$carousel->ar_title}}</td>
                                    <td class="text-center">{{$carousel->en_title}}</td>
                                    <td class="text-center">
                                        <img class="img-circle img-responsive center-block" src="{{asset('carousel/'.$carousel->img)}}" alt="">
                                    </td>

                                    <td class="text-center">
                                        <button type="button"
                                                class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                                data-toggle="modal"
                                                data-target="#edit{{$carousel->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                            {{__('dashboard.edit')}}
                                        </button>

                                        <div class="modal fade" id="edit{{$carousel->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title"
                                                            id="exampleModalLabel1">{{__('dashboard.editUser')}} </h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        {!! Form::open(["url"=>"imageCarousel/".$carousel->id,'method'=>'PATCH',"files"=>true]) !!}
                                                        {!! csrf_field() !!}


                                                        <div class="col-md-6">
                                                            <h3 class="text-center">
                                                                {{__('dashboard.ar_description')}}
                                                            </h3>
                                                            <input name="ar_title"  value="{{$carousel->ar_title}}" type="text" class="form-control" >

                                                        </div>

                                                        <div class="col-md-6">
                                                            <h3 class="text-center">
                                                                {{__('dashboard.en_description')}}
                                                            </h3>
                                                            <input name="en_title" value="{{$carousel->en_title}}"  type="text" class="form-control" >

                                                        </div>
                                                        <div class="col-md-12">
                                                            <h3>{{__('dashboard.image')}}</h3>
                                                            <input type="file" name="img" class="dropify" />
                                                        </div>


                                                        <div class="col-md-12 text-center">
                                                            <br>
                                                            <button class="btn btn-info"> {{__('dashboard.submit')}}</button>
                                                            {!! Form::close() !!}
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">
                                                                {{__('dashboard.close')}}
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                            <button type="button"
                                                    class="fcbtn btn btn-outline btn-danger btn-1fbtn-info btn-rounded"
                                                    data-toggle="modal"
                                                    data-target="#delete{{$carousel->id}}"
                                            >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                                {{__('dashboard.delete')}}
                                            </button>
                                            <div class="modal fade" id="delete{{$carousel->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title"
                                                                id="exampleModalLabel1">{{__('dashboard.deleteUser')}} </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{__('dashboard.confirmDelete')}}
                                                            {!! Form::open(["url"=>"imageCarousel/".$carousel->id,'method'=>'DELETE',"files"=>true]) !!}
                                                            {!! csrf_field() !!}


                                                            <div class="col-md-12 text-center">
                                                                <br>
                                                                <button class="btn btn-info"> {{__('dashboard.submit')}}</button>
                                                                {!! Form::close() !!}
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">
                                                                    {{__('dashboard.close')}}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('dashboard/plugins/bower_components/dropify/dist/css/dropify.min.css')}}">
    <style>
        .btn-label {
            background: none;
        }
    </style>
    <link href="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endsection


@section('js')
    <script src="{{asset('dashboard/plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify({
                @if(app()->getLocale()=='ar')
                messages: {
                    default: 'لإختيار ملف إضغط هنا',
                    replace: 'لإستبدال الملف إضغط هنا',
                    remove: 'حذف',
                    error: 'عذرا  !! الملف الذي إخترته كبير جدا !!'
                }
                @endif
            });

        });
    </script>
    <script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

    <!-- end - This is for export functionality only -->
    <script>

        $('#allUsers').DataTable({
            @if(app()->getLocale()=='ar')
            "language": {
                "sProcessing": "جارٍ التحميل...",
                "sLengthMenu": "أظهر _MENU_ مدخلات",
                "sZeroRecords": "لم يعثر على أية سجلات",
                "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "sInfoPostFix": "",
                "sSearch": "ابحث:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "الأول",
                    "sPrevious": "السابق",
                    "sNext": "التالي",
                    "sLast": "الأخير"
                }
            }
            @endif
        });

        $('.dt-button').removeClass('dt-button').addClass('btn btn-danger waves-effect waves-light m-r-10 ')
    </script>


@endsection
