@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Name</td>
				<td>Description</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				{{ Form::open(array('action' => 'CategoryController@update')) }}
				<td>{{ Form::text('name',		 $category->name)}}					</td>
				<td>{{ Form::text('description', $category->description)}}				</td>
				<td>{{ Form::submit('Change', 	['class' => 'btn btn-success']) }}	</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
	
	@stop