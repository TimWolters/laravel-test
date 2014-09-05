@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td> id 			</td>
				<td> Name 			</td>
				<td> Description 	</td>
			</tr>
		</thead>
		<tbody>
			<tr>
					 {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) }}
				<td> {{ Form::text('name', $category->name)}}						</td>
				<td> {{ Form::text('description', $category->description)}}			</td>
				<td> {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}	</td>
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