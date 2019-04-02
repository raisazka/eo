<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/select-venue.css')}}">
</head>
<body>
    <div class="nav">
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
            <a href="{{route('welcome')}}"><b>Home</b></a>
            <a href="{{route('profile')}}">Profile</a>
        </div>
    </div>

    <div class="wrap">
    <div id='wrappers'>
        <div class='progresss'>
          <div class='bars'>
            <div class='bar__fill' style='width: 50%;'></div>
          </div>
          <div class='points point--complete'>
            <a href="{{route('event.create')}}"><div class='bullet'></div></a>
            <label>Buat Event</label>
          </div>
          <div class='points point--active'>
           <a href=""><div class='bullet'></div></a>
            <label>Cari Venue</label>
          </div>
          <div class='points'>
           <a href=""><div class='bullet'></div></a>
            <label>Submit</label>
          </div>
        </div>
      </div>
    </div>
      <div class="container">
        <hr style="margin-top:40px;">
        <div class="row">
            <div class="col-lg-10 offset-lg-2">
                <h1 style="font-weight:bolder">Cari Venue</h1>
                <h5>Lokasi: {{$event->location}}</h5>
                <h5>Target Peserta: {{$event->target}}</h5>
            <h5>Budget: Rp{{number_format($event->budget)}}</h5>
                <div class="row">
                    @foreach ($venues as $venue)
                    <div class="col-lg-4">
                      <div class="card" style="width: 15rem;">
                      <img class="card-img-top" src="{{asset('storage/images/bp4.jpeg')}}" alt="Card image cap">
                        <div class="card-img-overlay" style="padding-top:30px;color:white;background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));">
                        <a href="{{route('event.venue', $venue->id)}}" style="color:white;"><h5 class="card-title" style="font-weight:bold;">{{$venue->name}}</h5></a> 
                        <p class="card-text" style="margin: 0;">Harga: Rp{{number_format($venue->price)}}</p>
                        <p class="card-text">Kapasitas: {{number_format($venue->seat_capacity)}}</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
</body>
</html>