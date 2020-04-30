
@extends('layouts.app')

@section('content')
<script type="text/javascript" src="http://getbootstrap.com/assets/js/jquery.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="wrap-collabsible">
                    <input id="collapsible" class="toggle" type="checkbox">
                        <label for="collapsible" class="lbl-toggle">New Task</label>
                            <div class="collapsible-content">
                                <div class="content-inner">
                                    <div class="card-body">
                                        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                       <div class="form-group">
                                        {{Form::label('', '')}}
                                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::label('', '')}}
                                        {{Form::textarea('body', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                                        </div>
                                        {{Form::submit('Add Task', ['class'=>'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>



<style>
input[type='checkbox'] {
display: none;
}

.lbl-toggle {

display: block;

font-weight: bold;
/* font-family: monospace; */
/* font-size: 1.2rem;
text-transform: uppercase; */
text-align: left;
padding: 1rem;
background: rgba(211,211,211, 0.4);
color:  rgba(0,0,0, 0.5);
cursor: pointer;
transition: all 0.15s ease-out;

}

.lbl-toggle:hover {
color:  rgba(0,0,0, 0.8);
background: rgba(144,144,144,0.3);
}

.lbl-toggle::before {
content: ' ';
display: inline-block;

border-top: 5px solid transparent;
border-bottom: 5px solid transparent;
border-left: 5px solid currentColor;

vertical-align: middle;
margin-right: .7rem;
transform: translateY(-2px);

transition: transform .2s ease-out;
}

.collapsible-content .content-inner {
background: rgba(240,240,240);

border-bottom-left-radius: 7px;
border-bottom-right-radius: 7px;
padding: .5rem 1rem;
}

.collapsible-content {
max-height: 0px;
overflow: hidden;

transition: max-height .25s ease-in-out;
}

.toggle:checked + .lbl-toggle + .collapsible-content {
max-height: 100vh;
}
</style>

<div class="card-body">







@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>



@endif
{{-- <a href="/posts/create" class="btn btn-primary" style="border:1 px solid gray">Create Note</a> --}}

{{-- <h3>Tasks</h3> --}}

@if(count($posts) > 0)
<table class="table table-striped">

<tr>
<th>Current Tasks</th>
<th></th>
<th></th>
<th></th>
</tr>
@foreach($posts as $post)
<tr>
<td>{{$post->title}}</td>
<td><a href="/posts/{{$post->id}}" class="btn btn-default" style="border: 1px solid gray">View</a></td>
<td>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
</td>
<th></th>
</tr>
@endforeach
</table>
@else
<p>You have no notes. Create one!</p>
@endif
</div>
</div>
</div>
</div>
</div>
<br><br><br><br><br>
@endsection


