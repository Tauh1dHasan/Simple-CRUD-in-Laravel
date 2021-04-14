@extends('layouts.app')
	@section('content')
		<h3>Here is single data from the database</h3>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Message</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $message->name }}</td>
					<td>{{ $message->email }}</td>
					<td>{{ $message->message }}</td>
				</tr>
			</tbody>
		</table>
	@endsection