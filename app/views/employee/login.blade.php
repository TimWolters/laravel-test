@extends('site')

@section('content')

	<div class="container" style="max-width:330px">
		{{ Form::open(['route' => ['employee.signin', 'method' => 'post']]) }}
	    <h2 class="form-signin-heading">Please sign in</h2>
	    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email adress', 'required', 'autofocus']) }}
		{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
		{{ Form::checkbox('')}}
	    <label class="checkbox">
	      <input type="checkbox" value="remember-me"> Remember me</input>
	    </label>
	    {{ Form::submit('Sign in', ['class' => 'btn btn-lg btn-primary btn-block']) }}
	    {{ Form::close() }}
    </div> <!-- /container -->

@stop