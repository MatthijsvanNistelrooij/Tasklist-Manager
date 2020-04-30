@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

{{-- <div class="form-group">
    {{form::file('cover_image')}}
</div> --}}

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection


{{-- @extends('layouts.app')

@section('content')

<h1>Create Post</h1>
<form method="post" action="{{ route('posts.store') }}">
    <div class="form-group">
        @csrf
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title"/>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="summary-ckeditor" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

 --}}
