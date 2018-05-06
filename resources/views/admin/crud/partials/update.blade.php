<button type="button"
        class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
        data-toggle="modal"
        data-target="#edit{{$model->id}}">
                                     <span class="btn-label">
                                        <i class="fa fa-edit"></i>
                                     </span>
    {{__('dashboard.edit')}}
</button>

<div class="modal fade" id="edit{{$model->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"
                    id="exampleModalLabel1">{{__('dashboard.edit')}} </h4>
            </div>
            <div class="modal-body">

                {!! Form::open(["url"=>$url.'/'.$model->id]) !!}
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="col-md-12"
                           for="example-text">{{__('lang.ar_name')}}
                    </label>
                    <div class="col-md-12">
                        <input required="true" name="ar_name" type="text"
                               value="{{$model->ar_name}}"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12"
                           for="example-email">{{__('dashboard.en_name')}}
                    </label>
                    <div class="col-md-12">
                        <input required="true" name="en_name" type="text"
                               value="{{$model->en_name}}"
                               class="form-control">
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <br>
                    <button class="btn btn-info"> {{__('dashboard.submit')}}</button>
                    {!! Form::close() !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {{__('dashboard.close')}}
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
