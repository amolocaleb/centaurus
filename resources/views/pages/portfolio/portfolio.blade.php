@extends('layouts.app')

@section('content')

@push('styles')
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@endpush


<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
a{
    text-decoration: none;
    color: #ffffff;

}
section{
	padding: 10rem 0;
	background-color: #fff;
}
.heading{

	text-transform: uppercase;
	font-size: 3.5rem;
	letter-spacing: 3px;
	margin-right: -3px;
	margin-bottom: 2em;
	text-align: center;
	color: #333;
	position: relative;
}
.heading::after{
	content: "";
	width: 10rem;
	height: .8rem;
	background-color: #3cb5de;
	position: absolute;
	bottom: -2rem;
	left: 50%;
	transform: translateX(-50%);
	border-radius: 2rem;
}
.card-wrapper{
	display: flex;
	align-items: center;
	align-content: center;
	flex-direction: column;
}
.card{
	width: 19rem;
	background-color: #ebeef8;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	margin:  0;
	box-shadow: .5rem .5rem 3rem rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	border: none;


}
.card .card-img{ 
	width: 100%;
	height: 15rem;
	object-fit: cover;
	-webkit-clip-path:  polygon(0 0, 100% 0%, 100% 78%, 0% 100%);
	clip-path: polygon(0 0, 100% 0%, 100% 78%, 0% 100%);

}
.card .profile-img{
	width: 14rem;
	height: 14rem;
	object-fit: cover;
	border-radius: 50%;
	margin-top: -11rem;
	z-index: 999;
	border: .8rem solid  #ebeef8;
}
.job-title{
	color: #777;
	font-size: 1.5rem;
	font-weight: 300;

}
.about{
	font-size: 1rem;
	margin: 0 0;
	font-style: italic;
	text-align: center;
	color: #333;
	padding: 0 1rem;
}
.card .btn{
	padding: 1rem 2.5rem;
	background-color: #45e19f;
	border-radius: 2rem;
	margin:.5rem 0;
	text-transform: uppercase;
	color:#eee;
	font-size: 1rem;
	transition: all .5s;
}
.card .btn:hover{
transform: translateY(-4px);
box-shadow: .5rem .5rem 2rem rgba(0,0,0,.4);
}
.card .btn:active{
	transform: translateY(0);
	box-shadow: .none;
}
.social-media{
	width: 100%;
	list-style: none;
	display: flex;
	flex-direction: row;
	justify-content: space-evenly;
	padding: 1rem 0;
	margin-top: .5rem;

}
.social-media i{
	font-size: 2rem;
}

.fa-facebook-square{
	color:#3b5999;
}
.fa-twitter-square{
	color: #55acee;
}
.fa-linkedin-square{
	color: #0073b1;
}
.fa-google-plus-square{
	color:#dd4b39;
}
.fa-facebook-square:hover,
.fa-twitter-square:hover,
.fa-linkedin-square:hover,
.fa-google-plus-square:hover{
	opacity: .5;
}

@media screen and (min-width: 600px){
	.card-wrapper{
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
	}
	.card{
		margin: 2rem;
	}
}

.carousel{
	padding-top: -10rem;
	margin-top: -10rem;
	padding-bottom: 5rem;

}
.d-block{
	height: 28rem;
	object-fit: cover;
	filter: blur(5px);
	
}

.portfolioContainer{ 
	margin-left: -15px; 
	margin-right: -15px;
 }	

	 /* ---------------------------------
8. PROGRESSIONS SECTION
--------------------------------- */


.counter{ position: relative; }
	
	.counter .title{ text-align: right; margin-right: 130px; color: #FDAC05; }
	
	.counter .desc{ position: absolute; bottom: 4px; right: 0px; width: 110px; }

	@media only screen and (max-width: 1200px) {
	/* ---------------------------------
	9. COUNTER SECTION
	--------------------------------- */

	.counter-section{ text-align: center; padding: 50px 0 20px; }

	.counter{ display: inline-block; }
	
	.counter .desc{ text-align: left; }
}
.team{
	margin-bottom: 40px;
}
.team a{
	display: inline-block;
	margin: 0 30px;
	width: 160px;
	height: 160px;
	overflow:hidden;
	border-radius: 50%;
}
.team a img{
width: 120%;
filter: grayscale(100%);
transition: 0.4s all;

}
.section{
	width: 600px;
	margin:auto;
	font-size: 20px;
	text-align: justify;
	height: 0;
	overflow: hidden;
}
.section:target{
	height:auto;
}
.name{
	display:block;
	margin-bottom: 30px;
	text-align: center;
	text-transform:uppercase;
	font-size:22px;
}
</style>




<section>


	<!--carousel  -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="../images/client.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h3>First Testimonial</h3>
					<p>"Praesent commodo cursus magna, vel scelerisque nisl consectetur..."</p>
				</div>
		  </div>
		  <div class="carousel-item">
			<img src="../images/client2.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
					<h3>Second Testimonial</h3>
					<p>"Praesent commodo cursus magna, vel scelerisque nisl consectetur..."</p>
				</div>
		  </div>
		  <div class="carousel-item">
			<img src="../images/client3.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
					<h3>Third Testimonial</h3>
					<p>"Praesent commodo cursus magna, vel scelerisque nisl consectetur..."</p>
				</div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>



	<div class="container">

		



		<h1 class="heading"><b>Meet the team</b></h1>

	


		<div class="card-wrapper">
			<!--Cards  -->
			<div class="card">
			<img src="img/portfolio_back.jpg" alt="card-background"  class="card-img">
			<img src="img/ian.jpg" alt="profile picture" class="profile-img">
			<H1>Chikaia Dev</H1>
			<p class="job-title">Lead designer</p>
			<p class="about">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Est exercitationem, eius rerum
			</p>
			<a href="/Portfolio/s_portfolio" class="btn">View more</a>
			<ul class="social-media">
				<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				
			</ul>

			</div>

			<!--Cards  -->
			<div class="card">
			<img src="img/portfolio_back.jpg" alt="card-background"  class="card-img">
			<img src="img/colo.jpg" alt="profile picture" class="profile-img">
			<H1>Loco Msee</H1>
			<p class="job-title">Lion king fan</p>
			<p class="about">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Est exercitationem, eius rerum
			</p>
			<a href="/Portfolio/s_portfolio" class="btn">View more</a>
			<ul class="social-media" >
				<li ><a href="#"><i class="fab fa-facebook-square"></i></a></li>
				<li ><a href="#"><i class="fab fa-twitter-square"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
				<li ><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				
			</ul>

			</div>

			<!--Cards  -->
			<div class="card">
			<img src="img/portfolio_back.jpg" alt="card-background" class="card-img">
			<img src="img/cal.jpg" alt="profile picture" class="profile-img">
			<H1>Mr Korekt</H1>
			<p class="job-title">Git Gurru</p>
			<p class="about">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Est exercitationem, eius rerum
			</p>
			<a href="/Portfolio/s_portfolio" class="btn">View more</a>
			<ul class="social-media">
				<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				
			</ul>

			</div>

		
		</div>
		<!-- end of code wrapper-->


<!-- Progresion -->

		

	</div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection