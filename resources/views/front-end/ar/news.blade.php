@extends('front-end.ar.layout.app')
@section('content')

<!--==================================================================== 
			Start News
	   =====================================================================-->

<div class="news">
	<div class="container">
		<div class="page-header text-center">
			<h1>اخبار العيادة</h1>
			<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور</p>
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
											<a href="{{url('ar/	news/'.$new->id)}}">{{$new->title}}</a>	
									</h1>
									<ul class="list-unstyled">
										<li><i class="fas fa-user"></i>العيادة</li>
										<li><i class="far fa-calendar-alt"></i> {{$new->date}} </li>
										{{-- <li><i class="fas fa-comment"></i> 4 تعليقات</li> --}}
									</ul>
									<p class="n-paragraph">
										{{$new->description}}
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
				
				{{-- <div class="n-info">
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
									عنوان الخبر
								</h1>
								<ul class="list-unstyled">
									<li><i class="fas fa-user"></i>العيادة</li>
									<li><i class="far fa-calendar-alt"></i> اغسطس 2019 </li>
									<li><i class="fas fa-comment"></i> 4 تعليقات</li>
								</ul>
								<p class="n-paragraph">
									لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبو
								</p>
								<hr>
								<div class="views">
									<span> <i class="fas fa-eye"></i> 123 مشاهدة</span>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="col-md-4">
				<div class="blugin-facebook">
					<img class="img-fluid" src="{{asset('web/ar/images/architecture-art-artistic-1702624.jpg')}}">
				</div>
			</div>
		</div>
		
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
						<a class="page-link" href="#">التالي <i class="fas fa-arrow-left"></i></a>
					</li>
				</ul>
			</nav>
		</div> --}}
	</div>

	{{ $news->links() }}

</div>

<!--==================================================================== 
			End News
	   =====================================================================-->
@endsection