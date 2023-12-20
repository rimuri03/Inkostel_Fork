<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InKosTel jual Kost</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/jualKos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/jualKos.css') }}">
</head>
<body>
    @extends('partial.navbar')

    @section('isi')
    <!-- main -->
    <section id="JualKosForm">
      <div class="container">
        <div class="text-center mt-5">
          <h2>Iklankan Sekarang Juga!</h2>
          <p>Isi Form Untuk Mendaftar</p>
        </div>

        <div class="row justify-content-center my-5">

          <div class="col-lg-6">
            <form action="{{ url('/jualkos') }}" method="post">
              @csrf
              <label for="Nama" class="form-label">Nama:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="bi bi-person-fill"></i>
                </span>
                <input type="text" class="form-control" name="name" id="Nama" placeholder="e.g. Mamancodet">
              </div>
              

              
              <label for="Email" class="form-label">Email Address:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="bi bi-envelope-fill"></i>
                </span>
                <input type="Email" class="form-control" name="email" id="Email" placeholder="e.g. Mamancodet@example.com">
              </div>
              

              <label for="Alamat" class="form-label">Alamat:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="bi bi-geo-alt-fill"></i>
                </span>
                <input type="text" class="form-control" id="Alamat" placeholder="e.g. Sulanjana No 45 Blok H1">
              </div>

              <div class="mt-3">
                <label for="cekkosong">Jarak:</label>
              </div>
              
              
              <div class="form-check mt-3">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  0-100 meter
                </label>
              </div>


              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  100-500 meter
                </label>
              </div>
              

              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  500-1000 meter
                </label>
              </div>

              <label for="Nomor" class="form-label">Nomor Handphone:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text" id="noHP">
                  <i> +62  </i>
                </span>
                <input type="text" class="form-control" id="Nomor" placeholder="">
              </div>

              <div class="mt-3">
                <label for="cekkosong">Fasilitas:</label>
              </div>
              
              
              <div class="form-check mt-3">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  AC
                </label>
              </div>


              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  Kulkas
                </label>
              </div>
              

              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  Water Heater
                </label>
              </div>


              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  Kompor
                </label>
              </div>

              
              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  Wifi
                </label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" value="" id="cekkosong">
                <label for="cekkosong" class="form-check-label">
                  Kamar Mandi Dalam
                </label>
              </div>

              <label for="Harga" class="form-label">Tentukan Harga:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text" id="Rp">
                  <i> Rp </i>
                </span>
                <input type="text" class="form-control" id="Harga" placeholder="e.g. 1.000.000.">
              </div>
              

              <label for="InputGambar" class="form-label">Unggah Tampilan Kamar</label>
              <input class="form-control" type="file" id="InputGambar" multiple>


              <div class="form-floating mb-4 mt-4">
                <textarea  id="Deskripsi" class="form-control" style="height: 140px;"></textarea>
                <label for="Deskripsi" class="form-label">Deskripsi...</label>
              </div>
              
              
              <div class="mb-4 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
      </div>
    </section>
    @endsection

  

    @section('script')
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jualKos.js"></script>
    @endsection


       
</body>
</html>