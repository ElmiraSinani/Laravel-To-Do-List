@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="{{URL::to('/')}}">Go Back</a>
  <h1><a href="{{ url('/todo/'.$todo->id) }}">{{$todo->text}}</a></h1>
  <div class="label label-danger">{{$todo->due}}</div>
  <hr />
  <p>{{$todo->body}}</p>
  <hr/>
  <div class="text-right">
    <a class="btn btn-success" href="{{ url('/todo/'.$todo->id.'/edit') }}">Edit</a>
    {!! Form::open(array('action' => ['ToDosController@destroy', $todo->id ], 'method' => 'POST', 'class'=>'inline-block')) !!}
        {{ Form::bsHidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
  </div>
@endsection
