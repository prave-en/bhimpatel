@extends('layouts.dashboard')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a>
            </div>
        </div>

        <div class="row-fluid">
            {{-- START INTRODUCTION --}}
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Personal-info</h5>
                    </div>

                    <div class="widget-content nopadding">
                        @if (!empty($data['introduction']))
                            <form action="{{ route('intro.update', ['intro' => $data['introduction']->id]) }}"
                                method="POST" class="form-horizontal">
                                @method('PUT')
                            @else
                                <form action="{{ route('intro.store') }}" method="POST" class="form-horizontal">
                        @endif
                        @csrf
                        <div class="control-group">
                            <label class="control-label">Full Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="full name" name="full_name"
                                    value="{{ $data['introduction']->full_name ?? '' }}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email :</label>
                            <div class="controls">
                                <input type="email" class="span11" placeholder="email" name="email"
                                    value="{{ $data['introduction']->email ?? '' }}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Phone Number :</label>
                            <div class="controls">
                                <input type="number" class="span11" placeholder="phone number" name="phone"
                                    value="{{ $data['introduction']->phone ?? '' }}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Address :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="address" name="address"
                                    value="{{ $data['introduction']->address ?? '' }}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" class="span11" placeholder="DOB" name="dob"
                                    value="{{ $data['introduction']->dob ?? '' }}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Intro:</label>
                            <div class="controls">
                                <div id="toolbar-container"></div>

                                <textarea id="editor" name="intro" id="" cols="30" rows="10"
                                    value="{{ $data['introduction']->intro ?? '' }}">{{ $data['introduction']->intro ?? '' }}</textarea>
                                <span class="help-block">Description field</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- END INTRODUCTION --}}
            {{-- BLOGS START --}}
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-refresh"></i> </span>
                        <h5>BLOGS</h5>
                        <a class="btn btn-primary" style="display:flex;float:right" href="{{ route('blogs.create') }}"><i
                                class="icon-plus"></i></a>
                    </div>
                    <div class="widget-content nopadding updates">
                        @foreach ($data['blogs'] as $blog)

                            <div class="new-update clearfix">
                                @if (count($blog->blogimages)>0)
                                    <i><img height='50' width="50" src="{{ asset('blogs/') . '/' . $blog->blogimages[0]->image }}" alt=""></i>
                                @else
                                    <i><img height='50' width="50" src="" alt=""></i>
                                @endif
                                <span class="update-notice">
                                    <a title="" href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">
                                        <strong>{{ $blog->title }} </strong>
                                    </a>
                                    <span>{{ $blog->short_description }}</span>
                                </span>
                                <span class="update" style="display:flex!important;float:right!important">
                                    <small> {{ $blog->created_at->format('Y/m/d') }}</small>
                                </span>
                            </div>
                        @endforeach
                    </div>
                    <div class="widget-title">
                        <a class="btn btn-info" href="{{route('blogs.index')}}">View All</a>
                    </div>
                </div>
            </div>
            {{-- BLOGS END --}}

        </div>


        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Form Elements</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Select input</label>
                                <div class="controls">
                                    <select>
                                        <option>First option</option>
                                        <option>Second option</option>
                                        <option>Third option</option>
                                        <option>Fourth option</option>
                                        <option>Fifth option</option>
                                        <option>Sixth option</option>
                                        <option>Seventh option</option>
                                        <option>Eighth option</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Multiple Select input</label>
                                <div class="controls">
                                    <select multiple>
                                        <option>First option</option>
                                        <option selected>Second option</option>
                                        <option>Third option</option>
                                        <option>Fourth option</option>
                                        <option>Fifth option</option>
                                        <option>Sixth option</option>
                                        <option>Seventh option</option>
                                        <option>Eighth option</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Radio inputs</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="radios" />
                                        First One</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Second One</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Third One</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Checkboxes</label>
                                <div class="controls">
                                    <label>
                                        <input type="checkbox" name="radios" />
                                        First One</label>
                                    <label>
                                        <input type="checkbox" name="radios" />
                                        Second One</label>
                                    <label>
                                        <input type="checkbox" name="radios" />
                                        Third One</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">File upload input</label>
                                <div class="controls">
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Disabled Input</label>
                                <div class="controls">
                                    <input type="text" placeholder="You can't type anything…" disabled="" class="span11">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
