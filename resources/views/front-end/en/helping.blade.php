
@extends('front-end.en.layout.app')
@section('content')	
	<!--==================================================================== 
			Start Ask
	   =====================================================================-->
	
	<div class="help">
		<div class="container">
			<div class="help-header text-center">
				<h1>Helping</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			</div>
			
		</div>
	</div>
	<div class="help-message">
		<div class="container">
			<div class="help-calling text-center">
			<ul class="list-unstyled">
				@if(isset($briefs->phone))	<li><i class="fas fa-phone"></i><span>{{$briefs->phone}}</span></li>@endif
			@if(isset($briefs->email))<li><i class="fas fa-envelope"></i><span>{{$briefs->email}}</span></li>@endif
			</ul>
			<form action="{{url('en/help')}}" method="POST">
				@csrf
				<div class="form-group">
				<textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
					<button  type="submit" class="btn btn-primary sent"> Send</button>
				</div>	
			</form>	
		</div>			
		</div>
	</div>
@endsection
