@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
  <h1>Edit todo</h1>

  {!! Form::open(array('action' => ['ToDosController@update', $todo->id ], 'method' => 'POST')) !!}
      {{ Form::bsHidden('_method', 'PUT') }}
      {{ Form::bsText('text', $todo->text) }}
      {{ Form::bsTextArea('body', $todo->body) }}
      {{ Form::bsText('due', $todo->due) }}
      {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}

@endsection
