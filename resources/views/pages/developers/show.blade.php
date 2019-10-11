@extends('layouts.admin')

@section('content')

@push('styles')
<link rel="stylesheet" href="/css/main.css" />


@endpush

<div class="portflio">
    <div class="container">

        <!-- messages -->
            <div class="uper">
                    @if(session()->get('success'))
                      <div class="alert alert-success">
                        {{ session()->get('success') }}  
                      </div><br />
                    @endif
            </div>
	

<!-- Intro -->
    
<br>
        <div class="row">
        <div class="col-sx-12 col-md-3 col-lg-3">

            <img src="img/profileNone.jpg" alt="" style="height: 250px;width: 250px;border-radius:10px;">
                    
        </div>

        <div class= col-sx-12col-md-9 col-lg-9">
        <ul class="professional-intro">
            <br>
            <div class="row">
                <div class="col-sx-12 col-md-6">
                <h2><b>{{$developer->name}}</b></h2>
                <ul>
                    <li><b>BORN : </b>{{$developer->dob}}</li>
                    <li><b>EMAIL : </b>{{$developer->email}}</li>
                    <li><b>MARITAL STATUS : </b>{{$developer->status}}</li>
                </ul>
                </div>
                <div class=" col-sx-12 col-md-6">
                <h3><b>{{$developer->title}}</b></h3>
                <p>
                        {{$developer->bio}}
                </p>
                    <ul>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					</ul>
            </div>
        </div>
    </div>
 </div><!--end of container-->

</br>
<hr>


      <!-- skills -->
        <div class="row">
        <div class="heading">
						<h3><b>Skills</b></h3>
					</div>
        </div>
        <br>

        <div class="row">
        <div class="col-md-6 col-lg-6">
				
					<div class="line-progress margin-b-20" data-prog-percent=".89"><div></div>
						<p class="progress-title"><b>HTML</b></p></div>
					
					<div class="line-progress margin-b-20" data-prog-percent=".91"><div></div>
						<p class="progress-title"><b>CSS</b></p></div>

					<div class="line-progress margin-b-20" data-prog-percent=".97"><div></div>
						<p class="progress-title"><b>PHP</b></p></div>
					
					<div class="line-progress margin-b-50" data-prog-percent=".85"><div></div>
						<p class="progress-title"><b>ILLUSTRATOR</b></p></div>

            </div>
            
            <div class="col-md-6 col-lg-6">
					<div class="panel margin-b-30">
						<div class="panel-area margin-b-30">
							<h5 class="panel-title active"><b>WEB DEVELOPMENT</b>
								<i class="icon minus ion-minus"></i><i class="icon plus ion-plus"></i></h5>
							<p class="panel-desc">reflects the gradient pattern from start-to-end then end-to-start then start-to-end, 
								continuously until the region is filled.</p>
						</div><!-- panel-area -->
						
						<div class="panel-area margin-b-30">
							<h5 class="panel-title"><b>GRAPHIC DESIGN</b>
								<i class="icon minus ion-minus"></i><i class="icon plus ion-plus"></i></h5>
							<p class="panel-desc">reflects the gradient pattern from start-to-end then end-to-start then start-to-end, 
								continuously until the region is filled.</p>
						</div><!-- panel-area -->
						
						<div class="panel-area margin-b-30">
							<h5 class="panel-title"><b>MOTION DESIGN & VIDEO</b>
								<i class="icon minus ion-minus"></i><i class="icon plus ion-plus"></i></h5>
							<p class="panel-desc">reflects the gradient pattern from start-to-end then end-to-start then start-to-end, 
								continuously until the region is filled.</p>
						</div><!-- panel-area -->
					</div><!-- panel -->
                </div>
</div>
</div>
</div>




    {{-- <script src="js/jquery-3.2.1.min.js"></script>	
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>	
	<script src="js/progressbar.min.js"></script>	
	<script src="js/jquery.fluidbox.min.js"></script>	
	<script src="js/scripts.js"></script> --}}
@endsection