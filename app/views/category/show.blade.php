@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td> id 			</td>
				<td> Name 			</td>
				<td> Description 	</td>
				<td> Created_at 	</td>
				<td> Updated_at 	</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td> {{ Form::label($row->id)}}				</td>
				<td> {{ Form::label($row->name)}}			</td>
				<td> {{ Form::label($row->description)}}	</td>
				<td> {{ Form::label($row->created_at)}}		</td>
				<td> {{ Form::label($row->updated_at)}}		</td>
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