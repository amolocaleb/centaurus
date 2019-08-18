@extends('layouts.app')

@section('content')

@push('styles')
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

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
	margin: 1rem 0;
	box-shadow: .5rem .5rem 3rem rgba(0, 0, 0, 0.2);
	border-radius: 10px;

}
.card .card-img{ 
	width: 100%;
	height: 20rem;
	object-fit: cover;
	-webkit-clip-path:  polygon(0 0, 100% 0%, 100% 78%, 0% 100%);
	clip-path: polygon(0 0, 100% 0%, 100% 78%, 0% 100%);

}
.card .profile-img{
	width: 15rem;
	height: 15rem;
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
	margin: 1.5rem 0;
	font-style: italic;
	text-align: center;
	color: #333;
	padding: 0 1rem;
}
.card .btn{
	padding: 1rem 2.5rem;
	background-color: #45e19f;
	border-radius: 2rem;
	margin: 1rem 0;
	text-transform: uppercase;
	color:#eee;
	font-size: 1.4rem;
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
	padding: 2rem 0;
	margin-top: 1.5rem;
	border-top: 1px solid rgba(0, 0, 0, .1)
}
.social-media i{
	font-size: 3rem;
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

@media screen and (min-width: 700px){
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


</style>




<section>
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

			<!--Cards  -->
			<div class="card">
			<img src="img/portfolio_back.jpg" alt="card-background" class="card-img" >
			<img src="img/local.jpg" alt="profile picture" class="profile-img">
			<H1>Local Man</H1>
			<p class="job-title">Spectator</p>
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
	</div>
</section>

@endsection