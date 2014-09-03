@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Category_id</td>
				<td>Employee_id</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				{{ Form::open(array('action' => 'TaskController@store')) }}
				<td>{{ Form::text('title', $task->title)}}							</td>
				<td>{{ Form::text('description', $task->description)}}				</td>
				<td>{{ Form::text('category_id', $task->category_id)}}				</td>
				<td>{{ Form::text('employee_id', $task->employee_id)}}				</td>
				<td>{{ Form::submit('Change', ['class' => 'btn btn-success']) }}	</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
	
	@stop