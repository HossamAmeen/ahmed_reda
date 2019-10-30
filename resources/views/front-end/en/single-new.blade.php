@extends('front-end.en.layout.app')
@section('content')	
	<!--==================================================================== 
			Start News
	   =====================================================================-->
	
	<div class="same-new">
		<div class="container">
			<div class="title-of-new">
			<h3>{{$news->en_title}}</h3>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="photo-of-new">
						<img src="{{asset('uploads/news/'.$news->image)}}">
					</div>
				</div>
				<div class="col-md-6">
					<p class="single-detail">
						{{$news->en_description}}
					</p>
					<div class="new-content">
						
						<ul class="list-unstyled">
							<li><i class="fas fa-user"></i>clinic</li>
							<li><i class="far fa-calendar-alt"></i> {{$news->date}} </li>
							{{-- <li><i class="fas fa-comment"></i> 4 comments</li> --}}
						</ul>
						<div class="views">
							{{-- <span> <i class="fas fa-eye"></i> 123 view</span> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	{{-- <div class="related">
		<div class="container">
			<h3 class="hed-related">related news</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="relat-one">
						<img src="images/agree-ankreuzen-arrangement-2.png">
					</div>
					<div class="related-content">
						<h3>the new </h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
						<a href="#">more...</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="relat-one">
						<img src="images/agree-ankreuzen-arrangement-2.png">
					</div>
					<div class="related-content">
						<h3>the new </h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
						<a href="#">more...</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="relat-one">
						<img src="images/agree-ankreuzen-arrangement-2.png">
					</div>
					<div class="related-content">
						<h3>the new </h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
						<a href="#">more...</a>
					</div>
				</div>
				
			</div>
			
		</div>
	</div> --}}
	
	
	<!--==================================================================== 
			End News
	   =====================================================================-->
	
	
@endsection
