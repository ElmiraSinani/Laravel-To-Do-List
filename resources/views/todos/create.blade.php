@extends('layouts.app')

@section('content')
  <h1>Creae todo</h1>

  {!! Form::open(array('action' => 'ToDosController@store', 'method' => 'POST')) !!}
      {{ Form::bsText('text') }}
      {{ Form::bsTextArea('body') }}
      {{ Form::bsText('due') }}
      {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}

@endsection
