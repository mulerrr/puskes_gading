<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Swab</title>
    <link rel="icon" href="{{ URL::asset('images/logo/logo-pks-kelapa-gading.png'); }}" type="icon" sizes="16x16">
    <!-- Bootstrap CSS -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/mini.css') }}">
</head>
<body>

    <div class="cek__wrapper">
        <div class="cek-pcr">
            <h2>Periksa Hasil Swab PCR</h2>
            <form action="{{ route('hasil-swab.cekswab') }}" method="post" enctype="multipart/form-data" id="cekForm">
                @csrf
                {{-- <div class="result">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div> --}}
                <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                <input type="text" class="form-control" id="nik" placeholder="Masukkan 16 digit NIK" name="nik" pattern="\d*" minlength="16" maxlength="16" title="Harus 16 angka" required>
                <span class="text-danger">@error('nik'){{ $message }} @enderror</span>
                <button type="submit" class="btn btn-primary">Lihat Hasil</button>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="swab-result">
                <div class="swab-result__top">
                    <div class="swab-result__left">
                        {{-- <h2>Hasil Swab PCR</h2> --}}
                        <div class="list__two-text__icon">
                            {{-- <div class="list__two-text__icon__icon">
                                <img src="{{ URL::asset('images/icon/icon-result.png'); }}">
                            </div> --}}
                            <div class="list__two-text__icon__text">
                                <div class="list__two-text__icon__text__title">
                                    Hasil Swab
                                </div>
                                <div class="list__two-text__icon__text__caption">
                                    @if(Session::get('fail'))
                                        {{ Session::get('fail') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swab-result__right">
                        <div class="swab-result__right__illustration">
                            <img src="{{ URL::asset('images/illustration/swab-illustration.png'); }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swab-result__bottom">
                    <a href="hasilswab" class="btn btn-primary">Tutup</a>
                </div>
            </div>
        </div>
        </div>
    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @if(Session::get('fail'))
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
            myModal.show()
        </script>
    @endif
</body>
</html>