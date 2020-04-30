
    <script type="text/javascript" src="http://getbootstrap.com/assets/js/jquery.js"></script>

@extends('layouts.app')

@section('content')
    <a href="/dashboard" class="btn btn-default" style="color: white; border: 1px solid white">Ga Terug</a>
<br><br>
<div class="card-body" style="background-color: white">
    <h1>{{$post->title}}</h1>
    {{-- <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> --}}

    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Added on {{$post->created_at}} by: {{$post->user->name}}</small>
  <br><br>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="border: 1px solid gray">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
</div>
<br><br>

            <br><br><br><br>


        @endif
    @endif
@endsection


{{-- @extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default" style="border: 1px solid gray">Go Back</a>
            <br><br>
            <h1>{{$post->title}}</h1>

            <div>
            {!!$post->body!!}
            </div>
            <hr>
            <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
            <hr>

@if(!Auth::guest())

@if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default"  style="border: 1px solid gray">Edit</a>

            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endif
@endif
@endsection
 --}}
