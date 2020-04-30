@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('', '')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('', '')}}
        {{Form::textarea('body', $post->body, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>

    {{-- <div class="form-group">
        {{form::file('cover_image')}}
    </div> --}}

        {{Form::hidden('_method', 'PUT')}}
    <button type="submit" class="btn btn-primary">Submit</button>
@method('PUT')

{!! Form::close() !!}
@endsection


