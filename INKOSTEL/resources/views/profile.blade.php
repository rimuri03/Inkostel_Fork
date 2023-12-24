<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    @extends('partial.navbar')
    @section('isi')
    <!--Isi-->
    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-12 pt-10">
                    <form action="/update" method="post">
                        <div class="container-fluid">
                            <h1 class="font-weight-bold" style="padding-bottom: 50px;padding-top: 20px;">Hai, Supri Kowalski</h1>
                            <h4 class="font-weight-bold">Profile Picture</h4>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/WhatsApp Image 2023-10-29 at 12.35 1.png') }}" alt="Profile Picture" class="profile-pict rounded float-left">
                            </div>
                            <div class="media-body ms-4" style="padding-bottom: 40px;">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <form>
                                            <label class="btn btn-outline-primary">
                                                <span class="bi bi-pencil-square"></span>
                                                <span class="text-color">Edit</span>
                                                <input type="file" style="display: none;">
                                            </label>
                                        </form>                                    
                                        <p class="p">Foto harus berformat .png/.jpg</p>
                                    </label>                                
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <h4 class="font-weight-bold">Profil</h4>
                        </div>
                        <div class="card-body">
                            <label class="form-label"><h6 class="font-weight-bold" style="padding-top: 10px;">Nama Lengkap</h6></label>
                            <div class="form-group">
                            <div id="usernameWarning" class="text-danger" style="padding-top: 10px;"></div>
                                <input type="text" class="form-control mb-1" name="nama_panjang" placeholder="Isi nama lengkap anda..." id="nameInput" oninput="changeButtonColor()" value="{{ $profileData->nama_panjang }}">
                            </div>
                            <div id="nameWarning" class="text-danger" style="padding-top: 10px;"></div>
            
                            <label class="form-label"><h6 class="font-weight-bold" style="padding-top: 15px;">Username</h6></label>
                            <div class="form-group">
                                <input type="text" class="form-control mb-1" name="username" placeholder="isi username anda..." id="usernameInput" oninput="changeButtonColor()" readonly value="{{ $profileData->username }}">
                            </div>
                            <div id="usernameWarning" class="text-danger" style="padding-top: 10px;"></div>
                        
                            <label class="form-label"><h6 class="font-weight-bold"  style="padding-top: 15px;">Alamat Email</h6></label>
                            <div class="form-group">
                                <input type="text" id="emailInput" class="form-control" placeholder="isi alamat email anda..." name="email" oninput="changeButtonColor()" readonly value="{{ $profileData->email }}">
                            </div>
                            <div id="emailWarning" class="text-danger" style="padding-top: 10px;"></div>
                        
                            <label class="form-label"><h6 class="font-weight-bold"  style="padding-top: 15px;">Nomor Telepon</h6></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">+62</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nomor_telepon" placeholder="Isi nomor telepon anda..." id="phone" oninput="runtwofunction()" value="{{ $profileData->nomor_telpon }}">
                            </div>
                            <div id="phoneWarning" class="text-danger" style="padding-top: 10px;"></div>
                            
                            <div style="padding-bottom: 50px; padding-top: 25px;">
                                <button type="button" class="btn btn-outline-primary2" id="saveButton" onclick="saveForm()">Simpan</button>
                            </div>
                        </div>                
                    </form>  
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Isi-->
    @endsection
    @section('script')
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/profile.js"></script>
    @endsection
    <script type="text/javascript">
    </script>
</body>
</html>