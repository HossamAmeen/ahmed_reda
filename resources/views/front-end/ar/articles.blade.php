@extends('front-end.ar.layout.app')
@section('content')
	
		
	<!--==================================================================== 
		Start ِِArticls
	   =====================================================================-->
	<div class="articles">
		<div class="container">
			<div class="article-header text-center">
				<h1>المقالات</h1>
			</div>
		</div>
	</div>
	
	<div class="article-details">
		<div class="container">
				<div class="row">
					@foreach ($articals as $artical)
					<div class="col-sm-6">
							<div class="article-info">
								<div class="row">
									<div class="col-md-4">
										<div class="article-image">
											<div class="article-photo">
													<img class="img-fluid" src="{{asset('uploads/articals/'.$artical->image)}}">
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="article-content">
											<h1 class="article-h">
													<a href="{{url('ar/artical/'.$artical->id)}}">{{$artical->title}} </a>
											</h1>
											<i class="far fa-calendar-alt"></i> <span>{{$artical->date}} </span> 
											<p class="n-paragraph">
													<?php echo substr($artical->description , 20) ; ?>
										</p>
										<hr>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					
					
				</div>
			
	</div>
	<!--==================================================================== 
			End Articls
	   =====================================================================-->
	
	   @endsection