@extends('layouts.master')

@section('content')

	<form action="{{route('contactPost')}}" method="post" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
		<input type="text" class="form-control" name="name" placeholder="Name">
			
		</div>
	<div class="form-group">
		
		<input type="email" class="form-control" name="email[]" placeholder="Enter  work EMail">
				
	</div>
		<div class="form-group">
		
		<input type="email" class="form-control" name="email[]" placeholder="Enter personal EMail">
				
	</div>


	<div class="form-group">
		<textarea cols="35" class="form-control" rows="14" name ="message"placeholder="Enter your message">
			
		</textarea>
		
	</div>
	
		
		<input type="file"  name="attachment" >
				
	
	<div class="form-group">
	<button type="submit" class="form-control"> Send Message</button>
		
	</div>


	
	</form>


@endsection