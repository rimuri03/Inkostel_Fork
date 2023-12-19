<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inkostel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/detailKos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('front/css/detailKos.css') }}">


    <title>details</title>
</head>

<body>
    @extends('partial.navbar')

    @section('isi')
    <!-- body -->
    <div class="container" id="conbody">
        <div class="row justify-content-center">
            <div class="col">
                <h1>{{ $details->first()->nama_kos }}</h1>
                <div class="card mx-auto" style="width: 851px; height: 307px;">
                    <div class="card-body">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($details as $index => $detail)
                                    @if ($detail->gambar_kos)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($detail->gambar_kos) }}" class="d-block w-100" style="height: 270px;" alt="...">
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>


                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="detail">
            <div class="col-sm-4">
                <h2>Deskripsi</h2>
                <div class="info-section info-section custom-scrollbar">
                    @if ($details->isNotEmpty())
                    @foreach ($details as $detail)
                    <p>{{ $detail->Deskripsi }}</p>
                    @endforeach
                    @else
                    <p>No details available.</p>
                    @endif
                </div>

            </div>
            <div class="col-sm-4" id="fasilitas">
                <h2>Fasilitas</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info-section2">
                            <i class="bi bi-wifi bordered-icon colored-icon"> <span class="text-color"> WIFI</span></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info-section3">
                            <i class="bi bi-wifi bordered-icon colored-icon"> <span class="text-color"> WIFI</span></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info-section2">
                            <i class="bi bi-moisture bordered-icon colored-icon"> <span class="text-color"> Water
                                    Heater</span></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info-section3">
                            <i class="bi bi-moisture bordered-icon colored-icon"> <span class="text-color"> Water
                                    Heater</span></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info-section2">
                            <i class="bi bi-align-start bordered-icon colored-icon"> <span class="text-color">
                                    Kasur</span></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info-section3">
                            <i class="bi bi-align-start bordered-icon colored-icon"> <span class="text-color">
                                    Kasur</span></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info-section2">
                            <i class="bi bi-building bordered-icon colored-icon"> <span class="text-color">
                                    Lemari</span></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info-section3">
                            <i class="bi bi-building bordered-icon colored-icon"> <span class="text-color">
                                    Lemari</span></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 offset-sm-6" id="harga">
                <div class="card" id="cardHarga" style="width: 390px; height: 194px;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;" id="harga-tahun">RP 15.000.000</h5>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary  dropdown-toggle " style="width: 10rem; color: #6DD6BF; border-color: #6DD6BF;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-color"> Pertahun</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" onclick="ubahHarga()">Perbulan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle " style="width: 10rem; border-color: #6DD6BF;" type a="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-color"> kamar</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">10 tersedia</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="https://wa.me/62895621914880" class="btn btn-outline-success d-block mx-auto bi bi-whatsapp">WhatsApp</a>
                        <!-- Menggunakan "d-block mx-auto" untuk mengatur tombol di tengah -->
                    </div>
                </div>
            </div>
            <script>
                // Simpan harga perbulan dan harga pertahun dalam variabel
                var hargaPerbulan = "1.250.000";
                var hargaPertahun = "15.000.000";
                var tampilkanHargaPertahun = false; // Menggunakan variabel untuk melacak tampilan harga

                function tampilkanHarga() {
                    // Mengambil elemen tombol "Perbulan" dan "Pertahun" berdasarkan class
                    var tombolPerbulan = document.querySelector('.dropdown-item');
                    var tombolPertahun = document.querySelector('.dropdown-toggle .text-color');

                    // Mengambil elemen harga berdasarkan id
                    var hargaElement = document.getElementById("harga-tahun");

                    if (tampilkanHargaPertahun) {
                        // Menampilkan harga pertahun
                        hargaElement.innerHTML = "RP " + hargaPertahun;
                        tombolPerbulan.textContent = "Perbulan";
                        tombolPertahun.textContent = "Pertahun";
                    } else {
                        // Menampilkan harga perbulan
                        hargaElement.innerHTML = "RP " + hargaPerbulan;
                        tombolPerbulan.textContent = "Pertahun";
                        tombolPertahun.textContent = "Perbulan";
                    }
                }

                function ubahHarga() {
                    tampilkanHargaPertahun = !tampilkanHargaPertahun; // Toggle variabel
                    // Tampilkan harga yang sesuai
                    tampilkanHarga();
                }
            </script>
        </div>
    </div>
    <!-- body end -->
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @endsection
    @section('script')
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/detailKos.js"></script>
    @endsection


</body>
<!-- footer end -->

</html>
