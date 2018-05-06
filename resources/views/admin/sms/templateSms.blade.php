@extends('admin_layout.master')


@section('content')
    @if(Session::has('success'))
        <div id="alert" class="alert alert-success text-center col-md-12">
            <a data-dismiss="alert" aria-label="Close" class="fa  fa-times pull-right"></a>
            {{Session::get('success')}}
        </div>
    @endif


    <div class="col-md-12">
        <div class="white-box text-center">
                <button type="button"
                        class="fcbtn btn btn-outline btn-success btn-1f btn-rounded "
                        data-toggle="modal"
                        data-target="#addTemplate">

                        {{__('sms.addTemplate')}}
                </button>

                <div class="modal fade" id="addTemplate" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title"
                                    id="exampleModalLabel1">{{__('sms.addTemplate')}} </h4>
                            </div>
                            <div class="modal-body">

                                {!! Form::open(["url"=>"addTemplateSms/"]) !!}
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label class="col-md-12"
                                           for="example-text">{{__('inbox.subject')}}
                                    </label>
                                    <div class="col-md-12">
                                        <input required="true" name="subject" type="text"
                                               value="{{old('subject')}}"
                                               class="form-control"
                                               placeholder="{{__('sms.subjectPlaceholder')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"
                                           for="example-email">{{__('sms.message')}}
                                    </label>
                                    <div class="col-md-12">
                                        <textarea required="true" name="message"  class="form-control"
                                                  value="{{old('message')}}" placeholder="{{__('sms.messagePlaceholder')}}"></textarea>
                                    </div>
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
    <div class="col-md-12">
        <div class="white-box">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <table id="templateSms" class="display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="text-center">{{__('inbox.subject')}}</th>
                            <th class="text-center">{{__('sms.message')}}</th>
                            <th class="text-center">{{__('dashboard.edit')}}</th>
                            <th class="text-center">{{__('dashboard.delete')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($templates as $template)

                            <tr>
                                <td class="text-center">{{$template->subject}}</td>
                                <td class="text-center">{{$template->message}}</td>
                                <td class="text-center">
                                    <button type="button"
                                            class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                            data-toggle="modal"
                                            data-target="#edit{{$template->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                        {{__('dashboard.edit')}}
                                    </button>

                                    <div class="modal fade" id="edit{{$template->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title"
                                                        id="exampleModalLabel1">{{__('sms.editTemplate')}} </h4>
                                                </div>
                                                <div class="modal-body">

                                                    {!! Form::open(["url"=>"editTemplateSms/".$template->id]) !!}
                                                    {!! csrf_field() !!}

                                                    <div class="form-group">
                                                        <label class="col-md-12"
                                                               for="example-text">{{__('inbox.subject')}}
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input required="true" name="subject" type="text"
                                                                   value="{{$template->subject}}"
                                                                   class="form-control"
                                                                   placeholder="{{__('sms.subjectPlaceholder')}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12"
                                                               for="example-email">{{__('sms.message')}}
                                                        </label>
                                                        <div class="col-md-12">
                                                            <textarea required="true" name="message"
                                                                      class="form-control"
                                                                      placeholder="{{__('sms.messagePlaceholder')}}">{{$template->message}}</textarea>
                                                        </div>
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
                                            data-target="#delete{{$template->id}}"
                                    >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                        {{__('dashboard.delete')}}
                                    </button>
                                    <div class="modal fade" id="delete{{$template->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title"
                                                        id="exampleModalLabel1">{{__('sms.deleteTemplate')}} </h4>
                                                </div>
                                                <div class="modal-body">
                                                    {{__('sms.confirmDeleteTemplate')}}
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <br>
                                                    <form action="{{url('deleteTemplateSms/'.$template->id)}}"
                                                          method="post">
                                                        {{csrf_field()}}
                                                        <button class="btn btn-info" type="submit">
                                                            {{__('dashboard.submit')}}
                                                        </button>
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">
                                                            {{__('dashboard.close')}}
                                                        </button>
                                                    </form>
                                                </div>
                                                <br>
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
            <!-- /.row -->

        </div>
    </div>

@endsection


@section('js')
    <script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

    <script>

        $('#templateSms').DataTable({
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
    </script>

@endsection

@section('css')

    <link href="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <style>
        .btn-label {
            background: none;
        }
    </style>
@endsection