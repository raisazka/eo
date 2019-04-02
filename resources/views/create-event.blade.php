<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BuatEvent</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('css/bstyle.css')}}">
</head>
<body>
    <div class="hcover"> 
            <div class="form-buat-event col-md-8">
                    <div>
                        <h1 class="box-title">
                            <b>Buat</b> Event
                            <hr class="title" width="140px" align="left" color="white">
                        </h1>
                        
                    </div>
            
                    <div class="form-input">
                        <form action="{{route('event.store')}}" method="POST">
                                @csrf
                        <div class="form-row">
                            <div class="form-group2 col-md-6">
                                <div class="form-group">
                                    <label for="inputNamaEvent">Nama Event :</label>
                                    <input type="text" name="event_name" class="form-control form-control-sm" id="inputNamaEvent" placeholder="Masukkan nama event yang ingin anda buat">
                                </div>
                            
                                <div class="form-group">
                                    <label for="inputState">Target Peserta Event :</label>
                                    <select name="target" id="inputState" class="form-control form-control-sm">
                                      <option selected>Pilih salah satu ..</option>
                                      <option> < 100 </option>
                                      <option> 100 - 250 </option>  
                                      <option> 250 - 500 </option>
                                      <option> > 500 </option> 
                                    </select>
                                </div>
            
                                <div class="form-group">
                                    <label for="inputState">Jenis Event :</label>
                                    <select id="inputState" name="event_type_id" class="form-control form-control-sm">
                                      @foreach ($event_type as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                      @endforeach 
                                    </select>
                                </div>
                            </div> 
                            
                            <div class="form-group3 col-md-6">
                                    <div class="form-group">
                                        <label for="inputState">Lokasi Penyelenggaraan :</label>
                                        <select id="inputState" name="location" class="form-control form-control-sm">
                                            <option> Jakarta </option>
                                            <option> Surabaya </option>
                                    </select>
                                </div>
            
                                <div class="form-group ">
                                    <label for="inputState">Konsep Event yang Diinginkan :</label>
                                    <textarea name="description" rows="5" class="form-control form-control-sm" id="" placeholder="Ceritakan event yang ingin anda buat"></textarea>
                                </div>
                            </div>
                        </div>    
            
                            <div class="slidecontainer">
                                <label for="inputState">Masukkan budget anda :</label>
                                   
                                <div class="slider1">
                                <span class="font-weight-bold blue-text mr-2 mt-1">Rp 500.000</span>
                                        <input name="budget" class="slider w-75" type="range" name="range" step="500000" min="0" max="100000000" value="" onchange="rangePrimary.value=value">
                                    <span class="font-weight-bold blue-text ml-2 mt-1">Rp 100.000.000</span>    
                                </div>
                                <div>
                                    <span class="rupiah">Rp</span> <input type="text" id="rangePrimary" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-light"><b>Lanjutkan</b></button>
                        </form>
                    </div>
                </div>



    
        <!-- <video autoplay loop id="video-background" muted plays-inline>
            <source src="img/coverr.mp4" type="video/mp4">
        </video> -->
    </div>

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <script>
          
    </script>
</body>
</html>