@extends('site')

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Category</td>
				<td>Employee</td>
				<td>Due_date</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				{{ Form::open(array('action' => 'TaskController@store')) }}
				<td>{{ Form::text('title')}}										</td>
				<td>{{ Form::text('description')}}									</td>
				<td>{{ Form::select('category_id', $categories)}}						</td>
				<td>{{ Form::select('employee_id', $employees)}}						</td>

				<!--<td><p>{{ Form::text('date_of_birth', '', array('class' => 'form-control','data-datepicker' => 'datepicker')) }}</p></td>-->
				<!--<td class="input-group">
					{{ Form::text('year', 	null, ['class' => 'input-group-m col-xs-2 text-center', 'placeholder' => 'yyyy']) }}
					{{ Form::text('month', 	null, ['class' => 'input-group-m col-xs-2 text-center', 'placeholder' => 'mm']) }}
					{{ Form::text('day', 	null, ['class' => 'input-group-m col-xs-2 text-center', 'placeholder' => 'dd']) }}
					{{ Form::text('hours', 	null, ['class' => 'input-group-m col-xs-2 text-center', 'placeholder' => 'hh']) }}
					{{ Form::text('minutes',null, ['class' => 'input-group-m col-xs-2 text-center', 'placeholder' => 'mm']) }} </td> -->
				<td>{{ Form::text('due_date',null,['placeholder' => 'yyyy-mm-dd hh:mm:ss']) }}									</td>
				<td>{{ Form::submit('Add', ['class' => 'btn btn-success']) }}		</td>
				{{ Form::close() }}
			</tr>
		</tbody>
	</table>
@stop