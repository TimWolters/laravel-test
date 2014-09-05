@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th><a href='/tasks/order/id/desc'> 			id 			</a></th>
				<th><a href='/tasks/order/title/desc'> 		title 			</a></th>
				<th><a href='/tasks/order/description/desc'> description 	</a></th>
				<th> category 													</th>
				<th> employees 													</th>
				<th><a href='/tasks/order/due_date/desc'> 	due_date		</a></th>
				<th><a href='/tasks/order/completed_at/desc'>completed_at	</a></th>
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
						{{Form::open(['route' => ['tasks.restore', $row->id], 'method' => 'post'])}}
						{{Form::submit('Restore', ['class' => 'btn btn-success'])}}
						{{Form::close()}}
					</td>
				</tr>
			@endforeach
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