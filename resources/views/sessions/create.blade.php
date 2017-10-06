@extends('layouts.layout')

@section('content')
<h1>Login</h1>
<form method="post" action="/login">
{{ csrf_field() }}
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input class="form-control" type="email" name="email" id="email">		
	</div>

	<div class="form-group">
	  <label for="password">Password:</label>
	  <input class="form-control" type="password" name="password" id="password">
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary" type="submit">login</button>
	</div>
	@include('layouts.errors')
</form>

@endsection