{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Diskominfo Jember</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="{{asset('lte/dist/css/animate.min.css')}}">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="{{asset('lte/dist/css/bootstrap.min.css')}}">
		<!-- font-awesome -->
		<link rel="stylesheet" href="{{asset('lte/dist/css/font-awesome.min.css')}}">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="{{asset('lte/dist/css/templatemo-style.css')}}">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="{{route('home')}}" class="navbar-brand">Kominfo Jember</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="{{route('in')}}" class="nav-link">Surat Masuk</a></li>
						<li><a href="{{route('out')}}" class="nav-link">Surat Keluar</a></li>
						<li><a href="{{route('datauser')}}" class="nav-link">Data User</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Welcome to Sipecat</h1>
							<p class="tm-white">Aplikasi berbasis website sebagai bentuk layanan digital mengenai pencatatan surat masuk dan surat keluar dan ini merupakan terobosan terbaru kami di tahun 2021</p>
							<img src="{{asset('lte/dist/img/software-img.png')}}" class="img-responsive" alt="home img">
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->
		<!-- start divider -->
		<section id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-rocket"></i>
						<h3 class="text-uppercase">Visi</h3>
						<p>" Jember Bersatu Menuju Masyarakat Makmur, Sejahtera, Berkeadilan, dan Mandiri "</p>
					</div>
					<div class="col-md-6 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-eye"></i>
						<h3 class="text-uppercase">Misi</h3>
						<p>" Melaksanakan Reformasi Birokrasi Dan Pelayanan Publik "</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end divider -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Alamat</h2>
						<p>Jl. Dewi Sartika, Kampungtengah, Kepatihan, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131</p>
						<p><span><i class="fa fa-phone"></i></span>Contact (0331) 5102507</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="{{asset('lte/dist/img/software-img.png')}}" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2021 Dinas Komunikasi dan Informatika Jember</p>
				</div>
			</div>
		</footer>
		<!-- end footer -->
        
		<script src="{{asset('lte/dist/js/jquery.js')}}"></script>
		<script src="{{asset('lte/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('lte/dist/js/wow.min.js')}}"></script>
		<script src="{{asset('lte/dist/js/jquery.singlePageNav.min.js')}}"></script>
		<script src="{{asset('lte/dist/js/custom.js')}}"></script>

	</body>
</html>