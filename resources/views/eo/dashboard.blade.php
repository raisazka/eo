
<!DOCTYPE html>

<html lang="en">

  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/hstyle-eo.css')}}">

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
                <a href="{{route('events.index')}}">Cari Event</a>
                <a href="{{route('eo.profile')}}">Profile</a>
                @endguest
			</div>
		</div>
		
   <div class="hcover"> 
			<div class="tcover">
				
				<div id="str"></div>

				<br>
				<section class="buttons">
						<div class="container">
				
								<a href="{{route('events.index')}}" class="btn btn-1">
							<svg>
								<rect x="0" y="0" fill="none" width="100%" height="100%"/>
							</svg>
						 +Cari Event
						</a>
					 </section>
			</div>

			<video autoplay loop id="video-background" muted plays-inline>
            <source src="{{asset('storage/images/coverr.mp4')}}" type="video/mp4">
				</video>
        </div>
        <footer style="margin-top:-5px;">
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