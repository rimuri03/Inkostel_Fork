<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InKosTel Cari Kost</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/carikost.css') }}">
  </head>
  <body>

    @extends('partial.navbar')

    @section('isi')
    <!-- Tombol Filter Pencarian -->
    <div class="filter-button">
        <button type="button" class="btn" data-filter="semua">Semua</button>
        <button type="button" class="btn" data-filter="terdekat">Terdekat</button>
        <button type="button" class="btn" data-filter="termurah">Termurah</button>
        <button type="button" class="btn" data-filter="putra">Putra</button>
        <button type="button" class="btn" data-filter="putri">Putri</button>
    </div>

    <!-- main -->
    <div id="conmain">
        <div class="row" id="rowcard">
            <!-- akan di foreach -->
            @foreach($carikos as $data)
            <div class="col-md-3 mb-4" id="coba">
                <div class="card" id=cobacard>
                    <div class="border-image" id="carouselIdValue">
                        <div class="carousel inner">
                            <div class="carousel-item active">
                                <img src="imageSrcValue" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $data->nama_kos}}</h5>
                        <p class="card-text1">{{ $data->harga_kos }} </p>
                        <p id="jarak-{{ $data->id }}" class="card-text2">{{ $data->jarak_kos}}</p>
                        <i class="bi bi-bookmark" style="position: relative; font-size: 30px; color: #41EBC6; margin-left: 180px; top: -100px;"></i>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
    <!-- end main -->
    
    <!-- script js -->
    <script src="{{ asset('js/carikost.js') }}"></script>
    <script>
        // Panggil fungsi untuk menetapkan jarak
        setDistanceText({{ $data->id }}, {{ $data->jarak_kos }});
    </script>

    @endsection
  </body>
</html>

 

