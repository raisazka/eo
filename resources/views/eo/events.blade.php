<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/events.css')}}">
</head>
<body>
    <div class="nav sticky-top mb-5">
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
            <a href="{{route('eo.dashboard')}}"><b>Home</b></a>
            <<a href="{{route('eo.auth.logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
             <form id="logout-form" action="{{ route('eo.auth.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" id="filter">Filter</h5>
                            <hr>
                        <form action="{{route('eo.search')}}" method="GET">
                    <div class="form-group">
                        <label for="">Event Type</label>
                        <select name="type" id="" class="form-control">
                                <option value="all">All</option>
                                @foreach ($type as $typ)
                                    <option value="{{$typ->id}}">{{$typ->name}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <select name="location" id="" class="form-control">
                                <option value="all">All</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Surabaya">Surabaya</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                        </div>
                        </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                     <h3>Events</h3>
                     <hr>
                     <div class="row">
                          @foreach ($events as $event)
                              <div class="col-lg-4" style="margin-top:-25px;">
                                <div class="fancy-card">
                                    <div class="top">
                                      <div class="caption">
                                      <h3 class="title">{{$event->event_name}}</h3>
                                      <a href="{{route('eo.show.event', $event->id)}}" class="button">View Details</a>
                                      </div>
                                    </div>
                                    <div class="middle"></div>
                                    <div class="bottom"></div>
                                  </div>
                              </div>
                          @endforeach
                     </div>
                </div>
            </div>
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
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>