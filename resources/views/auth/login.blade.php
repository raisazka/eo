<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<link rel="stylesheet"href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	</head>

	<body>
	<div class="header-cover">
		<div class="logo-container">
			<img class="logo" src="{{asset('storage/images/LogoWhite.png')}}">
		</div>
		<div class="body-container">
			<div class="left-container">
				<h1 class="text1"> Buat event yang <b>kamu inginkan</b>, hanya dari <b>satu aplikasi.</b></h1>
				<button type="button" class="btn btn-outline-light btn1" >Selengkapnya</button>
		</div>
	
			<div class="right-container">
            <form class="form-login" action="{{route('login')}}" method="POST">
                @csrf
                <a href="#"><img class="left-arrow" src="{{asset('storage/images/left-arrow (3).png')}}"></a> 
					<h2 class="form-login-heading">Login</h2>
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
				
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				
					<h6 class="form-register">Belum punya akun?<a href="register.html"> Daftar sekarang</a></h6>
					<center><button class="btn btn-solid-light btn2" type="submit">Lanjutkan</button></center>
					<h6 class="form-join-partner">Punya bisnis seputar event? <a href="#"> Join sebagai partner</a></h6>
					</form>
			</div>
		</div>
	</div>
	
	<script src="{{asset('js/app.js')}}"></script>
	</body>
</html>