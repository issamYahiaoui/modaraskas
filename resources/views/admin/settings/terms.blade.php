@extends('admin_layout.master')


@section('content')



    <div class="col-md-12">
        <div class="white-box text-center">


            <div class="row">
                <div class="col-md-12">
                    @if(count($errors->all())>0)
                        <div class="alert alert-danger text-center col-md-12 ">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-minus"></i></span>
                            </button>
                            <ul class="list-unstyled text-center">
                                @foreach($errors->all() as $error)
                                    <li class="text-center">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div id="alert" class="alert alert-success text-center col-md-12">

                            {{Session::get('success')}}
                            <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i class="fa fa-minus" ></i></span>
                        </div>
                    @endif
                </div>
                {!! Form::open(["url"=>"saveTerms/".$settings->id]) !!}
                {!! csrf_field() !!}

                <div class="col-md-12">

                    <br><br>
                    <label class="col-md-12" for="example-text">{{__('lang.ar_teacher_terms')}} </label>
                    <br><br>
                    <textarea id="ar_teacher_terms" name="ar_teacher_terms">{{$settings->ar_teacher_terms}}</textarea>


                </div>
                <br><br>
                <div class="col-md-12">
                    <br><br>
                    <label class="col-md-12" for="example-text">{{__('lang.en_teacher_terms')}} </label>
                    <br><br>
                    <textarea id="en_teacher_terms" name="en_teacher_terms">{{$settings->en_teacher_terms}}</textarea>

                </div>
                <br><br>

                <div class="col-md-12">
                    <br><br>
                    <label class="col-md-12" for="example-text">{{__('lang.ar_student_terms')}} </label>
                    <br><br>
                    <textarea id="ar_student_terms" name="ar_student_terms">{{$settings->ar_student_terms}}</textarea>

                </div>
                <br><br>

                <div class="col-md-12">
                    <br><br>
                    <label class="col-md-12" for="example-text">{{__('lang.en_student_terms')}} </label>
                    <br><br>
                    <textarea id="en_student_terms" name="en_student_terms">{{$settings->en_student_terms}}</textarea>
                </div>
                <br><br>
                <div class="col-md-12">
                    <br><br>
                    <label class="col-md-12" for="example-text">{{__('lang.ar_parent_terms')}} </label>
                    <br><br>
                    <textarea id="ar_parent_terms" name="ar_parent_terms">{{$settings->ar_parent_terms}}</textarea>
                </div>
                <br><br>
                <div class="col-md-12">
                    <br><br>
                    <label class="col-md-12" for="example-text">{{__('lang.en_parent_terms')}} </label>
                    <br><br>
                    <textarea id="en_parent_terms" name="en_parent_terms">{{$settings->en_parent_terms}}</textarea>
                </div>
                <br><br>

                <div class="col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-info"> {{__('dashboard.submit')}}</button>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('dashboard/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css')}}"/>

@endsection

@section('js')
    <script src="{{asset('dashboard/plugins/bower_components/tinymce/tinymce.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            if ($("#ar_teacher_terms").length > 0) {
                tinymce.init({
                    selector: "textarea#ar_teacher_terms",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#en_teacher_terms").length > 0) {
                tinymce.init({
                    selector: "textarea#en_teacher_terms",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#ar_student_terms").length > 0) {
                tinymce.init({
                    selector: "textarea#ar_student_terms",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#en_student_terms").length > 0) {
                tinymce.init({
                    selector: "textarea#en_student_terms",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#ar_parent_terms").length > 0) {
                tinymce.init({
                    selector: "textarea#ar_parent_terms",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#en_parent_terms").length > 0) {
                tinymce.init({
                    selector: "textarea#en_parent_terms",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }


        });


        function copyToClipboardFF(text) {
            window.prompt ("Copy to clipboard: Ctrl C, Enter", text);
        }

        function copyToClipboard() {

        }

        $('.copyElement').click(function(){
            id=$(this).attr('input-id');
            var input = document.getElementById(id);
            var success   = true,
                range     = document.createRange(),
                selection;

            // For IE.
            if (window.clipboardData) {
                window.clipboardData.setData("Text", input.value);
            } else {
                // Create a temporary element off screen.
                var tmpElem = $('<div>');
                tmpElem.css({
                    position: "absolute",
                    left:     "-1000px",
                    top:      "-1000px",
                });
                // Add the input value to the temp element.
                tmpElem.text(input.value);
                $("body").append(tmpElem);
                // Select temp element.
                range.selectNodeContents(tmpElem.get(0));
                selection = window.getSelection ();
                selection.removeAllRanges ();
                selection.addRange (range);
                // Lets copy.
                try {
                    success = document.execCommand ("copy", false, null);
                }
                catch (e) {
                    copyToClipboardFF(input.val());
                }
                if (success) {
//                    alert ("The text is on the clipboard, try to paste it!");
                    // remove temp element.
                    tmpElem.remove();
                }
            }
        });
    </script>
@endsection