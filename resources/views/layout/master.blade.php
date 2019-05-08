<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>master</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/master.css')}}">
	
</head>
<body>
	
	<!-- Common header -->
	<nav class="my-6">
		
		<div class="row  bg-dark">
			<div class="col-md-5 my-6 logo" >
				<a href="/">Brand/Logo</a>
				<!-- <img src="{{asset('image/logo.png')}}" alt="logo"> -->
			</div>
			<div class="col-md-7">
				<ul>
					<li class = "load_page" data-url="/home"><a href="#">Home</a></li>
					<li class = "load_page" data-url="/services"><a href="#" >Services</a></li>
					<li class = "load_page" data-url="/gallery"><a href="#" >Gallery</a></li>
					<li class = "load_page" data-url="/blog"><a href="#" >Blog</a></li>
					<li class = "load_page" data-url="/contact"><a href="#" >Contact</a></li>
					<li class = "load_page" data-url="/about"><a href="#" >About</a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-google-play"></i></a></li>
					<li><a href="#"><i class="fab fa-app-store"></i></a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End of header -->

	<!-- Body -->
	<div>
		<div class="wrapper">

			<div id="main_content">
				@include('home.index')
			</div>
		</div>

	</div>

	
	<!-- End of body -->

	<!-- Common footer -->
	
	<footer class="page-footer font-small blue bg-dark">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3 text-light">© 2019 Copyright:
	    
	  </div>
	  <!-- Copyright -->

	</footer>
	
	<!-- End of footer -->
	<script src="{{asset('js/master.js')}}"></script>
</body>
</html>