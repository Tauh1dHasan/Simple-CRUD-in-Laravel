@extends('layouts.app')
	@section('content')
		@if (session('updated'))
			{{-- Message updated success flash message --}}
			<div class="alert alert-success">
			    {{ session('updated') }}
			</div>

		@endif
		@if (session('deleted'))
			{{-- Message Deleted flash message --}}
			<div class="alert alert-danger">
			    {{ session('deleted') }}
			</div>

		@endif
		<h3>Here all Messages from database</h3>
		@if (count($messages) > 0)
			@foreach ($messages as $message)
				<ul class="list-group mb-3">
					<li class="list-group-item">
						Name: {{ $message->name }}
						<span class="float-right">
							<a href="/showMessage/{{ $message->id }}" class="btn btn-success">Show</a>
							<a href="/showMessage/edit/{{ $message->id }}" class="btn btn-primary">Edit</a>
						</span>
							{{-- Delete request must be POST --}}
							<form method="post" action="/showMessage/delete/{{ $message->id }}" class="float-right mr-2">
								{{-- CSRF token --}}
								@csrf
								<input type="submit" class="btn btn-danger" value="Delete">
							</form>
						
					</li>
				</ul>
			@endforeach
		@endif
	@endsection