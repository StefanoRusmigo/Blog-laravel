@extends('layouts.layout')

@section('content')
<h1>Register</h1>
<form method="post" action="/register">
	{{ csrf_field() }}

	<div class="form-group" >
	  <label for="name">Name:</label>
	  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" required>
    </div>

	<div class="form-group" >
	  <label for="email">Email:</label>
	  <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" required>
    </div>

	<div class="form-group" >
	  <label for="password">Password:</label>
	  <input type="password" name="password" class="form-control" id="password">
    </div>

	<div class="form-group" >
	  <label for="password_confirmation">Password confirmation:</label>
	  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
    </div>

 	<div class="form-group" >
	  <button type="submit" class="btn btn-primary">Register</button> 
    </div>

@include('layouts.errors')

</form>
<a href="{{ route('login') }}">Login</a>

@endsection