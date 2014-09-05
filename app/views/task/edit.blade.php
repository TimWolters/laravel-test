@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td> Title 		 </td>
				<td> Description </td>
				<td> Category_id </td>
				<td> Employee_id </td>
			</tr>
		</thead>
		<tbody>
			<tr>
					 {{Form::open(['route' => ['tasks.update', $task->id], 'method' => 'put'])}}
				<td> {{ Form::text('title', $task->title)}}							</td>
				<td> {{ Form::text('description', $task->description)}}				</td>
				<td> {{ Form::select('category_id', $categories)}}					</td>
				<td> {{ Form::select('employee_id', $employees)}}					</td>
				<td> {{ Form::submit('Change', ['class' => 'btn btn-success']) }}	</td>
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