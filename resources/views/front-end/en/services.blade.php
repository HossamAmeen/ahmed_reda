
@extends('front-end.en.layout.app')
@section('content')	
	<!--==================================================================== 
			Start Services
	   =====================================================================-->
	
	<div class="services">
		<div class="container">
			<div class="service-header text-center">
				<h1>Clinic Services</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			</div>
			<div class="serv-info">
				<div class="row">
					@foreach ($services as $item)
					<div class="col-sm-6">
							<div class="test-serv">
								<div class="row">
								<div class="col-md-4">
									<div class="serv-photo">
									  <div class="serv-img">
									  <img src="{{asset('uploads/services/'.$item->image)}}" class="img-fluid">
									  </div>
								  </div>	
								</div>
								<div class="col-md-8">
									<div class="serv-content">
										<h2>{{$item->en_title}}</h2>
										<p>{{$item->en_description}}</p>
									</div>
								</div>
							</div>
							</div>
							
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<hr>
	</div>
	
	
	<!--==================================================================== 
			End Services
	   =====================================================================-->
	
	
	
	
	   @endsection
