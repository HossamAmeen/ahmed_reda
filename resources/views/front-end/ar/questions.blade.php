@extends('front-end.ar.layout.app')
@section('content')

<!--==================================================================== 
			Start Ask
	   =====================================================================-->

<div class="asking">
	<div class="container">
		<div class="asking-header text-center">
			<h1>سؤال وجواب</h1>
			<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور</p>
		</div>

	</div>
</div>

<div class="asking-info">
	<div class="container">
		@foreach ($questions as $question)
		<button type="button" class="collapsible">{{$question->question}}</button>
		<div class="content">
		<p>{{$question->answer}}</p>
		</div>	
		@endforeach
	</div>
</div>
@endsection