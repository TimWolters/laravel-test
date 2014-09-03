@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				@foreach ($keys as $key)
					<th>{{ $key }}</th>
				@endforeach
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
					<td>
						<form action="tasks/{{ $row->id }}/edit" method="get">
						<button type='submit' class='btn btn-warning'>Change</button></form>
					</td>
					<td>
						<form action="tasks/{{ $row->id }}" method="delete">
						<button type='submit' class='btn btn-danger'>Delete</button></form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop

	