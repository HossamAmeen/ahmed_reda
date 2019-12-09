@extends('front-end.en.layout.app')
@section('content')
<!--==================================================================== 
			Start Header		
	   =====================================================================-->

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="person">
					<img src="{{asset('web/en/images/header/%D8%A7%D8%AD%D9%85%D8%AF%20%20%20%D8%B1%D8%B6%D8%A7.png')}}"
						class="img-fluid">
				</div>
			</div>
			<div class="col-md-6">
				<div class="header-content">
					<h1>D Ahmed Reda</h1>
					@if(isset($briefs->en_home_description))
					<p>{{$briefs->en_home_description}}</p>

					@endif

				</div>
				<div class="hed-logo">
					<img src="{{asset('web/en/images/Web 1280 – 4.png')}}">
				</div>
			</div>

		</div>
	</div>

</div>

<!--==================================================================== 
			End Header	
	   =====================================================================-->



<!--==================================================================== 
			Start Drugs	
	   =====================================================================-->

<div class="clincs section">
	<div class="container">
		<div class="main">
			<div class="child ch__1">
				<div class="t">
					<div class="t1-img">
						<img src="{{asset('web/en/images/akxy8ppu.png')}}" class="img-fluid">
					</div>
				</div>
				<h5 class=" all-head hed-child1">Lorem Ipsum is simply dummy text of the printing </h5>
			</div>
			<div class="child ch__2">
				<div class="t">
					<div class="t2-img">
						<img src="{{asset('web/en/images/shutterstock-409477429.png')}}" class="img-fluid">
					</div>
				</div>

				<h5 class="all-head hed-child2">Lorem Ipsum is simply dummy text of the printing</h5>
			</div>
			<div class="child ch__3">
				<div class="t">
					<div class="t3-img">
						<img src="{{asset('web/en/images/nerered3.png')}}" class="img-fluid">
					</div>
				</div>

				<h5 class="all-head hed-child3">Lorem Ipsum is simply dummy text of the printing</h5>
			</div>
			<div class="child ch__4">
				<div class="t">
					<div class="t4-img">
						<img src="{{asset('web/en/images/shutterstock-34425004.png')}}" class="img-fluid">
					</div>
				</div>
				<h5 class="all-head hed-child4">Lorem Ipsum is simply dummy text of the printing</h5>
			</div>
			<div class="child ch__5">
				<div class="t">
					<div class="t5-img">
						<img src="{{asset('web/en/images/shutterstock-204017278.png')}}" class="img-fluid">
					</div>
				</div>

				<h5 class="all-head hed-child5">Lorem Ipsum is simply dummy text of the printing</h5>
			</div>
			<div class="child ch__6">
				<div class="t">
					<div class="t6-img">
						<img src="{{asset('web/en/images/تبول.png')}}" class="img-fluid">
					</div>
				</div>

				<h5 class="all-head hed-child6">Lorem Ipsum is simply dummy text of the printing</h5>
			</div>
			<div class="child ch__7">
				<div class="t">
					<h6 class="ch-head">
						Clinic Services
					</h6>
				</div>

			</div>
		</div>
	</div>

</div>
<!--==================================================================== 
			End Drugs	
	   =====================================================================-->


<!--==================================================================== 
			Start Articles
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
			@foreach ($articals1 as $item)
			<div class="col-sm-6">
					<div class="article-info">
						<div class="row">
							<div class="col-md-4">
								<div class="article-image">
									<div class="article-photo">
										<img class="img-fluid" src="{{asset('uploads/articals/'.$item->image)}}">
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="article-content">
									<h1 class="article-h">
										<a href="{{url('en/artical/'.$item->id)}}">{{$item->en_title}}</a>
									</h1>
									<i class="far fa-calendar-alt"></i> {{$item->date}}
								
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		
		</div>
		<div class="row">
				@foreach ($articals2 as $item)
				<div class="col-sm-6">
						<div class="article-info">
							<div class="row">
								<div class="col-md-4">
									<div class="article-image">
										<div class="article-photo">
												<img class="img-fluid" src="{{asset('uploads/articals/'.$item->image)}}">
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="article-content">
										<h1 class="article-h">
											<a href="{{url('en/artical/'.$item->id)}}">{{$item->en_title}}</a>
										</h1>
										<i class="far fa-calendar-alt"></i>{{$item->date}}
								
										<hr>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			
			</div>
		
	</div>
</div>
<!--==================================================================== 
			End Articls
	   =====================================================================-->



<!--==================================================================== 
			Start Operations	
	   =====================================================================-->

<div class="operations section">
	<div class="container">
		<h1 class="text-center">operations</h1>

		<hr class="first-line">
		<div class="row text-center main-row">
			@foreach ($operations as $operation)

			<div class=" col-md-12 col-lg-4">
				<div class="ope-image">
					<img src="{{asset('uploads/operations/'.$operation->image)}}">
				</div>
				<a class="ope-type" href="#" class="ope-type">{{$operation->en_title}}</a>
			</div>

			@endforeach


		</div>
		{{-- <hr class="first-line">
		<div class="row text-center main-row">
			@foreach ($operation2 as $operation)

			<div class=" col-md-12 col-lg-4">
				<div class="ope-image">
					<img src="{{asset('uploads/operations/'.$operation->image)}}">
	</div>
	<a class="ope-type" href="#" class="ope-type">{{$operation->en_title}}</a>
</div>

@endforeach

</div>
<div class="row text-center main-row">
	@foreach ($operation3 as $operation)

	<div class=" col-md-12 col-lg-4">
		<div class="ope-image">
			<img src="{{asset('uploads/operations/'.$operation->image)}}">
		</div>
		<a class="ope-type" href="#" class="ope-type">{{$operation->en_title}}</a>
	</div>

	@endforeach

</div> --}}


</div>
</div>


<!--==================================================================== 
			End Operations	
	   =====================================================================-->







<!--==================================================================== 
			Start Drugs
	   =====================================================================-->

<div class="drugs section">
	<div class="container">
		<div class="drugs-content">
			<h1>Treatment of male types</h1>
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-6">
							<ul class="list-unstyled">

								@foreach ($drugs2 as $drug)
								<li>
									<a href="#">{{$drug->en_title}}</a>
								</li>
								@endforeach

							</ul>
						</div>
						<div class="col-sm-6">
							<ul class="list-unstyled">
								@foreach ($drugs1 as $drug)
								<li>
									<a href="#">{{$drug->en_title}}</a>
								</li>
								@endforeach

							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--==================================================================== 
			End Drugs
	   =====================================================================-->


<!--==================================================================== 
			Start Photo
	   =====================================================================-->



<!--==================================================================== 
			End Photo
	   =====================================================================-->



<!--==================================================================== 
			Start News
	   =====================================================================-->

<div class="news section">
	<div class="news-content">
		<h1 class="text-center">News</h1>
	</div>

	<div class="container">
		<div class="row">
			@foreach ($news as $item)
			<div class="col-md-4">
				<div class="news-details">
					<div class="news-image">
						<img class="img-fluid" src="{{asset('uploads/news/'.$item->image)}}">
					</div>
					<div class="new-title text-center">
						<h1><a href="{{url('en/news/'.$item->id)}}">{{$item->en_title}}</a></h1>
						{{-- <p> {{substr($item->en_description , 0 ,70 ) }} </p> --}}
						<span>{{$item->date}}</span>
					</div>
				</div>
			</div>
			@endforeach


		</div>
		<div class="more-news text-center">
			<a href="{{url('en/news')}}" class="more"> More News</a>
		</div>
	</div>


</div>

<!--==================================================================== 
			End News
	   =====================================================================-->


<!--==================================================================== 
			Start Videos
	   =====================================================================-->

<div class="videos section">
	<div class="videos-content">
		<h1 class="text-center">videos</h1>
	</div>

	<div class="container">
		<div class="row">
			@if(isset($briefs->video))
			<div class="col-sm-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="{{$briefs->video}}" allowfullscreen></iframe>
				</div>

			</div>
			@endif
			@if(isset($briefs->video2))
			<div class="col-sm-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="{{$briefs->video2}}" allowfullscreen></iframe>
				</div>
			</div>
			@endif
		</div>
		@if(isset($briefs->youtube))
		<div class="more-videos text-center">
			<a href="{{$briefs->youtube}}" class="vmore">more videos</a>
		</div>
		@endif
	</div>



</div>

<!--==================================================================== 
			End videos
	   =====================================================================-->


<!--==================================================================== 
			Start Videos
	   =====================================================================-->

<div class="ask section">
	<div class="container">
		<div class="ask-content">
			<h1 class="text-center">Ask & Answer</h1>
		</div>
		<div class="container">
			@foreach ($questions as $item)
			<div class="question">
				<h1>{{$item->en_question}}</h1>

				<div class="testo">{{$item->en_answer}}</div>
				<i class="fas fa-sort-down"></i>
			</div>
			@endforeach
			<div class="more-asks text-center">
				<a href="{{url('en/questions')}}" class="askmore">More Questions</a>
			</div>
		</div>
	</div>
</div>
<!--==================================================================== 
			End videos
	   =====================================================================-->

<!--==================================================================== 
			Start Places
	   =====================================================================-->

<div class="places section">
	<div class="places-content">
		<h1 class="text-center">Clinic Places</h1>
	</div>

	<div class="container">
		<div class="row text-center">

			@foreach ($clinics as $item)
			<div class="col-md-4">
				<div class="place-content">
					<p>{{$item->en_address}}</p>
					<p>{{$item->en_appointment}}</p><span>{{$item->phone}} </span><i class="fas fa-phone"></i>
				</div>
			</div>
			@endforeach


		</div>
	</div>
	<img class="img-fluid place-image" src="{{asset('web/en/images/Web%201280%20%E2%80%93%202.png')}}">

</div>

<!--==================================================================== 
			End Places
	   =====================================================================-->
@endsection