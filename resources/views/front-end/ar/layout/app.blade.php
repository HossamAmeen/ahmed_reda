<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nour - Personal Portfolio HTML Template">
    <meta name="keywords" content="new, html, Nour, design, creative, onepage, Portfolio, personal, advanced,">
    
    <!-- Main Page Title -->
    <title>الرئيسية</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    
     <!-- All css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/all.css')}}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/animate.css')}}">
    <!-- Magnific css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/magnific-popup.css')}}">
    <!-- Owl carousel css  -->
    <link rel="stylesheet" href="{{asset('web/ar/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/ar/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/ar/css/owl.theme.green.min.css')}}">
    <!-- Bootstrap 4 css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('web/ar/css/fontawesome.min.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/main.css')}}">
	
	<link rel="shortcut icon" href="{{asset('web/ar/favicon.ico')}}" />


</head>
<body>
   
    
     <!--==================================================================== 
			Start NavBar		
	   =====================================================================-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
			  <a class="navbar-brand" href="#">
				  <div class="log">
					  <img src="{{asset('web/ar/images/Web 1280 – 5.png')}}" class="img-fluid">
				  </div>
				</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item">
					<a class="nav-link" href="index.html">الرئيسية</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="services.html">خدمات العيادة</a>
				  </li>
					<li class="nav-item">
					<a class="nav-link" href="news.html">الاخبار</a>
				  </li>
					<li class="nav-item">
					<a class="nav-link" href="ask.html">سؤال وجواب</a>
				  </li>
					<li class="nav-item">
					<a class="nav-link" href="booking.html">احجز</a>
				  </li>
					
				</ul>
				 <ul class="navbar-nav mr-auto">
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  اللغة
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">العربية</a>
					  <a class="dropdown-item" href="#">الانجليزيه</a>
					</div>
				  </li>
				</ul>
			  </div>
			</div>
	   </nav>
			
	<!--==================================================================== 
			End NavBar		
	   =====================================================================-->
	
	
	   @yield('content')
	
	
	<!--==================================================================== 
			Start  Footer
	   =====================================================================-->
	
	<div class="footer section">
		<div class="container">
			
			<div class="row">
				<div class="col-md-4">
					<div class="social">
						<ul class="list-unstyled">
							<li><i class="fab fa-whatsapp"></i></li>
							<li><i class="fab fa-instagram"></i></li>
							<li><i class="fab fa-facebook-f"></i></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="links">
						<ul class="list-unstyled">
							<li><a href="about.html">عن الطبيب</a></li>
							<li><a href="news.html">الأخبار</a></li>
							<li><a href="services.html">الخدمات</a></li>
						</ul>
						<ul class="list-unstyled">
							<li><a href="ask.html">سوال وجواب</a></li>
							<li><a href="booking.html">احجز</a></li>
							<li><a href="hepling.html">مساعدة</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="logo">
						<img class="img-fluid" src="{{asset('web/ar/images/Web%201280%20%E2%80%93%203.png')}}">
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	
	<!--==================================================================== 
			End Footer
	   =====================================================================-->
	
	
	<!--==================================================================== 
			Start Copy
	   =====================================================================-->
	<div class="copy">
		<div class="container">
			<h4 class="text-center">copy right @ zedy 2019</h4>
		</div>
	</div>
	
		<!--==================================================================== 
			End Copy
	   =====================================================================-->
    
    
     
    
    
    
    
     <!--  jQuery js  -->
    <script src="{{asset('web/ar/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Popper Js  -->
    <script src="{{asset('web/ar/js/popper.min.js')}}"></script>
    <!-- Bootstrap 4 Js  -->
    <script src="{{asset('web/ar/js/bootstrap.min.js')}}"></script>
    
   
    
    <!-- OWL Carousel JS  -->
    <script src="{{asset('web/ar/js/owl.carousel.js')}}"></script>
	<script src="{{asset('web/ar/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JS  -->
    <script src="{{asset('web/ar/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter To JS  -->
    <script src="{{asset('web/ar/js/jquery.countTo.js')}}"></script>
    <!--  WOW Js  -->
    <script src="{{asset('web/ar/js/wow.min.js')}}"></script>
    <!-- Script Font Awesome 5 -->
    <script defer src="{{asset('web/ar/js/fontawesome.min.js')}}"></script>
    <!-- My Custom Js  -->
    <script src="{{asset('web/ar/js/main.js')}}"></script>
	
   
    
</body>

</html>