@extends('front-end.en.layout.app')
@section('content')
	
	<!--==================================================================== 
			Start Booking
	   =====================================================================-->
	
	<div class="booking">
		<div class="container">
			<div class="page-header text-center">
				<h1>Booking</h1>
				
			</div>
		</div>
	</div>
	
	<div class="booking-form">
		<div class="container">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@if ( session('status') != null )
			  <div class="alert alert-success">
				{{session('status')}}
			  </div>
			  @endif
			<form action="{{url('en/booking')}}" method="POST">
				@csrf
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Name</label>
				  <input type="text" name="name" class="form-control" id="inputEmail4" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Mobile</label>
				  <input type="text" class="form-control" id="inputPassword4" name="phone" required>
				</div>
			  </div>
				<div class="form-group">
					  <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Notes" required></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary sign">Book now</button>
				  <button type="submit" class="btn btn-primary call"> <i class="fas fa-phone"></i> <span>Call</span></button>
			</form>
		</div>
	</div>
@endsection
