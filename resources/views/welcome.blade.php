<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Puskesmas Kecamatan Kelapa Gading</title>

        <link rel="icon" href="{{ URL::asset('images/logo/logo-pks-kelapa-gading.png'); }}" type="icon" sizes="16x16">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style> --}}

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
         
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            {{-- Nav Login --}}
            @if (Route::has('IsLogged'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- Navigation Desktop --}}
            <nav class="desktop-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nav-desktop">
                                <div class="nav-desktop__left">
                                    <img src="{{ URL::asset('images/logo/logo-pks-kelapa-gading.png'); }}" alt="Logo Puskesmas Kelapa Gading">
                                    PKC Kelapa Gading
                                </div>
                                <div class="nav-desktop__right">
                                    <div class="nav-desktop__right__menu">
                                        <button class="nav-desktop__rightmenu goToTop">
                                            <div class="nav-desktop__right__menu__text">
                                                Beranda
                                            </div>
                                            <div class="nav-desktop__right__menu__lines">
                                                <div class="nav-desktop__right__menu__line"></div>
                                            </div>
                                        </button>
                                        <button class="nav-desktop__rightmenu gotoRegister">
                                            <div class="nav-desktop__right__menu__text">
                                                Daftar Vaksinasi
                                            </div>
                                            <div class="nav-desktop__right__menu__lines">
                                                <div class="nav-desktop__right__menu__line"></div>
                                            </div>
                                        </button>
                                        <button class="nav-desktop__rightmenu gotoSchedule">
                                            <div class="nav-desktop__right__menu__text">
                                                Jadwal & Lokasi Vaksinasi
                                            </div>
                                            <div class="nav-desktop__right__menu__lines">
                                                <div class="nav-desktop__right__menu__line"></div>
                                            </div>
                                        </button>
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#cekSwab">Cek Hasil Swab</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            {{-- Navigation Mobile --}}
            <nav class="mobile-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-nav__wrapper">
                                <div class="mobile-nav__left">
                                    <img src="{{ URL::asset('images/logo/logo-pks-kelapa-gading.png'); }}" alt="Logo Puskesmas Kelapa Gading">
                                    PKC Kelapa Gading
                                </div>
                                <a href="" class="btn btn-primary btn-sm">Cek Hasil Swab</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            {{-- Menubar Mobile --}}
            <div class="menubar-wrapper">
                <nav id="menubar">
                    <div class="menubar__menu gotoRegister">
                        Daftar Vaksinasi
                        <div class="menubar__menu__icon">
                            <img src="{{ URL::asset('images/icon/icon-arrow.png'); }}">
                        </div>
                    </div>
                    <div class="menubar__separator"></div>
                    <div class="menubar__menu gotoSchedule">
                        Lokasi Vaksinasi
                        <div class="menubar__menu__icon">
                            <img src="{{ URL::asset('images/icon/icon-arrow.png'); }}">
                        </div>
                    </div>
                </nav>
            </div>

            {{-- Header --}}
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 header__left">
                            <div class="header-banner">
                                <span>Info</span>
                                Kini warga usia 18 tahun ke atas bisa mengikuti vaksinasi
                            </div>
                            <h1>
                                Daftar Program Vaksinasi Sekarang
                            </h1>
                            <p>
                                Pelaksanaan vaksinasi COVID-19 bertujuan untuk memutus rantai penularan penyakit dan menghentikan wabah COVID-19. Vaksin COVID-19 bermanfaat untuk memberi perlindungan tubuh agar tidak jatuh sakit akibat COVID-19 dengan cara menimbulkan atau menstimulasi kekebalan spesifik dalam tubuh dengan pemberian vaksin.
                            </p>
                            <button class="btn btn-primary gotoRegister">Lihat Syarat Vaksinasi & Daftar</button>
                        </div>
                        <div class="col-md-6">
                            <div class="header-right">
                                <img src="{{ URL::asset('images/illustration/pkc-vaccine.png'); }}" alt="daftar vaksin puskesmas kelapa gading">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-illustration">
                    <img src="{{ URL::asset('images/illustration/header-illustration.png'); }}" alt="daftar vaksin puskesmas kelapa gading">
                </div>
            </header>

            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="big-menu-title">
                                <div class="icon icon-secondary">
                                    <img src="{{ URL::asset('images/icon/icon-info.png'); }}" alt="info vaksin puskesmas kelapa gading">
                                </div>
                                <div class="menu-title">
                                    Pengumuman dosis kedua vaksin COVID-19 untuk 18+
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Untuk dosis 2 vaksin COVID-19 bagi 18+, tidak dilakukan penjadwalan melalui website. Anda bisa datang sesuai lokasi dan waktu yang telah ditentukan oleh petugas di lokasi vaksinasi dosis 1.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-content">
                <div id="home-register" class="register">
                    <div class="ornamen">
                        <img src="{{ URL::asset('images/illustration/backdrop-register.png'); }}">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class=" register-img">
                                    <img src="{{ URL::asset('images/illustration/vaccine-register-illustration.png'); }}" alt="jadwal vaksin puskesmas kelapa gading">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="big-menu-title mb-4">
                                    <div class="icon icon-primary">
                                        <img src="{{ URL::asset('images/icon/icon-register.png'); }}" alt="daftar vaksin puskesmas kelapa gading">
                                    </div>
                                    <div class="menu-title">
                                        Pendaftaran Vaksin Covid-19 untuk Pra Lansia
                                    </div>
                                </div>
                                <p>
                                    Silahkan mendaftar untuk mendapatkan vaksinasi COVID-19 yang KTP atau bertempat tinggal di wilayah DKI Jakarta
                                </p>
                                <div class="submenu mb-2">
                                    Syarat Pendaftaran Vaksin Covid-19 untuk Pra Lansia:
                                </div>
                                <ol class="mb-4">
                                    <li>Usia >18 tahun atau sudah berulang tahun ke-18 saat pengisian formulir</li>
                                    <li>Usia >50 - 59 tahun untuk kategori pra lansia</li>
                                    <li>Usia >60 tahun untuk kategori lansia</li>
                                    <li>WNI yang memiliki KTP DKI atau domisili dari Kelurahan setempat di wilayah DKI Jakarta</li>
                                    <li>Saat vaksinasi, membawa fotokopi KTP dan KK, memakai masker dan menerapkan protokol kesehatan COVID-19</li>
                                    <li>Validasi persyaratan dilakukan di lokasi vaksinasi</li>
                                    <li>Nomor antrian sesuai kedatangan di lokasi vaksinasi</li>
                                    <li>Tidak terdaftar di vaksin gotong royong</li>
                                </ol>
                                <a href="" class="btn btn-primary">Daftar Vaksinasi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="home-schedule" class="schedule">
                    <div class="ornamen">
                        <img src="{{ URL::asset('images/illustration/backdrop-schedule.png'); }}">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 big-menu-center">
                                <div class="big-menu-title mb-4">
                                    <div class="icon icon-primary">
                                        <img src="{{ URL::asset('images/icon/icon-schedule.png'); }}" alt="jadwal vaksin puskesmas kelapa gading">
                                    </div>
                                    <div class="menu-title">
                                        Konfirmasi Jadwal Vaksin Covid-19 untuk Pra Lansia dan Non Lansia
                                    </div>
                                </div>
                                <p class="mb-4 text-center">
                                    Cek konfirmasi nama yang telah didaftarkan melalui bit.ly/vaksinpuskesmasgading untuk penerima vaksin COVID-19 dengan kriteria pra lansia atau pendamping berdasarkan pos vaksinasi yang Anda pilih saat mendaftar. Calon penerima vaksin  wajib membawa fotokopi KK dan KTP. Nomer antrian sesuai dengan kedatangan. Calon penerima vaksin akan tetap dilakukan pemeriksaan skrining dan dokumen saat pelaksanaan vaksinasi. Keputusan pemberian vaksin tetap diserahkan oleh petugas pelaksana.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="home-location" class="location mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="location-detail mb-5">
                                                <div class="big-menu-title mb-4">
                                                    <div class="icon icon-primary">
                                                        <img src="{{ URL::asset('images/icon/icon-map.png'); }}" alt="lokasi vaksi puskesmas kelapa gading">
                                                    </div>
                                                    <div class="menu-title">
                                                        Jadwal Vaksin SMP Negeri 270
                                                    </div>
                                                </div>
                                                <p>
                                                    Jl. Kompi Udin, RT.3/RW.7, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14250
                                                </p>
                                                <a href="https://goo.gl/maps/Gbw6KgKrzXipz3iWA" target="_blank" class="btn btn-primary">Lihat di Peta</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="location-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.653851411901!2d106.90932891531881!3d-6.177070962250029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4d4da872d27%3A0xbcdef57134c91ffd!2sSekolah%20Menengah%20Pertama%20Negeri%20270%20Jakarta%20Utara!5e0!3m2!1sen!2sid!4v1626788467262!5m2!1sen!2sid" width="100%" height="250" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="location-schedule">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="location mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="location-detail mb-5">
                                                <div class="big-menu-title mb-4">
                                                    <div class="icon icon-primary">
                                                        <img src="{{ URL::asset('images/icon/icon-map.png'); }}" alt="lokasi vaksi puskesmas kelapa gading">
                                                    </div>
                                                    <div class="menu-title">
                                                        Jadwal Vaksin GOR Judo Kelapa Gading
                                                    </div>
                                                </div>
                                                <p>
                                                    Jalan Kelapa Puan Raya Blok EF 1 No.1, Kelapa Gading, RW.13, Klp. Gading Tim., Jakarta Utara, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240
                                                </p>
                                                <a href="https://goo.gl/maps/9LZEQLm78cvYT6WN8" target="_blank" class="btn btn-primary">Lihat di Peta</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="location-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.419594935125!2d106.9047831!3d-6.1695999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5321adbaff1%3A0x2e08e576e6a78587!2sGedung%20Judo!5e0!3m2!1sen!2sid!4v1626854191916!5m2!1sen!2sid" width="100%" height="250" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="location-schedule">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <footer>

            </footer>

            <!-- Modal -->
            <div class="modal fade" id="cekSwab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- jQuery 3 -->
        <script src="{{ URL::asset('js/jquery-3.6.0.js'); }}"></script>

        <script>
            $(document).ready(function (){
                $(".gotoRegister").click(function (){
                    $('html, body').animate({
                        scrollTop: $("#home-register").offset().top
                    }, 600);
                });

                $(".gotoSchedule").click(function (){
                    $('html, body').animate({
                        scrollTop: $("#home-schedule").offset().top
                    }, 600);
                });

                $(".goToTop").click(function (){
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                });

                $(".nav-desktop__rightmenu").hover(
                    function() {
                        $(this).find(".nav-desktop__right__menu__line").toggleClass("nav-hover");
                    }
                );

                $('#cekSwab').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                    console.log('tes');
                })

                var load_flag = true;
                $(document).scroll(function() {
                    
                    var mywindow = $(window);
                    var mypos = mywindow.scrollTop();
                    var up = false;
                    var newscroll;
                    mywindow.scroll(function () {
                        newscroll = mywindow.scrollTop();
                        if (newscroll > mypos && !up) {
                            $('#menubar ').fadeOut();
                            up = !up;
                            console.log(up);
                        } else if(newscroll < mypos && up) {
                            $('#menubar ').fadeIn();
                            up = !up;
                        }
                        mypos = newscroll;
                    });
                });

            });
        </script>
    </body>
</html>
