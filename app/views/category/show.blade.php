@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Description</td>
				<td>Created_at</td>
				<td>Updated_at</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ Form::label($row->id)}}										</td>
				<td>{{ Form::label($row->name)}}									</td>
				<td>{{ Form::label($row->description)}}								</td>
				<td>{{ Form::label($row->created_at)}}								</td>
				<td>{{ Form::label($row->updated_at)}}								</td>
			</tr>
		</tbody>
	</table>
@stop