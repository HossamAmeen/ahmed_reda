@extends('front-end.ar.layout.app')
@section('header')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=1662110714071839&autoLogAppEvents=1"></script>
@endsection
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
													<img class="img-fluid" src="{{asset('uploads/articles/'.$artical->image)}}">
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="article-content">
											<h1 class="article-h">
													<a href="{{url('ar/article/'.$artical->id)}}">{{$artical->title}} </a>
											</h1>
											<i class="far fa-calendar-alt"></i> <span>{{$artical->date}} </span> 
											<p class="n-paragraph">
													
													{{ $artical->ar_sub_des }}
										</p>
										<hr>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					
					
				</div>
				<div class="article-pagination">
					<div class="pagina">
						<nav aria-label="...">
							<ul class="pagination">
								{{-- <li class="page-item active" aria-current="page">
									<a class="page-link" href="#">1</a>
									<span class="sr-only">(current)</span>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">التالي <i class="fas fa-arrow-left"></i></a>
								</li> --}}
								{{ $articals->links() }} 
							</ul>
						</nav>
					</div>
				</div>
				{{-- <div class="text-center">{{ $articals->links() }} </div> --}}
			
	</div>
	<!--==================================================================== 
			End Articls
	   =====================================================================-->
	
	   @endsection