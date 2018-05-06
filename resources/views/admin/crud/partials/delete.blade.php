<button type="button"
        class="fcbtn btn btn-outline btn-danger btn-1fbtn-info btn-rounded"
        data-toggle="modal"
        data-target="#delete{{$model->id}}"
>
                                     <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                     </span>
    {{__('dashboard.delete')}}
</button>
<div class="modal fade" id="delete{{$model->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"
                    id="exampleModalLabel1">{{__('dashboard.delete')}} </h4>
            </div>
            <div class="modal-body">
                {{__('dashboard.confirmDelete')}}
            </div>
            <div class="col-md-12 text-center">
                <br>
                <form action="{{url($url.'/'.$model->id)}}"
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
