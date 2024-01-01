<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simpan Kost</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/simpan.css') }}">
  </head>
  <body>
    @extends('partial.navbar')

    @section('isi')

    <!-- main -->
    <div class="container my-5" id="conmain">
        <div class="row row-cols-1 row-cols-md-3 g-0" id="card">
            <!-- akan di foreach -->
            @foreach($dataKos as $kos)
            <div class="col-md-3 mb-4" id="coba">
                <div class="card" id=cobacard>
                    <div class="border-image" id="carouselIdValue">
                        <div class="carousel inner">
                            <div class="carousel-item active">
                            <img src="{{ $kos->gambar_kos1 }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $kos->nama_kos}}</h5>
                        <p class="card-text1">{{ $kos->harga_kos_pertahun }} </p>
                        <p id="jarak-{{ $kos->id }}" class="card-text2">{{ $kos->jarak_kos}}</p>
                        <form action="{{ route('hapus.simpan', ['id' => $kos->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
    <!-- end main -->

    <!-- script js -->

    <script src="{{ asset('js/simpan.js') }}"></script>
    @endsection
  </body>
</html>

 

