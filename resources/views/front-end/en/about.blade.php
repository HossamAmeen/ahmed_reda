@extends('front-end.en.layout.app')
@section('content')
	<!--==================================================================== 
			Start About
	   =====================================================================-->
	
	<div class="doctor">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="doct-photo">
						<img src="{{asset('web/en/images/%D8%A7%D8%AD%D9%85%D8%AF%20%20%20%D8%B1%D8%B6%D8%A7.png')}}" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div class="doctor-header">
						<h1>D Ahmed Reda</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="markes">
		<div class="container">
			<h1>Lorem Ipsum </h1>
			<div class="markes-info">
				<div class="row">
					<div class="col-md-4">
						<div class="marke-content">
							<h3>Lorem Ipsum is simply dummy</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
						</div>
						<div class="marke-photo">
							<img src="{{asset('web/en/images/agree-ankreuzen-arrangement-2.png')}}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="marke-content">
							<h3>Lorem Ipsum is simply dummy</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
						</div>
						<div class="marke-photo">
							<img src="{{asset('web/en/images/agree-ankreuzen-arrangement-2.png')}}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="marke-content">
							<h3>Lorem Ipsum is simply dummy</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
						</div>
						<div class="marke-photo">
							<img src="{{asset('web/en/images/agree-ankreuzen-arrangement-2.png')}}">
						</div>
					</div>
				</div>
				
				<div class="main-marke">
					<div class="row">
						<div class="col-md-9 col-sm-6">
							<div class="m-content">
								<h3>Lorem Ipsum is simply dummy</h3>
								<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing. Lorem  Lorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="main-photo">
								<img src="{{asset('web/en/images/background-blank-close-up-998591.png')}}">
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection
