<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Landingpage</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
</head>

<body>

	<div class="header-cover">
		<div class="logo-container">
        <img class="logo" src="{{asset('storage/images/LogoWhite.png')}}">
		</div>

		<div class="body-container">
			<div class="left-container">
				<h1 class="text1"> Buat event yang <b>kamu inginkan</b>, hanya dari <b>satu aplikasi.</b></h1>
				<button type="button" class="btn btn-outline-light btn1">Selengkapnya</button>
			</div>

			<div class="right-container">
				<form class="form1">
					<h2 class="text2"><b>Join sekarang </b> dan <b>nikmati kemudahan</b> dalam membuat event</h2>
					<h6 class="form-register">Sudah punya akun buatEvent?</h6>
                    <center><a href="{{route('login')}}" class="btn btn-solid-light btn2" style="color:white;">Sudah Punya</a></center>
					<center><a href="{{route('register')}}" class="btn btn-solid-light btn3" style="color:white;">Buat Akun</a></center>
					<h6 class="form-join-partner">Punya bisnis seputar event? <a href="#"> Join sebagai partner</a></h6>
				</form>
			</div>
		</div>
	</div>

	<div class="bg-cover">
		<div class="navbar bg-light sticky-top">
			<img class="logo-btn" src="{{asset('storage/images/LogoWhite.png')}}">
			<h4 class="text3"><b>Join buatEvent dan dapatkan promo-promo menarik dari kami</b></h4>
        <a href="{{route('register')}}" class="btn btn-outline-light btn4" style="color:white">Login/SignUp</a>
		</div>
		<div class="body1-cover">
			<div class="container-body1">
				<h3 class="text4"><b>Apakah Selama Ini Anda Mengalami</b></h3>
				<img class="under-line" src="{{asset('storage/images/Line 1.png')}}">
			</div>
			<div class="container-body2">
				<div class="sub-container1">
					<img class="image" src="{{asset('storage/images/image1.png')}}">
					<img class="image" src="{{asset('storage/images/image2.png')}}">
					<img class="image" src="{{asset('storage/images/image3.png')}}">
					<img class="image" src="{{asset('storage/images/image4.png')}}">
				</div>
			</div>
				<center><a href="#"><img class="down-arrow" src="{{asset('storage/images/down-arrow.png')}}"></a></center>
		</div>

		<div class="body2-cover">
			<div class="container-body3">
				<h3 class="text5"><b>buatEvent.id adalah Solusinya</b></h3>
				<img class="under-line2" src="{{asset('storage/images/Line 1.png')}}">
				<img class="map" src="{{asset('storage/images/map.png')}}">
			</div>
			<div class="container-body4">
				<p class="p1">
					buatEvent.id adalah platform yang bertujuan untuk membantu mengatasi masalah-masalah tersebut,
					platform ini menyediakan informasi terlengkap mengenai venue/tempat event sehingga anda tidak perlu
					menghabiskan
					waktu untuk melakukan survey dan mempertemukan klien dengan event organizer yang profesional.
				</p>
			</div>
		</div>

		<div class="body3-cover">
			<div class="container-body5">
				<img class="background3" src="{{asset('storage/images/background3.png')}}">
			</div>
			<div class="container-body6">
				<h3 class="text6"><b>Cara Membuat Event Pertamamu</b></h3>
				<img class="under-line3" src="{{asset('storage/images/Line 1.png')}}">
			</div>
		<div class="container-body7">
			<div class="mix-container">
				<div class="sub-container">
					<img class="icon" src="{{asset('storage/images/num1.png')}}">
					<h3 class="subtext">Login pada website buatEvent.id atau Sign Up jika belum memiliki akun.</h3>
				</div>
				<div class="sub-container">
					<img class="icon" src="{{asset('storage/images/num2.png')}}">
					<h3 class="subtext">Klik "+ Event Baru" dan lakukan pengisian pada formulir yang disediakan.</h3>
				</div>
				<div class="sub-container">
					<img class="icon" src="{{asset('storage/images/num3.png')}}">
					<h3 class="subtext">Memilih venue/lokasi event yang ditampilkan oleh sistem kemudian lakukan booking.</h3>
				</div>
				<div class="sub-container">
					<img class="icon" src="{{asset('storage/images/num4.png')}}">
					<h3 class="subtext">Tunggu selama 1-3 hari hingga calon-calon Event Organizer untuk event Anda terkumpul.</h3>
				</div>
				<div class="sub-container">
					<img class="icon" src="{{asset('storage/images/num5.png')}}">
					<h3 class="subtext">Cek profile calon Event Organizer, kemudian diskusikan event yang akan dibuat lalu pilih EO yang sesuai.</h3>
				</div>
				<div class="sub-container">
					<img class="icon" src="{{asset('storage/images/num6.png')}}">
					<h3 class="subtext">Event berhasil dibuat, Anda dapat mengontrol progress event pada bagian profile.</h3>
				</div>	
			</div>
		</div>			
		</div>
		
		<div class="body4-cover">
			<div class="container-body9">
				<h3 class="text8">"Satu aplikasi yang dapat menyelesaikan berbagai masalah dalam pembuatan event"</h3>
				<button type="button" class="btn btn-outline-light btn5">Join Sekarang</button>
			</div>
		</div>
		<div class="footer-cover">
			<div class="footer-container1">
				<img class="logo-btn1" src="{{asset('storage/images/LogoWhite.png')}}">
			<div class="footer-menu">
				<a href="#"><h4 class="text9">Privacy Policy</h4></a>
				<a href="#"><h4 class="text9">Legal</h4></a>
				<a href="#"><h4 class="text9">Sitemap</h4></a>
				<h4 class="text9">Copyright &copy 2019 buatEvent. All Rights Reserved</h4></a>
			</div>
		</div>
		</div>
	</div>
	</div>
	<script src="{{asset('js/app.js')}}"></script>
	</div>
</body>

</html>