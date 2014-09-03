@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Category</td>
				<td>Employee</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				{{ Form::open(array('action' => 'TaskController@store')) }}
				<td>{{ Form::text('title')}}										</td>
				<td>{{ Form::text('description')}}									</td>
				<td>{{ Form::text('category_id')}}									</td>
				<td>{{ Form::text('employee_id')}}									</td>
				<td>{{ Form::submit('Add', ['class' => 'btn btn-success']) }}		</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop