@extends('front-end.en.layout.app')
@section('meta')	
<meta property="og:url"                content="{{url('ar/news/'.$data->id)}}" />
<meta property="og:type"               content="news" />
<meta property="og:title"              content="{{$data->en_title}}" />
<meta property="og:description"        content="{{$data->en_sub_des}}" />
<meta property="og:image"              content="{{asset('uploads/news/'.$data->image)}}" />
@endsection
@section('content')	
	<!--==================================================================== 
			Start News
	   =====================================================================-->
	
	<div class="same-new">
		<div class="container">
			<div class="title-of-new">
			<h3>{{$data->en_title}}</h3>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="photo-of-new">
						<img src="{{asset('uploads/news/'.$data->image)}}">
					</div>
				</div>
				<div class="col-md-6">
						<div class="new-content">
						
								<ul class="list-unstyled">
								
									<li><i class="far fa-calendar-alt"></i> {{$data->date}} </li>
									
								</ul>
								
							</div>
					<p class="single-detail">
						{!!$data->en_description!!}
					</p>
					
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="related">
			<div class="container">
				<h3 class="hed-related">related news</h3>
				<div class="row">
					@foreach ($datas as $single_news)
					<div class="col-md-4">
							<div class="relat-one">
									<img src="{{asset('uploads/news/'.$single_news->image)}}">
							</div>
							<div class="related-content">
									<h3><a style="color:#e0393b" href="{{url('en/news/'.$single_news->id)}}">{{$single_news->en_title}}</a></h3>
								
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
