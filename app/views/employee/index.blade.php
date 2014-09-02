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
					{{Form::open(array('action' => 'EmployeeController@edit'))()}}
					@foreach($keys as $key)
						<td>
							{{$row->$key}}

						</td>
					@endforeach
					<td>
						 <input type="Submit" class="btn btn-warning" value="Change"/>
					{{Form::close()}}
						 <input type="button" class="btn btn-danger" value="Delete"/>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop

	