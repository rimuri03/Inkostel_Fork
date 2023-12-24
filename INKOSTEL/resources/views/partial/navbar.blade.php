<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atur Dulu</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  </head>
  <body>

    <!-- navbar start -->
    <header>
        <nav>
            <div class="logo" id="logoHeader">
                <i class='bx bx-menu menu-icon'></i>
                <div class="container" id="conHeader">
                    <div class="row">
                        <div class="col-md-4 logo">

                            <img src="{{ asset('img/logo_inkostel.png') }}" alt="Logo KosTel">

                        </div>

                        <div class="col-md-4 text-center">
                            <div class="search">
                                <input class="form-control mr-sm-2" id="searchInput" type="search" placeholder="Cari Kos disini..!" aria-label="Cari">
                                <button type="button" class="btn">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-4 text-end" id="button-container">
                            <h5 id="username">Supri</h5>

                              <a class="nav-link" href="/profile" id="profileButton">
                                <img src="{{ asset('img/profile.png') }}" style="width:50px; border-radius:50%;"/>

                                <span class="xp-user-live"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- SideBar Menu -->
                <div class="sidebar">
                    <div class="logo">
                        <i class='bx bx-menu menu-icon'></i>
                        <span class="logo-name">InKosTel</span>
                    </div>

                    <div class="sidebar-content">
                        <ul class="lists">

                            <li class="list">
                                <a href="/" class="nav-link">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="link">Home</span>
                                </a>
                            </li>

                            <li class="list">
                                <a href="/carikost" class="nav-link">
                                    <i class='bx bx-search icon'></i>
                                    <span class="link">Cari Kost</span>
                                </a>
                            </li>

                            <li class="list">
                                <a href="/simpan" class="nav-link">
                                    <i class='bx bx-archive-in icon'></i>
                                    <span class="link">Kos Tersimpan</span>
                                </a>
                            </li>

                            <li class="list">
                                <a href="/jualkos" class="nav-link">
                                    <i class='bx bx-message-square-add icon'></i>
                                    <span class="link">Iklankan Kos</span>
                                </a>
                            </li>

                            <li class="list">
                                <a href="/profile" class="nav-link">
                                    <i class='bx bx-user-circle icon'></i>
                                    <span class="link">Profile</span>
                                </a>
                            </li>
                        </ul>

                        <div class="bottom-content">
                            <li class="list">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-log-out icon'></i>
                                    <span class="link">Log Out</span>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
        </nav>

        <!-- Overlay -->
        <section class="overlay"></section>
    </header>
    <!--Navbar End-->

    <section>
        @yield('isi')
    </section>
    <!-- script js -->

    <script src="{{ asset('js/layout.js') }}"></script>
    @yield('script')
    <br>
    <br>
    <br>
    <br>
    @extends('partial.footer')
  </body>
</html>

 

