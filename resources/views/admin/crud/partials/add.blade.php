<div class="col-md-12">
    <div class="white-box text-center">
        <button type="button"
                class="fcbtn btn btn-outline btn-info btn-1fbtn-info btn-rounded "
                data-toggle="modal"
                data-target="#add">
                                     <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                     </span>
            {{__('lang.add')}}
        </button>

    </div>
</div>
<div class="modal fade" id="add" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"
                    id="exampleModalLabel1">{{__('lang.add')}} </h4>
            </div>
            <div class="modal-body">

                {!! Form::open(["url"=>$url]) !!}
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="col-md-12"
                           for="example-text">{{__('lang.ar_name')}}
                    </label>
                    <div class="col-md-12">
                        <input required="true" name="ar_name" type="text"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12"
                           for="example-email">{{__('dashboard.en_name')}}
                    </label>
                    <div class="col-md-12">
                        <input required="true" name="en_name" type="text"
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
