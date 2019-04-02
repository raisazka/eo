<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/venue.css') }}">
    <title>Create Event - Venue Detail</title>
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
                        <a href="{{route('profile')}}">Profile</a>
                </div>
            </div>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <img class="venue-picture" src="{{asset('storage/images/venue-image.jpg')}}" alt="no-image">
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <h1>{{$venues->name}}</h1>
                <h3 id="kapasitas">Kapasitas: {{$venues->seat_capacity}}</h3>
                    <hr class="line">
                        <h4>Lokasi</h4>
                        <p>{{ $venues->address }}</p>
                    <hr class="line">
                        <h4>Keterangan</h4>
                        <p>{{ $venues->description }}</p>
                    <hr class="line">
                            <h4>Fasilitas</h4>
                            <p>{{$venues->facilities}}</p>
                <a href="{{route('venue.360')}}"><img src="{{asset('storage/images/Group 2.png')}}" alt="" width="600" height="200"></a>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card" style="margin-bottom: 15px;">
                                <div class="card-header text-center" style="background-color: #555555; color:white; font-weight: bold;">
                                  Rp{{number_format($venues->price)}} / jam
                                </div>
                                <div class="card-body">
                                    <form action="{{route('event.venue.store', $venues->id)}}" method="POST">
                                        @csrf
                                    <div class="form-group">
                                            <label for="">Start Date</label>
                                            <input type="datetime-local" name="dateStart" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">End Date</label>
                                            <input type="datetime-local" name="dateEnd" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-orange" style="display:block; margin:0 auto;">Book Venue</button>
                                    </form>
                                </div>
                              </div>
                    <div id="calendar"></div>  
                </div>
            </div>
        </div>
        <div id="map"></div>
        <footer>
                <div class="img-footer">
                <img src="{{asset('storage/images/LogoWhite.png')}}">
                </div>
                <div class="fmenu">
                    <div>
                        <p><b>Copyright &copy; 2019 buatEvent. All Rights Reserved</b></p>
                    </div>
                </div>
            </footer>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 id="eventName"></h4>
                            <p id="eventDesc"></p>
                            <p>Date Start: </p>
                            <p id="dateStart"></p>
                            <p>Date End: </p>
                            <p id="dateEnd"></p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            eventTextColor: "#fff",
            defaultView: 'month',
            height: 250,
            contentHeight: 250,
            events : [
                @foreach($events as $event)
                {
                    title : '{{ $event->event_name }}',
                    start : '{{ $event->dateStart }}',
                    end: '{{ $event->dateEnd }}',
                    description: '{{ $event->description }}'
                },
                @endforeach
            ],
        eventClick: function(calEvent, jsEvent, view) {
                $('#eventName').text(calEvent.title);
                $('#eventDesc').text(calEvent.description);
                $('#dateStart').text(calEvent.start);
                $('#dateEnd').text(calEvent.end);
                $('#editModal').modal();
            },
        });
    });
</script>
    <script>
    function initMap() {
  var uluru = {lat: {{$venues->latitude}}, lng: {{$venues->longitude}}};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB30M-DFyP8DvBXyuMhs7r3WxvOpBbMj6Q&callback=initMap">
  </script>
</body>
</html>