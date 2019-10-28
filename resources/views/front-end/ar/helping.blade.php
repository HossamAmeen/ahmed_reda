@extends('front-end.ar.layout.app')
@section('content')
	
	
	<!--==================================================================== 
			Start Ask
	   =====================================================================-->
	
	<div class="help">
		<div class="container">
			<div class="help-header text-center">
				<h1>للمساعدة</h1>
				<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور</p>
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
			<form action="{{url('ar/help')}}" method="POST">
				@csrf
			<div class="form-group">
			  <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="6" placeholder="رسالتك" required></textarea>
				<button type="submit" class="btn btn-primary sent"> ارسال</button>
			</div>
		</form>	
				
		</div>
			
			
			
		</div>
	</div>

	@endsection