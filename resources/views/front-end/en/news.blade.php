@extends('front-end.en.layout.app')
@section('content')
<!--==================================================================== 
			Start News asd
	   =====================================================================-->

<div class="news">
	<div class="container">
		<div class="page-header text-center">
			<h1>Clinic News</h1>
		
		</div>

	</div>
</div>


  

	
<div class="new-detail">
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<div class="n-info">
				<div class="row">
					<div class="col-md-4">
						<div class="n-photo">
							<div class="new-photo">
								<img class="img-fluid" src="images/adult-banking-blur-935979.png">
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="n-content">
							<h1 class="n-header">
								<a href="single-new.html">The New</a>
							</h1>
							<ul class="list-unstyled">
								
								<li><i class="far fa-calendar-alt"></i> Aug 2019 </li>
								<li><i class="fas fa-comment"></i> 4 comments</li>
							</ul>
							<p class="n-paragraph">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry
							</p>
							<hr>
							<div class="views">
								<span> <i class="fas fa-eye"></i> 123 view</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="n-info">
				<div class="row">
					<div class="col-md-4">
						<div class="n-photo">
							<div class="new-photo">
								<img class="img-fluid" src="images/adult-banking-blur-935979.png">
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="n-content">
							<h1 class="n-header">
								<a href="single-new.html">The New</a>
							</h1>
							<ul class="list-unstyled">
							
								<li><i class="far fa-calendar-alt"></i> Aug 2019 </li>
								<li><i class="fas fa-comment"></i> 4 comments</li>
							</ul>
							<p class="n-paragraph">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry
							</p>
							<hr>
							<div class="views">
								<span> <i class="fas fa-eye"></i> 123 view</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="pagina">
				<nav aria-label="...">
				  <ul class="pagination">

					<li class="page-item active" aria-current="page">
						<a class="page-link" href="#">1</a>
						<span class="sr-only">(current)</span>
					  </li>
					<li class="page-item" >
					  <a class="page-link" href="#">2</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
					  <a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a>
					</li>
				  </ul>
				</nav>
			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="blugin-facebook">
				<div class="fb-page" data-href="https://www.facebook.com/UROClinicDrAhmedReda/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/UROClinicDrAhmedReda/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/UROClinicDrAhmedReda/">‎Uro-Clinic - Dr. Ahmed Reda Clinic for Urology and Endoscopic Surgeries‎</a></blockquote></div>
			</div>
		</div>
		</div>
	
		
	</div>	
	
	
	
</div>

<!--==================================================================== 
			End News
	   =====================================================================-->

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
					@foreach($articals as $artical)
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
										<i class="far fa-calendar-alt"></i> <span>{{$artical->date}}</span> 
										<p class="n-paragraph">
										
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