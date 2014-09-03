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
				{{ Form::open(array('action' => 'CategoryController@store')) }}
				<td>{{ Form::text('name')}}										</td>
				<td>{{ Form::text('description')}}								</td>
				<td>{{ Form::submit('Add', ['class' => 'btn btn-success']) }}	</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop