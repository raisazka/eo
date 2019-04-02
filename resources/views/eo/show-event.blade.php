<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/dstyle.css')}}">

    <title>Detail Event</title>


</head>
<body>
    <img src="{{asset('storage/images/detaill.png')}}" alt="" width="100%">
    <div class="wrapper">
        <div class="sub-wrap">
            <div class="detailclass">
                
                <div class="user1">
                    <div class="avatar">
                <img class="icon" src="{{asset('storage/images/boy.png')}}" width="200px" height="200px" alt="">
           
                <h2><b>Detail Pemilik Event</b></h2>
            </div>
                <div class="userdetail">
                    
                    <h5>Nama User  :</h5>
                    <h3>{{$event->users->name}}</h3>
                    <h5>Budget  :</h5>
                    <h3>Rp{{number_format($event->budget)}} </h3>
                    <h5>Email  :</h5>
                    <h3>{{$event->users->email}}</h3>
                </div>
            </div>

                <hr class="linee">

                <div class="eventdetail">

                    <div class="eventku">
                     <div class="event">
                       
                         <h5>Nama Event  :</h5>
                        <h3>{{$event->event_name}}</h3>
                        <h5>Target Peserta Event  :</h5>
                        <h3>{{$event->target}}</h3>
                        <h5>Jenis Event  :</h5>
                        <h3>{{$event->eventType->name}}</h3>
                        <h5>Lokasi Penyelenggaraan  :</h5>
                        <h3>{{$event->location}}</h3>
                        <h5>Konsep yang diinginkan  :</h5>
                        <h3>{{$event->description}}</h3>
                    </div>
                    <div class="avatar2">
                    <img class="icon" src="{{asset('storage/images/confetti.png')}}" width="200px" height="200px" alt="">
                    <h2><b>Detail Event</b></h2>
                </div>
                    </div>

                <hr class="linee">

                    <div class="venue">
                                                
                    
                        <div class="detailvenue">
                        <div>
                        <h5>Nama Venue  :</h5>
                        <h3>{{$event->venues->name}}</h3>
                        <h5>Lokasi Venue  :</h5>
                        <h3>{{$event->venues->address}}</h3>
                        <h5>Harga Venue  :</h5>
                        <h3>Rp{{number_format($event->venues->price)}} / jam</h3>
                        <h5>Kapasitas Venue  :</h5>
                        <h3>{{$event->venues->seat_capacity}} orang</h3>
                        </div>

                        <div class="avatar3">
                        <div class="map">

                        </div>
                        <h2><b>Detail Venue</b></h2>
                    </div>
                    </div>
                </div>
            </div>

            <hr class="linee">

            <div class="apply-section">
                <h2>Ingin <b>Apply</b> ke Event Ini?</h2>
                <div class="apply-button">
                        <form style="display:inline-block;" action="{{route('eo.receive.event', $event->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-outline-success">Accept Event</button>
                            </form>
                    
                        <a href="{{route('eo.dashboard')}}" class="btn btn-outline-danger">Tidak</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
            function initMap() {
          var uluru = {lat: {{$event->venues->latitude}}, lng: {{$event->venues->longitude}}};
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