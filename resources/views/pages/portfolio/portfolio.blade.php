@extends('layouts.app')

@section('content')

@push('styles')

@endpush

{{-- 
<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	a {
		text-decoration: none;
		color: #ffffff;

	}

	section {
		padding: 10rem 0;
		background-color: #fff;
	}

	span {
		color: #9e9e9e;
		font-size: 20px;
		padding-bottom: 2rem;
	}

	.heading {
		margin-top: 5rem;
		text-transform: uppercase;
		font-size: 3.5rem;
		letter-spacing: 3px;
		margin-right: -3px;
		margin-bottom: 2em;
		text-align: center;
		color: #333;
		position: relative;
	}

	.heading::after {
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


	.fa-facebook-square {
		color: #3b5999;
	}

	.fa-twitter-square {
		color: #55acee;
	}

	.fa-linkedin-square {
		color: #0073b1;
	}

	.fa-google-plus-square {
		color: #dd4b39;
	}

	.fa-facebook-square:hover,
	.fa-twitter-square:hover,
	.fa-linkedin-square:hover,
	.fa-google-plus-square:hover {
		opacity: .5;
	}

	@media screen and (min-width: 600px) {
		.card-wrapper {
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
		}

		.card {
			margin: 2rem;
		}
	}

	.demo {
		background: #262526;
	}

	.our-team {
		padding: 20px 15px 30px;
		background: #fff;
		border-radius: 15px;
		text-align: center;
	}

	.our-team .pic {
		display: inline-block;
		width: 100%;
		height: 100%;
		background: #fff;
		padding: 10px;
		margin-bottom: 25px;
		transition: all 0.5s ease 0s;
	}

	.our-team:hover .pic {
		background: #dc3545;
		border-radius: 50%;
	}

	.pic img {
		width: 100%;
		height: auto;
		border-radius: 50%;
	}

	.our-team .title {
		display: block;
		font-size: 20px;
		font-weight: 600;
		color: #d1d1d1;
		text-transform: uppercase;
		margin: 0 0 7px 0;
	}

	.our-team .post {
		display: block;
		font-size: 5rem;
		color: #17bebb;
		text-transform: capitalize;
		margin-bottom: 15px;
		padding: 50px;
	}

	.our-team .social {

		padding: 0;
		margin: 0;
		list-style: none;
		display: flex;
		flex-direction: row;
		justify-content: space-evenly;


	}

	.our-team .social li {
		display: flex;
		flex-direction: column;
		padding: 0;
	}

	.our-team .social li a {
		display: block;
		width: 30px;
		height: 30px;
		line-height: 30px;
		border-radius: 50%;
		color: #17bebb;
		border: 1 solid #a2d0eb;
		transition: all 0.5s ease 0s;
		font-size: 1.8rem;
		padding: 0;
	}

	.our-team:hover .social li a {

		brightness: (50%);
		color: #fff;
	}

	@media only screen and (max-width: 990px) {
		.our-team {
			margin-bottom: 30px;
		}
	}






	.carousel {
		padding-top: -5rem;
		margin-top: -5rem;
		padding-bottom: 0;

	}

	.d-block {
		height: 25rem;
		object-fit: cover;
		filter: blur(5px);
		align-content: center;

	}

	.portfolioContainer {
		margin-left: -15px;
		margin-right: -15px;
	}


	.counter {
		padding: 40px 0;
		width: 100%;

	}

	.inner {
		max-width: 1200px;
		margin: auto;
		display: flex;
	}

	.col {
		flex: 1;
		text-align: center;
		padding: 20px;
		text-transform: uppercase;
		color: #dc3545;
		font-size: 30rem;

	}

	.col i {
		font-size: 40px;

	}

	.num {
		font-size: 40px;
		margin: 20px 0;
	}
</style>
 --}}





<div class="container">

	<h1 class="heading"><b>Meet the team</b></h1>


	<div class="row">
		<div class="col-md-2 col-sm-6">
			<div class="our-team">
				<div class="pic">
					<img src="img/ian.jpg">
				</div>
				<ul class="social">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-4 col-sm-6">
			<h3 class="title">Chikaia Dev</h3>
			<span class="job-title">Lead Designer</span>
			<p class="about">
				The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
				making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
			</p>

		</div>

		<div class="col-md-2 col-sm-6">
			<div class="our-team">
				<div class="pic">
					<img src="img/colo.jpg">
				</div>
				<ul class="social">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-4 col-sm-6">
			<h3 class="title">Loco Msee</h3>
			<span class="post">Web Developer</span>
			<p class="about">
				The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
				making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
			</p>

		</div>

	</div>
	<div class="row">
		<div class="col-md-2 col-sm-6">
			<div class="our-team">
				<div class="pic">
					<img src="img/cal.jpg">
				</div>
				<ul class="social">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-4 col-sm-6">
			<h3 class="title">Mr Korekt</h3>
			<span class="job-title">Git Guru</span>
			<p class="about">
				The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
				making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
			</p>

		</div>

		<div class="col-md-2 col-sm-6 col-sm-12">
			<div class="our-team">
				<div class="pic">
					<img src="img/local.jpg">
				</div>
				<ul class="social">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-square"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 col-sm-12">
			<h3 class="title">Local Man</h3>
			<span class="post">Spectator</span>
			<p class="about">
				The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
				making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
			</p>

		</div>

	</div>

	<!-- end of code wrapper-->


</div>
<!-- end of container-->

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

</section>
<!-- Progresion -->

<section class="progression-section section" id="counter">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

			</div><!-- col-sm-12 -->
			<div class="col-sm-6 col-md-6 col-lg-3 counter">
				<div class=" margin-b-30 inner">
					<div class="up">
						<i class="fas fa-user-friends"></i>
						<div class="num">360</div>
						<p>Satisfied clients</p>
					</div>


				</div><!-- counter -->
			</div><!-- col-md-3-->

			<div class="col-sm-6 col-md-6 col-lg-3 counter">
				<div class=" margin-b-30 inner">
					<div class="up">
						<i class="fas fa-briefcase"></i>
						<div class="num">50</div>
						Completed Projects
					</div>
				</div><!-- counter -->
			</div><!-- col-md-3-->

			<div class="col-sm-6 col-md-6 col-lg-3 counter">
				<div class=" margin-b-30 inner">
					<div class="up">
						<i class="fas fa-user-tie"></i>
						<div class="num">75</div>
						Pro Coders
					</div>
				</div><!-- counter -->
			</div><!-- col-md-3-->
			<div class="col-sm-6 col-md-6 col-lg-3 counter">
				<div class=" margin-b-30 inner">
					<div class="up">
						<i class="fas fa-award"></i>
						<div class="num">25</div>
						Awards
					</div>
				</div><!-- counter -->
			</div><!-- col-md-3-->

		</div><!-- row -->
	</div><!-- container -->
</section><!-- progression-section -->



</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(".num").counterUp({
		delay: 10,
		time: 1000
	});
</script>

@endsection