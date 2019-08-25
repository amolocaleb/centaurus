@extends('layouts.app')

@section('content')

    @push('styles')
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    @endpush

    <style>

        .position-relative {
            position: relative; }
        .experience {
            position: absolute;
            bottom: -10px;
            right: -10px;
            background: #007bff;
            padding: 20px; }
        @media (max-width: 991.98px) {
            .experience {
                bottom: 0px;
                right: 0px; } }
        .experience span {
            display: block; }
        .experience .year {
            font-weight: 900;
            color: #fff;
            font-size: 3rem;
            letter-spacing: normal;
            line-height: 1.2; }
        .experience span {
            letter-spacing: .2em; }
        .experience .caption {
            color: #fff;
            letter-spacing: .4em;
            text-transform: uppercase; }

        .section-sub-title {
            font-size: 13px;
            color: #46ddb0;
            letter-spacing: .2em;
            text-transform: uppercase; }
        .section-title {
            color: #007bff;
            font-size: 40px;
            font-weight: 900; }
        @media (max-width: 991.98px) {
            .section-title {
                font-size: 30px; } }
        .ul-social-circle {
            list-style: none;
            padding: 0;
            margin: 0; }
        .ul-social-circle li {
            display: inline-block;
            margin-left: 5px;
            margin-bottom: 5px; }
        .ul-social-circle li:first-child {
            margin-left: 0; }
        .ul-social-circle li span {
            width: 30px;
            height: 30px;
            background: #777;
            font-size: 13px;
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
            display: inline-block; }
        .ul-social-circle li a span {
            color: #fff;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease; }
        .ul-social-circle li a:hover span {
            background: #2b2b2b;
            color: #fff; }



    </style>



    <header class="portflio_background">
        <div class="container">
            <div class="site-section" id="about-section">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 mb-5 mb-lg-0 position-relative">
                            <img src="images/about.jpg" class="img-fluid" alt="Image">
                            <div class="experience">
                                <span class="year">10 years</span>
                                <span class="caption">of experience</span>
                            </div>

                        </div>
                        <div class="col-md-5 ml-auto">
                            <h3 class="section-sub-title">About Us</h3>
                            <h2 class="section-title mb-3">Welcome To KodeKlinik</h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
                            <p><a href="#" class="btn btn-primary btn-black--hover">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div>

<br>
                <br>
            </div>

            <section class="site-section border-bottom" id="team-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h3 class="section-sub-title">Team</h3>
                            <h2 class="section-title mb-3">Our Team</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <div class="person text-center">
                                <img src="img/ian.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
                                <h3>Punju de</h3>
                                <p class="position text-muted">Co-Founder, President</p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                                <ul class="ul-social-circle">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                            <div class="person text-center">
                                <img src="img/collo.png" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
                                <h3>locomsee</h3>
                                <p class="position text-muted">Co-Founder, COO</p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                                <ul class="ul-social-circle">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                            <div class="person text-center">
                                <img src="img/cal.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
                                <h3>Bob Marley</h3>
                                <p class="position text-muted">Marketing</p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                                <ul class="ul-social-circle">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        @endsection
@include('partials.login')
@endsection
@push('styles')
<link rel="stylesheet" href="/css/main.css">
    
@endpush

