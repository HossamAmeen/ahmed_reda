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

                                    <li><i class="far fa-calendar-alt"></i> {{$new->date}} </li>

                                </ul>
                                <p class="n-paragraph">

                                    {{ \Illuminate\Support\Str::limit($new->sub_des, 150 ) }}
                                </p>
                                <hr>
                                <div class="views">
                                    <span> <i class="fas fa-eye"></i> 123 view</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="pagina">
                        <nav aria-label="...">
                            <ul class="pagination">
                                {{ $news->links() }}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blugin-facebook">
                    <div class="fb-page" data-href="https://www.facebook.com/UROClinicDrAhmedReda/" data-tabs="timeline"
                        data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/UROClinicDrAhmedReda/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/UROClinicDrAhmedReda/">‎Uro-Clinic - عيادة دكتور أحمد رضا
                                لجراحات ومناظير المسالك البولية‎</a></blockquote>
                    </div>
                    {{-- <img class="img-fluid" src="{{asset('web/en/images/architecture-art-artistic-1702624.jpg')}}">
                    --}}
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