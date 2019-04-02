<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">

    <title>Profile Page</title>
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
                    <a href="{{route('welcome')}}"><b>Home</b></a>
                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="menu">
                <div class="header">
                    <h4 class="name">{{Auth::user()->name}}</h4>
                            <div class="right">
                                <h1 style="margin-right: 7px;">3</h1><p class="insp" style="margin-right:50px;">Inspirasi</p>
                            <h1 style="margin-right: 7px;">{{$count}}</h1><p class="insp">Event On Progress</p>
                            </div>
                    </div>
                    <div class="container">
                            @if (Session::has('success'))
                            <div style="margin-top:-20px;" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <h3 id="inspirasi" style="margin-bottom:20px;">Inspirasi</h3>
                        <div class="row">
                             <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                             <img class="image" src="{{ asset('storage/images/bp.jpeg') }}" alt="no-image" height="220" width="370">
                             </div>
                             <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                <img class="image" src="{{ asset('storage/images/bp2.jpeg') }}" alt="no-image" height="220" width="370">
                                </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                <img class="image" src="{{ asset('storage/images/bp3.jpeg') }}" alt="no-image" height="220" width="350">
                                </div>
                        </div>
                        <h3 style="margin-top: 30px;">Events</h3>
                        <hr class="line">
                            @forelse ($events as $event)
                            <div class="card" style="margin-bottom: 25px;">
                                    <div class="card-body">
                                        <div class="description">
                                        <h3 class="card-title">{{  $event->event_name }}</h3>
                                        <p style="margin-left:auto; margin-bottom:0;">Tanggal Event: {{date('F j, Y, g:i a', strtotime($event->dateStart))}}</p>
                                        </div>
                                      <div class="progress" style="margin-bottom:20px;">
                                            @if($event->status == "-")
                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                            @elseif($event->status == "On Planning")
                                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                            @elseif($event->status == "On Progress")
                                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            @elseif($event->status == "Completed")
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            @endif
                                          </div>
                                        <div class="collapse" id="collapseExample{{$event->id}}">
                                            <p>
                                            {{$event->description}}
                                            </p>
                                            <p>Status: {{  $event->status }}</p>
                                            <form action="{{route('event.cancel', $event->id)}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button style="margin-bottom:20px;" type="submit" {{ $event->status == 'Cancelled' ? 'disabled' : ''}} class="btn btn-danger">Cancel</button>
                                            </form>
                                      </div>
                                      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample{{$event->id}}" aria-expanded="false" aria-controls="collapseExample">
                                            Show more
                                        </button>
                                    </div>
                                  </div>
                            @empty
                            <h3 style="text-align:center; margin-bottom:30px;">No Event</h3>
                            @endforelse
                        </div>
            </div>
                <footer>
                        <div class="img-footer">
                            <img src="{{asset('storage/images/LogoWhite.png')}}">
                        </div>
                        <div class="fmenu">
                            <p><b>Copyright &copy; 2019 buatEvent. All Rights Reserved</b></p>
                        </div>
                    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>