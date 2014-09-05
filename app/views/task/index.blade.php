@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th><a href='/tasks/order/id/asc'> 			id 			</a></th>
				<th><a href='/tasks/order/title/asc'> 		title 		</a></th>
				<th><a href='/tasks/order/description/asc'> description </a></th>
				<th><a href='/tasks/order/category/asc'> 	category 	</a></th>
				<th><a href='/tasks/order/employee/asc'> 	employee 	</a></th>
				<th><a href='/tasks/order/due_date/asc'> 	due_date	</a></th>
				<th><a href='/tasks/order/completed_at/asc'>completed_at</a></th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $row)
				<tr>
					<td> {{$row->id}} 														</td>
					<td> {{$row->title}} 													</td>
					<td> {{$row->description}} 												</td>
					<td> {{$row->category->name}} 											</td>
					<td> {{$row->employee->email}} 											</td>
					<td><a href='/tasks/before/{{$row->due_date}}'> {{$row->due_date}}	</a></td>
					<td> {{$row->completed_at}}												</td>
					<td>
						{{Form::open(['route' => ['tasks.edit', $row->id], 'method' => 'get'])}}
						{{Form::submit('Edit', ['class' => 'btn btn-warning'])}}
						{{Form::close()}}
					</td>
					<td>
						{{Form::open(['route' => ['tasks.destroy', $row->id], 'method' => 'delete'])}}
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
				<!--<td> {{ Form::select('category_id', $categories)}}								</td>
				<td> {{ Form::select('employee_id', $employees)}}								</td>-->
				<td> {{ Form::text('due_date',null,['placeholder' => 'yyyy-mm-dd hh:mm:ss']) }} </td>
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