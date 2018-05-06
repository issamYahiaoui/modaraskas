@extends('admin_layout.master')


@section('content')

    <div class="col-md-12  text-center">
        <div class="white-box">
            <h2>{{__('sms.chooseTemplateSms')}}</h2>
            <select id="templateSms" class="selectpicker form-control" data-style="btn-info btn-outline"
                    name="template">
                <option value="0">{{__('sms.other')}}</option>
                @foreach(\App\TemplateSMS::all() as $template)
                    <option value="{{$template->id}}">{{$template->subject}}</option>
                @endforeach
            </select>
            <br>
            <div id="messageContainer">
                <br>
                <label>{{__('sms.message')}}</label>
                <textarea id="message" class="form-control" type="text" rows="5"></textarea>
                <br>
            </div>

            <br>
            <button class="btn btn-info sendMessage "
                    data-url="{{ url('sendSms') }}">
                {{__('sms.send')}}
            </button>
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
                            <th class="text-center"></th>
                            <th class="text-center">{{__('dashboard.name')}}</th>
                            <th class="text-center">{{__('admin')}}</th>
                            <th class="text-center">{{__('sms.type')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\Spatie\Permission\Models\Role::all() as $role)
                            @foreach(\App\User::role($role->name)->get() as $user)

                                <tr>
                                    <td align="center">
                                        <input type="checkbox" class="sub_chk" data-id="user {{$user->id}}">
                                    </td>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->phone}}</td>
                                    <td class="text-center">
                                        @if(app()->getLocale()=='ar')
                                            {{$role->name_ar}}
                                        @else
                                            {{$role->name}}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach

                        @foreach(\App\Contact::all() as $contact)

                            <tr>
                                <td align="center">
                                    <input type="checkbox" class="sub_chk" data-id="contact {{$contact->id}}">
                                </td>
                                <td class="text-center">{{$contact->name}}</td>
                                <td class="text-center">{{$contact->phone}}</td>
                                <td class="text-center">
                                    {{__('dashboard.contact')}}
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
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

    <script>

        $('#contacts').DataTable({
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
    <script>
        var _token = '{{csrf_token()}}';

        $(document).ready(function () {

            $('#templateSms').change(function () {
                if ($(this).val() == 0) {
                    $('#messageContainer').show()
                } else {
                    $('#messageContainer').hide()
                }
            });


            $('#master').on('click', function (e) {
                if ($(this).is(':checked', true)) {
                    $(".sub_chk").prop('checked', true);
                } else {
                    $(".sub_chk").prop('checked', false);
                }
            });

            $('.sendMessage').on('click', function (e) {

                var allVals = [];
                $(".sub_chk:checked").each(function () {
                    allVals.push($(this).attr('data-id'));
                });

                if (allVals.length <= 0) {
                    alert('{{__('sms.selectContact')}}');
                } else {

                    var check = confirm('{{__('sms.confirmSendSms')}}');
                    if (check == true) {
                        console.log(allVals);
                        var message = $('#message').val();
                        var join_selected_values = allVals.join(",");
                        var templateSms = $('#templateSms').val();
                        $.ajax({
                            url: $(this).data('url'),
                            type: 'post',
                            data: {
                                '_token': _token,
                                'ids': join_selected_values,
                                'message': message,
                                'templateSms': parseInt(templateSms)
                            },
                            success: function (data) {
                                alert(data.success);
                                $('#message').val('')
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });

                    }
                }
            });

//

            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();

                $.ajax({
                    url: ele.href,
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        console.log(data.responseText)
                    }
                });

                return false;
            });
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
    <link href="{{asset('dashboard/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}"
          rel="stylesheet"/>

@endsection