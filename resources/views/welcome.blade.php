
<!DOCTYPE html>

<html lang="en">

  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/hstyle.css')}}">

    <title>Homepage</title>  
	</head>
	
  <body>

	<div class="nav sticky-top">
			<div class="nav-header">
				<div class="nav-title">
                <img src="{{asset('storage/images/LogoWhite.png')}}" alt="" width="170px;">
				</div>
			</div>
			<div class="nav-btn">
				<label for="nav-check">
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>
			<input type="checkbox" id="nav-check">
			<div class="nav-links">
                @guest
                <a href="{{route('login')}}"><b>Login</b></a>
                <a href="{{route('register')}}">Register</a>
                @else
                <a href="{{route('event.create')}}">Buat Event</a>
                <a href="{{route('profile')}}">Profile</a>
                @endguest
			</div>
		</div>
		
   <div class="hcover"> 
			<div class="tcover">
				
				<div id="str"></div>

				<br>
				<section class="buttons">
						<div class="container">
				
						<a href="{{route('event.create')}}" class="btn btn-1">
							<svg>
								<rect x="0" y="0" fill="none" width="100%" height="100%"/>
							</svg>
						 +Event Baru
						</a>
					 </section>
			</div>

			<video autoplay loop id="video-background" muted plays-inline>
            <source src="{{asset('storage/images/coverr.mp4')}}" type="video/mp4">
				</video>
		</div>

	<div class="menuevent">
			<div class="jevent"> 
					<h3>Jenis Event</h3>
			</div>

				<div class="je">		
				<a href="#birthday">	
					<div class="jeb">
                    <img src="{{asset('storage/images/jenisbirthday.png')}}" alt="" width="80px" height="80px">
						<h5><b>Ulang Tahun</b></h5>
					</div>
				</a>

				<a href="#reunion">
					<div class="jer">
						<img src="{{asset('storage/images/jenisreuni.png')}}" alt="" width="80px" height="80px">
						<h5><b>Reuni</b></h5>
					</div>
				</a>
				
				<a href="#wedding">	
					<div class="jew">
                    <img src="{{asset('storage/images/jeniswedding.png')}}" alt="" width="80px" height="80px">
						<h5><b>Pernikahan</b></h5>
					</div>
				</a>
			</div>
		</div>

	<hr>
	<div class="hads">
	<a class="hadsss" href="{{url('/eo')}}"><img class="hadss" src="{{asset('storage/images/iklan.png')}}" alt="join-as-partner"></a>
		</div>
	<div class="hsec2">
		<hr>

		<div class="jenisevent">
			<div class="birthday" id="birthday">
				
					<h2>Inspirasi Event <b>Ulang Tahun</b></h2>
				
				<div id="bc" class="carousel slide" data-ride="carousel">
						<ul class="carousel-indicators">
							<li data-target="#bc" data-slide-to="0" class="active"></li>
							<li data-target="#bc" data-slide-to="1"></li>
						</ul>
					
						<div class="carousel-inner">
							<div class="carousel-item active">
                            <img class="inspirationimg" src="{{asset('storage/images/birthday1.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/birthday2.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/birthday3.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/birthday4.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
							</div>
							<div class="carousel-item">
									<img class="inspirationimg" src="{{asset('storage/images/birthday4.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/birthday3.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/birthday2.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/birthday1.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
							</div>
						</div>
					
						<a class="carousel-control-prev" href="#bc" data-slide="prev">
                        <img src="{{asset('storage/images/left.png')}}" alt="" width="50px">
						</a>
						<a class="carousel-control-next" href="#bc" data-slide="next">
                        <img src="{{asset('storage/images/right.png')}}" alt="" width="50px">
						</a>
					
					</div>
			</div>

			<hr>

			<div class="reunion" id="reunion">
				<h2>Inspirasi Event <b>Reuni</b></h2>
						
				<div id="reunionc" class="carousel slide" data-ride="carousel">

						<ul class="carousel-indicators">
							<li data-target="#reunionc" data-slide-to="0" class="active"></li>
							<li data-target="#reunionc" data-slide-to="1"></li>
						</ul>
			
						<div class="carousel-inner">
							<div class="carousel-item active ">
                            <img class="inspirationimg" src="{{asset('storage/images/reunion1.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/reunion2.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/reunion3.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/reunion4.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
							
							</div>
							<div class="carousel-item">
									<img class="inspirationimg" src="{{asset('storage/images/reunion4.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/reunion3.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/reunion2.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/reunion1.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
							</div>
						</div>
					
						<a class="carousel-control-prev" href="#reunionc" data-slide="prev">
							<img src="{{asset('storage/images/left.png')}}" alt="" width="50px">
						</a>
						<a class="carousel-control-next" href="#reunionc" data-slide="next">
							<img src="{{asset('storage/images/right.png')}}" alt="" width="50px">
						</a>
					
					</div>	
			</div>

			<hr>

			<div class="wedding" id="wedding">
				<h2>Inspirasi Event <b>Pernikahan</b></h2>
				
				<div id="weddingc" class="carousel slide" data-ride="carousel">

						<ul class="carousel-indicators">
							<li data-target="#weddingc" data-slide-to="0" class="active"></li>
							<li data-target="#weddingc" data-slide-to="1"></li>
						</ul>
				
						<div class="carousel-inner">
							<div class="carousel-item active">
                            <img class="inspirationimg" src="{{asset('storage/images/wedding1.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/wedding2.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/wedding3.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/wedding4.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
							
							</div>
							<div class="carousel-item">
									<img class="inspirationimg" src="{{asset('storage/images/wedding4.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/wedding3.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/wedding2.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
									<img class="inspirationimg" src="{{asset('storage/images/wedding1.png')}}" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" width="230px">
							</div>
						</div>
					
						<a class="carousel-control-prev" href="#weddingc" data-slide="prev">
							<img src="{{asset('storage/images/left.png')}}" alt="" width="50px">
						</a>
						<a class="carousel-control-next" href="#weddingc" data-slide="next">
							<img src="{{asset('storage/images/right.png')}}" alt="" width="50px">
						</a>
					
					</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="hcta">
		<h2>
				Sudah menemukan <b>konsep</b> untuk <b>eventmu</b>?
		</h2>
		
		<div class="svg-wrapper">
			<svg height="40" width="150">
				<rect id="shape2" height="40" width="150">
					<div id="text2">
					<a href="{{route('event.create')}}"><span class="spot"></span>+Event Baru</a>
					</div>
			</svg>
		</div>
	</div>

<img onclick="topFunction()" id="myBtn" title="Go to top" src="{{asset('storage/images/backtotop.png')}}" width="70px"></img>

	<footer>
		<div class="img-footer">
			<img src="{{asset('storage/images/LogoWhite.png')}}">
		</div>
		<div class="fmenu">
			<p><b>Copyright &copy; 2019 buatEvent. All Rights Reserved</b></p>
		</div>
	</footer>

	<script>

		var string = "Rencanakan event yang kamu inginkan dalam satu aplikasi";
		var str = string.split("");
		var el = document.getElementById('str');
		(function animate() {
			str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
			var running = setTimeout(animate, 150);
		})();

		// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
	</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>