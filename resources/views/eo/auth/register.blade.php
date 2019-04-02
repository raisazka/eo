<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SignUp</title>
	<link rel="stylesheet"href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/register.css')}}">
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
			<form action="{{ route('eo.register.store') }}" class="form-register" method="POST">
				 @csrf
				<a href="#"><img class="left-arrow" src="{{asset('storage/images/left-arrow (3).png')}}"></a>
				<h2 class="form-register-heading" style="padding-bottom: 3px"> Sign Up EO </h2>
			
				<label for="inputNama" class="sr-only">Nama Lengkap</label>
				<input type="text" id="inputNama" name="name" class="form-control" placeholder="Nama Lengkap" required autofocus>
				@if ($errors->has('name'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
                @endif
			
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
				@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
                @endif
			
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				@if ($errors->has('password'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
                @endif
			
				<label for="verifPassword" class="sr-only">Verifikasi Password</label>
				<input type="password" id="verifPassword" name="password_confirmation" class="form-control" placeholder="Verifikasi Password" required>
				
				<label for="inputPhoneNum" class="sr-only">Phone Number</label>
				<input type="number" id="inputPhoneNum" name="phone" class="form-control" placeholder="Nomor Handphone" required>
				@if ($errors->has('phone'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('phone') }}</strong>
					</span>
                @endif
				<center><button class="btn btn-solid-light btn2" type="submit">Lanjutkan</button></center>
				<h6 class="form-join-partner">Ingin buat event? <a href="#"> Join sebagai user</a></h6>
				</form>
		</div>
	</div>
</div>
	<script src="{{asset('js/app.js')}}"></script>
	</body>
</html>