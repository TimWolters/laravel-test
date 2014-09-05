@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Description</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				{{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) }}
				<td>{{ Form::text('name',		 $category->name)}}					</td>
				<td>{{ Form::text('description', $category->description)}}			</td>
				<td>{{ Form::submit('Submit', 	['class' => 'btn btn-success']) }}	</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop