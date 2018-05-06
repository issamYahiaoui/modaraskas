@extends('admin_layout.master')


@section('content')
    @if(Session::has('success'))
        <div id="alert" class="alert alert-success text-center col-md-12">
            <a data-dismiss="alert" aria-label="Close" class="fa  fa-times pull-right"></a>
            {{Session::get('success')}}
        </div>
    @endif
    <div class="container">
        <div class="col-md-12">
            <div class="white-box text-center">
                <button type="button"
                        class="fcbtn btn btn-outline btn-success btn-1f btn-rounded "
                        data-toggle="modal"
                        data-target="#addContact">

                    {{__('sms.addContact')}}
                </button>

                <div class="modal fade" id="addContact" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title"
                                    id="exampleModalLabel1">{{__('sms.addContact')}} </h4>
                            </div>
                            <div class="modal-body">

                                {!! Form::open(["url"=>"addContact/"]) !!}
                                {!! csrf_field() !!}


                                <div class="form-group">
                                    <label class="col-md-12"
                                           for="example-text">{{__('dashboard.name')}}
                                    </label>
                                    <div class="col-md-12">
                                        <input required="true" name="name" type="text"
                                               value="{{old('name')}}"
                                               class="form-control"
                                               placeholder="{{__('dashboard.namePlaceholder')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"
                                           for="example-email">{{__('dashboard.phone')}}
                                    </label>
                                    <div class="col-md-12">
                                        <input required="true" name="phone" class="form-control"
                                               value="{{old('phone')}}"
                                               placeholder="{{__('dashboard.phonePlaceholder')}}">
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
                        <table id="contacts" class="display responsive nowrap">
                            <thead>
                            <tr>
                                <th class="text-center">{{__('dashboard.name')}}</th>
                                <th class="text-center">{{__('dashboard.phone')}}</th>
                                <th class="text-center">{{__('sms.type')}}</th>
                                <th class="text-center">{{__('dashboard.edit')}}</th>
                                <th class="text-center">{{__('dashboard.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                @foreach(\App\User::role($role->name)->get() as $user)
                                    <tr>
                                        <td class="text-center">{{$user->name}}</td>
                                        <td class="text-center">{{$user->phone}}</td>
                                        <td class="text-center">
                                            @if(app()->getLocale()=='ar')
                                                {{$role->name_ar}}
                                            @else
                                                {{$role->name}}
                                            @endif
                                        </td>
                                        <td class="text-center">/</td>
                                        <td class="text-center">/</td>
                                    </tr>
                                @endforeach
                            @endforeach

                            @foreach(\App\Contact::all() as $contact)

                                <tr>
                                    <td class="text-center">{{$contact->name}}</td>
                                    <td class="text-center">{{$contact->phone}}</td>
                                    <td class="text-center">
                                        {{__('sms.contact')}}
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                                class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                                                data-toggle="modal"
                                                data-target="#editContact{{$contact->id}}">
                                    <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
                                            {{__('dashboard.edit')}}
                                        </button>

                                        <div class="modal fade" id="editContact{{$contact->id}}" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalLabel1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title"
                                                            id="exampleModalLabel1">{{__('sms.addContact')}} </h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        {!! Form::open(["url"=>'editContact/'.$contact->id]) !!}
                                                        {!! csrf_field() !!}


                                                        <div class="form-group">
                                                            <label class="col-md-12"
                                                                   for="example-text">{{__('dashboard.name')}}
                                                            </label>
                                                            <div class="col-md-12">
                                                                <input required="true" name="name" type="text"
                                                                       value="{{$contact->name}}"
                                                                       class="form-control"
                                                                       placeholder="{{__('dashboard.namePlaceholder')}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-12"
                                                                   for="example-email">{{__('dashboard.phone')}}
                                                            </label>
                                                            <div class="col-md-12">
                                                                <input required="true" value="{{$contact->phone}}"
                                                                       name="phone" class="form-control"
                                                                       placeholder="{{__('dashboard.phonePlaceholder')}}">
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
                                                data-target="#delete{{$contact->id}}"
                                        >
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
                                            {{__('dashboard.delete')}}
                                        </button>
                                        <div class="modal fade" id="delete{{$contact->id}}" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalLabel1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title"
                                                            id="exampleModalLabel1">{{__('sms.deleteContact')}} </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{__('sms.confirmDeleteContact')}}
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <br>
                                                        <form action="{{url('deleteContact/'.$contact->id)}}"
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
    </div>

@endsection


@section('js')
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>

        $('#contacts').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions:
                        {
                            columns: [0, 1, 2]
                        }
                }
            ],
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
        $('.dt-button').removeClass('dt-button').addClass('btn btn-info waves-effect waves-light m-r-10 ')

    </script>
@endsection

@section('css')

    <link href="{{asset('admin')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('dashboard/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}"
          rel="stylesheet"/>
    <style>
        .btn-label {
            background: none;
        }
    </style>

@endsection