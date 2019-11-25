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
						<div class="new-content">
						
								<ul class="list-unstyled">
								
									<li><i class="far fa-calendar-alt"></i>{{$news->date}}</li>
									
								</ul>
								
							</div>
					<p class="single-detail">
						{{
							$news->description
						}}
					</p>
					
				</div>
			</div>
		</div>
		
	</div>
	<div class="related">
			<div class="container">
				<h3 class="hed-related">اخبار ذات صلة</h3>
				<div class="row">
					@foreach ($newss as $single_news)
					<div class="col-md-4">
							<div class="relat-one">
									<img src="{{asset('uploads/news/'.$single_news->image)}}">
							</div>
							<div class="related-content">
									<h3>{{$single_news->title}}</h3>
									<p class="n-paragraph"><?php echo substr($single_news->description , 50 ); ?></p>
									<a href="{{url('ar/news/'.$single_news->id)}}">المزيد...</a>
							</div>
						</div>
					@endforeach
				
				
				</div>
				
			</div>
		</div>
	
	
	<!--==================================================================== 
			End News
	   =====================================================================-->
	
	   @endsection