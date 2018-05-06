@extends('admin_layout.master')
@section('content')
admin space

@endsection

@section('js')
    <script src="{{asset('dashboard/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>


@endsection

@section('css')

    <link href="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>


@endsection
