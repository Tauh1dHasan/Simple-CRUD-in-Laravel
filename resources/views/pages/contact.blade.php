@extends('layouts.app')
    @section('content')
        <h1>Contact Page</h1>
        <form action="/contact" method="post">
        	@csrf
        	<div class="form-group">
        		<label for="name">Name *</label>
        		<input class="form-control" type="text" name="name" id="name" placeholder="Type your full name" required>
        	</div>

        	<div class="form-group">
        		<label for="email">Email *</label>
        		<input class="form-control" type="email" name="email" id="email" placeholder="Type your valid email address" required>
        	</div>

        	<div class="form-group">
        		<label for="message">Message</label>
        		<textarea class="form-control" name="message" id="message" placeholder="Type your full name"></textarea>
        	</div>
      
        	<div class="form-group">
        		<input class="btn btn-success p-2" type="submit" name="submit" value="Send">
        	</div>
        </form>
    @endsection
    
