@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				@foreach ($keys as $key)
					<th>{{ $key }}</th>
				@endforeach
				<th>Password</th>
				<th>Password_confirm</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $row)
				<tr>
					@foreach($keys as $key)
						<td>
							<a>{{$row->$key}}</a>
						</td>
					@endforeach

					<td /><td />

					<td>
						{{Form::open(['route' => ['employees.edit', $row->id], 'method' => 'get'])}}
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
				{{ Form::open(array('action' => 'EmployeeController@create')) }}
				<td />
				<td>{{ Form::text('firstname')}}										</td>
				<td>{{ Form::text('lastname')}}											</td>
				<td>{{ Form::email('email')}}											</td>
				<td>{{ Form::password('password')}}										</td>
				<td>{{ Form::password('password_confirm')}}								</td>
				<td>{{ Form::submit('Add', ['class' => 'btn btn-success']) }}			</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop

	