@extends('front-end.en.layout.app')
@section('content')
	
	
	<!--==================================================================== 
		Start ِِArticls
	   =====================================================================-->
	<div class="articles">
		<div class="container">
			<div class="article-header text-center">
				<h1>Articles</h1>
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
													<img class="img-fluid" src="{{asset('uploads/articles/'.$artical->image)}}">
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="article-content">
												<h1 class="article-h">
														<a href="{{url('en/article/'.$artical->id)}}">{{$artical->en_title}}</a>
													</h1>
													<i class="far fa-calendar-alt"></i> <span> {{$artical->date}} </span>
													<p class="n-paragraph">
														{{ $artical->en_sub_des}}
										</p>
										<hr>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				
					
				</div>
				{{ $articals->links() }}
	</div>
	<!--==================================================================== 
			End Articls
	   =====================================================================-->
	
	
	   @endsection