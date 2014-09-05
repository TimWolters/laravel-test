@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>description</th>
				<th>category_id</th>
				<th>employee_id</th>
				<th>due_date</th>
				<th>completed_at</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->title}}</td>
					<td>{{$row->description}}</td>
					<td>{{$row->category_id}}</td>
					<td>{{$row->employee_id}}</td>
					<td>{{$row->due_date}}</td>
					<td>{{$row->completed_at}}</td>
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
		</tbody>
	</table>
@stop

	