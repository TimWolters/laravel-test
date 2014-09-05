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
						{{Form::open(['route' => ['categories.edit', $row->id], 'method' => 'get'])}}
						{{Form::submit('Edit', ['class' => 'btn btn-warning'])}}
						{{Form::close()}}
					</td>
					<td>
						{{Form::open(['route' => ['categories.destroy', $row->id], 'method' => 'delete'])}}
						{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
						{{Form::close()}}
					</td>
				</tr>
			@endforeach
			<tr>
				<td /> <!-- spacing id -->
				{{ Form::open(array('action' => 'CategoryController@store')) }}
				<td>{{ Form::text('name')}}										</td>
				<td>{{ Form::text('description')}}								</td>
				<td>{{ Form::submit('Add', ['class' => 'btn btn-success']) }}	</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop

	