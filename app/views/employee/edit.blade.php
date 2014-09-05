@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td> Firstname 			</td>
				<td> Lastname 			</td>
				<td> Email 				</td>
				<td> Password 			</td>
				<td> Password_confirm 	</td>
			</tr>
		</thead>
		<tbody>
			<tr>
					 {{ Form::open(['route' => ['employees.update', $employee->id], 'method' => 'put']) }}
				<td> {{ Form::text('firstname', 	$employee->firstname)}}				</td>
				<td> {{ Form::text('lastname',	$employee->lastname)}}					</td>
				<td> {{ Form::email('email',		$employee->email)}}					</td>
				<td> {{ Form::password('password')}}									</td>
				<td> {{ Form::password('password_confirm')}}							</td>
				<td> {{ Form::submit('Change', ['class' => 'btn btn-success']) }}		</td>
					 {{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop

@section('navbar')
	<div class="navbar-header">
		<a class="navbar-brand" href='../employees'>Employees</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='../tasks'>All Tasks</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='../tasks/me'>My Tasks</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='../categories'>Categories</a>
	</div>
	<div class="navbar-header pull-right">
		<a class="navbar-brand" href='../login'>Login</a>
	</div>
	<div class="navbar-header pull-right">
		<a class="navbar-brand" href='../employees/create'>Register</a>
	</div>
@stop