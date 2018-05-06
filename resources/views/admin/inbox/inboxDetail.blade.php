@extends('admin_layout.master')


@section('content')
    <div class="white-box">
        <div class="col-md-4 inbox-panel">
            <div>
                <a href="{{url('inbox   ')}}" class="btn btn-custom btn-block waves-effect waves-light">{{__('inbox.inbox')}}</a>
                <div class="list-group mail-list m-t-20">

                    <a href="#" class="list-group-item active">
                        {{__('inbox.read')}}
                        <span class="label label-rouded label-success pull-right">
                                        {{$read}}
                                    </span>
                    </a>
                    <a href="#" class="list-group-item">
                        {{__('inbox.unread')}}
                        <span class="label label-rouded label-warning pull-right">
                                        {{$unread}}
                                    </span>
                    </a>

                </div>

            </div>
        </div>
        <div class="col-md-8 mail_listing">
            <div class="media m-b-30 p-t-20">
                <div class="media m-b-30 p-t-20">
                    <h4 class="font-bold m-t-0">{{$message->subject}}</h4>
                    <hr>
                    <a class="pull-left" href="#">
                        <img class="media-object thumb-sm img-circle"  style="height: 50px;width: 50px" src="{{asset('avatar/default-avatar.png')}}" alt="">
                    </a>
                    <div class="media-body">
                        <div class="media-body">
                            <span class="media-meta pull-right">{{ date_format(new DateTime($message->created_at),'d M')}}</span>
                            <h4 class="text-danger m-0 text-left">{{$message->sender}}</h4>
                            <small class="text-muted">{{$message->email}}</small>
                        </div>
                    </div>

                </div>
                <div class="m-b-30 p-t-20">
                    <h4 class=" text-center">
                        {{$message->message}}
                    </h4>
                </div>

            </div>
            <a href="#" class="btn btn-info btn-rounded btn-outline text-center center-block" data-toggle="modal" data-target=".reply">{{__('inbox.reply')}}</a>
        </div>

    </div>


    <div class="modal fade reply" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myLargeModalLabel">{{__('inbox.reply')}}</h4>
                </div>
                <div class="modal-body text-center">
                    <form action="{{url('reply/')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <span>{{__('inbox.to')}}</span>
                            <input class="form-control" name="email"  value="{{$message->email}}">
                        </div>
                        <div class="form-group">
                            <span>{{__('inbox.subject')}}</span>
                            <input class="form-control" name="subject" value="Reply : {{$message->subject}}">
                        </div>
                            <textarea class="textarea_editor form-control" name="message" rows="15"></textarea>
                        <hr>
                        <button type="submit" class="btn btn-info"><i class="fa fa-envelope-o"></i> {{__('inbox.send')}}</button>
                        <button data-dismiss="modal" class="btn btn-default"> {{__('dashboard.close')}}</button>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



@endsection

@section('js')

    <script src="{{asset('dashboard/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('.textarea_editor').wysihtml5();

        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('dashboard/js/custom.min.js')}}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('dashboard/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css')}}"/>

@endsection