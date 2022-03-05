@extends('layouts.dashboard')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a>
            </div>
        </div>

        <div class="row-fluid">

            {{-- START CREATE BLOG --}}
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Blog Information</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @if (!empty($data['blog']))
                            <form action="{{ route('blogs.update', ['blog' => $data['blog']->id]) }}" method="POST"
                                enctype='multipart/form-data'>
                                @method('PUT')
                            @else
                                <form action="{{ route('blogs.store') }}" method="POST"  enctype='multipart/form-data'>
                        @endif

                        @csrf
                        {{-- blog title --}}
                        <div class="control-group">
                            <label class="control-label">Blog Title :</label>
                            <div class="controls">
                                <input type="text" name="title" value="{{ $data['blog']->title ?? '' }}">
                                <span class="help-block">blog title</span>
                            </div>
                        </div>
                        {{-- short description --}}
                        <div class="control-group">
                            <label class="control-label">Short Description :</label>
                            <div class="controls">
                                <textarea name="short_description" id="editor"
                                    value="{{ $data['blog']->short_description ?? '' }}">
                                                            {{ $data['blog']->short_description ?? '' }}
                                                        </textarea>
                                <span class="help-block">short description:</span>
                            </div>
                        </div>
                        {{-- long description --}}
                        <div class="control-group">
                            <label class="control-label">Long Description :</label>
                            <div class="controls">
                                <textarea name="long_description" id="editor2" value="{{ $data['blog']->long_description ?? '' }}">
                                    {{ $data['blog']->long_description ?? '' }}
                                </textarea>
                                <span class="help-block">long description :</span>
                            </div>
                        </div>
                        <br>
                        {{-- BLOG IMAGES --}}
                        <div class="widget-title blue"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>BLOG IMAGES</h5>
                            <a id="add_row" class="btn btn-primary" style="display:flex;float:right"><i class="icon-plus"></i></a>
                        </div>
                        <div class="field_wrapper row-fluid">
                            @if (isset($data['blog']->blogimages) and count($data['blog']->blogimages) > 0 )
                                @foreach ($data['blog']->blogimages as $item)
                                    <div class="clearfix">
                                        <div class="span3">
                                            <label for="">Image</label>
                                            <input type="file" class="form-control" name="image[]">
                                        </div>
                                        <div class="span3">
                                            <label for="">Featured</label>
                                            <input type="checkbox" class="form-control" name="featured[]">
                                        </div>
                                        <div class="span3">
                                            <label for="">Show</label>
                                            <input type="checkbox" class="form-control" name="showhide[]">
                                        </div>
                                        <hr style="border-top: 1px solid rgb(22, 68, 37)">
                                    </div>
                                @endforeach
                            @else
                                <div class="clearfix">
                                    <div class="span3">
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="image[]">
                                    </div>
                                    <div class="span3">
                                        <label for="">Featured</label>
                                        <input type="checkbox" class="form-control" name="featured[]" >
                                    </div>
                                    <div class="span3">
                                        <label for="">Show</label>
                                        <input type="checkbox" class="form-control" name="showhide[]">
                                    </div>
                                    <hr style="border-top: 1px solid rgb(22, 68, 37)">
                                </div>
                            @endif
                        </div>

                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            var maxField = 10; //Input fields increment limitation
                            var addButton = $('#add_row'); //Add button selector
                            var wrapper = $('.field_wrapper'); //Input field wrapper
                            var fieldHTML =
                                '<div class="clearfix"><div class="span3"><label for="">Image</label><input type="file" class="form-control" name="image[]"></div><div class="span3"><label for="">Featured</label><input type="checkbox" class="form-control" name="featured[]" ></div><div class="span3"><label for="">Show</label><input type="checkbox" class="form-control" name="showhide[]"></div><div class="span3"><label for=""></label><a href="javascript:void(0);" class="btn btn-danger remove_button"><i class="icon-trash"></i></a></div><hr style="border-top: 1px solid rgb(22, 68, 37)" /></div>'; //New input field html 
                            var x = 1; //Initial field counter is 1

                            //Once add button is clicked
                            $(addButton).click(function() {
                                //Check maximum number of input fields
                                if (x < maxField) {
                                    x++; //Increment field counter
                                    $(wrapper).append(fieldHTML); //Add field html
                                 }
                            });

                            //Once remove button is clicked
                            $(wrapper).on('click', '.remove_button', function(e) {
                                e.preventDefault();
                                $(this).parent('div').parent('div').remove(); //Remove field html
                                x--; //Decrement field counter
                            });
                        });

                    </script>
                    {{-- END BLOGIMAGES --}}
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- END CREATE BLOG --}}
        {{-- BLOG IMAGES --}}
        <div class="span12">

        </div>
        {{-- END BLOGIMAGES --}}

    </div>
    </div>
    </div>
@endsection
