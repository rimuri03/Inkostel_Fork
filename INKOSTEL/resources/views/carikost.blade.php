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
    <div class="container my-5" id="conmain">
        <div class="row row-cols-1 row-cols-md-3 g-0" id="card"></div>
    </div>
    <!-- end main -->
    @endsection

    @section('script')
    <!-- script js -->
    <script src="{{ asset('js/carikost.js') }}"></script>
    @endsection
  </body>
</html>

 

