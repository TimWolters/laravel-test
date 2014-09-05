@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th> id 			</th>
				<th> title 			</th>
				<th> description 	</th>
				<th> category 		</th>
				<th> employee 		</th>
				<th> due_date		</th>
				<th> completed_at	</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $row)
				<tr>
					<td> {{$row->id}} 				</td>
					<td> {{$row->title}} 			</td>
					<td> {{$row->description}} 		</td>
					<td> {{$row->category->name}} 	</td>
					<td> {{$row->employee->email}} 	</td>
					<td> {{$row->due_date}}			</td>
					<td> {{$row->completed_at}}		</td>
					<td>
						{{Form::open(['route' => ['tasks.edit', $row->id], 'method' => 'get'])}}
						{{Form::submit('Edit', ['class' => 'btn btn-warning'])}}
						{{Form::close()}}
					</td>
					<td>
						{{Form::open(['route' => ['employees.destroy', $row->id], 'method' => 'delete'])}}
						{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
						{{Form::close()}}
					</td>
				</tr>
			@endforeach

			<tr>
				<td/>
					{{ Form::open(array('action' => 'TaskController@store')) }}
				<td> {{ Form::text('title')}}													</td>
				<td> {{ Form::text('description')}}												</td>
				<td> {{ Form::select('category_id', $categories)}}								</td>
				<td> {{ Form::select('employee_id', $employees)}}								</td>
				<td> {{ Form::text('due_date',null,['placeholder' => 'yyyy-mm-dd hh:mm:ss']) }} </td>
				<td> {{ Form::submit('Add', ['class' => 'btn btn-success']) }}					</td>
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