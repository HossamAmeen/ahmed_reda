@extends('front-end.ar.layout.app')
@section('content')
	
	<!--==================================================================== 
			Start News
	   =====================================================================-->
	
	<div class="same-new">
		<div class="container">
			<div class="title-of-new">
			<h3>{{$news->title}}</h3>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="photo-of-new">
						<img src="{{asset('uploads/news/'.$news->image)}}">
					</div>
				</div>
				<div class="col-md-6">
					<p class="single-detail">
						{{
							$news->description
						}}
					</p>
					<div class="new-content">
						
						<ul class="list-unstyled">
							<li><i class="fas fa-user"></i>العيادة</li>
							<li><i class="far fa-calendar-alt"></i>{{$news->date}}</li>
							{{-- <li><i class="fas fa-comment"></i> 4 تعليقات</li> --}}
						</ul>
						<div class="views">
							{{-- <span> <i class="fas fa-eye"></i> 123 مشاهدة</span> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	{{-- <div class="related">
		<div class="container">
			<h3 class="hed-related">اخبار ذات صلة</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="relat-one">
						<img src="images/agree-ankreuzen-arrangement-2.png">
					</div>
					<div class="related-content">
						<h3>عنوان الخبر </h3>
						<p>أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت</p>
						<a href="#">المزيد...</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="relat-one">
						<img src="images/agree-ankreuzen-arrangement-2.png">
					</div>
					<div class="related-content">
						<h3>عنوان الخبر </h3>
						<p>أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت</p>
						<a href="#">المزيد...</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="relat-one">
						<img src="images/agree-ankreuzen-arrangement-2.png">
					</div>
					<div class="related-content">
						<h3>عنوان الخبر </h3>
						<p>أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت</p>
						<a href="#">المزيد...</a>
					</div>
				</div>
				
			</div>
			
		</div>
	</div> --}}
	
	
	<!--==================================================================== 
			End News
	   =====================================================================-->
	
	   @endsection