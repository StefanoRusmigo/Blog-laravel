@extends('layouts/layout')

@section('content')
  {{ Form::open(['url' => '/posts','files'=>true]) }}
  {{ Form::token() }}

  <div class="form-group">
  {!! Form::label('title', 'Title') !!}
  {{ Form::text('title', '', ['class'=>'form-control','id'=>'title']) }}
</div>

 <div class="form-group">
  {{ Form::label('body', 'Body') }}
  {{ Form::textarea('body', null, array('class'=>'form-control','id'=>'body')) }}
</div>

 <div class="form-group">
  {{ Form::file('image') }}
</div>

 <div class="form-group">
  {{ Form::submit('Publish') }}
</div>

  {{   Form::close()  }}

 @include('layouts.errors')


@endsection