@extends('layouts.app')
	@section('content')
		<h3>Edit This Message. ID No: {{ $message->id }} </h3>

		<form method="post" action="/showMessage/update/{{ $message->id }}">
{{-- CSRF token --}}
		@csrf

		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{ $message->name }}">
		  </div>

		  <div class="form-group">
		    <label for="name">Email</label>
		    <input type="email" class="form-control" id="email" name="email" value="{{ $message->email }}">
		  </div>

		  <div class="form-group">
		    <label for="message">Message</label>
		    <textarea class="form-control" id="message" name="message" rows="5">{{ $message->message }}</textarea>
		  </div>
		  <input class="btn btn-success" type="submit" name="update" value="Update">
		</form>

	@endsection