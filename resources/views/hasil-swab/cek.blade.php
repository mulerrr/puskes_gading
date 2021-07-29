<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Swab</title>
    <link rel="icon" href="{{ URL::asset('images/logo/logo-pks-kelapa-gading.png'); }}" type="icon" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/mini.css') }}">
</head>
<body>

    <div class="cek__wrapper">
        <div class="cek-pcr">
            <h2>Periksa Hasil Swab PCR</h2>
            <form action="{{ route('hasil-swab.cekswab') }}" method="post" enctype="multipart/form-data" id="cekForm">
                @csrf
                <div class="result">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>
                <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                <input type="text" class="form-control" id="nik" placeholder="Masukkan 16 digit NIK" name="nik" pattern="\d*" minlength="16" maxlength="16" title="Harus 16 angka" required>
                <span class="text-danger">@error('nik'){{ $message }} @enderror</span>
                <button type="submit" class="btn btn-primary">Lihat Hasil</button>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>