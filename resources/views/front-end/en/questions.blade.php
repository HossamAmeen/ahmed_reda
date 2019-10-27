@extends('front-end.en.layout.app')
@section('content')
	
	<!--==================================================================== 
			Start Ask
	   =====================================================================-->
	
	<div class="asking">
		<div class="container">
			<div class="asking-header text-center">
				<h1>Ask $ Answers</h1>
				<p>Lorem Ipsum is simply dummy textLorem Ipsum is simply dummy text</p>
			</div>
			
		</div>
	</div>
	
	<div class="asking-info">
		<div class="container">
			@foreach ($questions as $question)
			<button type="button" class="collapsible">{{$question->en_question}}</button>
			<div class="content">
			<p>{{$question->en_answer}}</p>
			</div>	
			@endforeach
	
		</div>
	</div>
@endsection
