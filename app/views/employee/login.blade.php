@extends('site')

@section('content')

	<div class="container" style="max-width:330px">
	    <h2 class="form-signin-heading">Please sign in</h2>

	    {{ Form::open(['route' => ['employee.signin', 'method' => 'post']]) }}
	    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email adress', 'required', 'autofocus']) }}
		{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
		{{ Form::checkbox('remember-me')}}
		{{ Form::label('Remember me')}}
	    {{ Form::submit('Sign in', ['class' => 'btn btn-lg btn-primary btn-block']) }}
	    {{ Form::close() }}
    </div>

@stop