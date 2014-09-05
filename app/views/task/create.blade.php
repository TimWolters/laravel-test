@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td> Title 			</td>
				<td> Description 	</td>
				<td> Category 		</td>
				<td> Employee 		</td>
				<td> Due_date 		</td>
			</tr>
		</thead>
		<tbody>
			<tr>
					 {{ Form::open(array('action' => 'TaskController@store')) }}
				<td> {{ Form::text('title')}}													</td>
				<td> {{ Form::text('description')}}												</td>
				<td> {{ Form::select('category_id', $categories)}}								</td>
				<td> {{ Form::select('employee_id', $employees)}}								</td>
				<td> {{ Form::text('due_date',null,['placeholder' => 'yyyy-mm-dd hh:mm:ss']) }}	</td>
				<td> {{ Form::submit('Add', ['class' => 'btn btn-success']) }}					</td>
					 {{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop

@section('navbar')
	<div class="navbar-header">
		<a class="navbar-brand" href='/employees'>Employees</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='/tasks'>All Tasks</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='/tasks/me'>My Tasks</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='/tasks/deleted'>Deleted Tasks</a>
	</div>
	<div class="navbar-header">
		<a class="navbar-brand" href='/categories'>Categories</a>
	</div>
@stop