<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <title>Result</title>
</head>
<body>
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
                                <a href="profile" class="nav-desktop__rightmenu goToTop">
                                    <div class="nav-desktop__right__menu__text">
                                        Upload Excel
                                    </div>
                                    <div class="nav-desktop__right__menu__lines">
                                        <div class="nav-desktop__right__menu__line"></div>
                                    </div>
                                </a>
                                <a href="result" class="nav-desktop__rightmenu gotoRegister">
                                    <div class="nav-desktop__right__menu__text">
                                        Daftar Hasil PCR
                                    </div>
                                    <div class="nav-desktop__right__menu__lines">
                                        <div class="nav-desktop__right__menu__line"></div>
                                    </div>
                                </a>
                            </div>
                            <a href="logout" class="btn btn-danger btn-sm">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="mb-5" style="margin-top: 7rem">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </section>
    {!! $dataTable->scripts() !!}
</body>
</html>