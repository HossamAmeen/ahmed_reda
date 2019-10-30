@extends('front-end.en.layout.app')
@section('content')
<!--==================================================================== 
			Start News
	   =====================================================================-->

<div class="news">
	<div class="container">
		<div class="page-header text-center">
			<h1>Clinic News</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
		</div>

	</div>
</div>




<div class="new-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
					@foreach ($news as $new)
					<div class="n-info">
							<div class="row">
								<div class="col-md-4">
									<div class="n-photo">
										<div class="new-photo">
											<img class="img-fluid" src="{{asset('uploads/news/'.$new->image)}}">
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="n-content">
										<h1 class="n-header">
												<a href="{{url('en/news/'.$new->id)}}">{{$new->en_title}}</a>	
										</h1>
										<ul class="list-unstyled">
											<li><i class="fas fa-user"></i>clinic</li>
											<li><i class="far fa-calendar-alt"></i> {{$new->date}} </li>
											{{-- <li><i class="fas fa-comment"></i> 4 تعليقات</li> --}}
										</ul>
										<p class="n-paragraph">
											{{$new->en_description}}
										</p>
										<hr>
										{{-- <div class="views">
											<span> <i class="fas fa-eye"></i> 123 مشاهدة</span>
										</div> --}}
									</div>
								</div>
							</div>
						</div>
					@endforeach
				
			</div>
			<div class="col-md-4">
				<div class="blugin-facebook">
					<img class="img-fluid" src="{{asset('web/en/images/architecture-art-artistic-1702624.jpg')}}">
				</div>
			</div>
		</div>
		{{ $news->links() }}
		{{-- <div class="pagina">
			<nav aria-label="...">
				<ul class="pagination">

					<li class="page-item active" aria-current="page">
						<a class="page-link" href="#">1</a>
						<span class="sr-only">(current)</span>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a>
					</li>
				</ul>
			</nav>
		</div> --}}
	</div>



</div>

<!--==================================================================== 
			End News
	   =====================================================================-->
@endsection