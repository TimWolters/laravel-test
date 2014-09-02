@extends('site')

@section('content')
	{{ Form::open(array('action' => 'EmployeeController@store'))}}
	{{ Form::label('firstname', 'First name')}}
	{{ Form::text('firstname')}}
	{{ Form::label('lastname', 'Last name')}}
	{{ Form::text('lastname')}}
	{{ Form::label('email', 'Email adres')}}
	{{ Form::email('email')}}
	{{ Form::label('password', 'Password')}}
	{{ Form::password('password')}}
	{{ Form::password('password_confirm')}}
	{{ Form::submit('Register')}}
	{{ Form::close()}}
	@stop