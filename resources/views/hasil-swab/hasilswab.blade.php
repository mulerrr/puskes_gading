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

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body>  
        <div class="swab-result__wrapper">
            <div class="swab-result">
                <div class="swab-result__top">
                    <div class="swab-result__left">
                        <h2>Hasil Swab PCR</h2>
                        <div class="list__two-text__icon">
                            <div class="list__two-text__icon__icon">
                                <img src="{{ URL::asset('images/icon/icon-nik.png'); }}">
                            </div>
                            <div class="list__two-text__icon__text">
                                <div class="list__two-text__icon__text__title">
                                    NIK
                                </div>
                                <div class="list__two-text__icon__text__caption">
                                    {{ $data->nik }}
                                </div>
                            </div>
                        </div>
                        <div class="list__two-text__icon">
                            <div class="list__two-text__icon__icon">
                                <img src="{{ URL::asset('images/icon/icon-schedule.png'); }}">
                            </div>
                            <div class="list__two-text__icon__text">
                                <div class="list__two-text__icon__text__title">
                                    Tanggal
                                </div>
                                <div class="list__two-text__icon__text__caption">
                                    {{ \Carbon\Carbon::parse($data->updaed_at)->format('d F Y')}}
                                </div>
                            </div>
                        </div>
                        <div class="list__two-text__icon">
                            <div class="list__two-text__icon__icon">
                                <img src="{{ URL::asset('images/icon/icon-result.png'); }}">
                            </div>
                            <div class="list__two-text__icon__text">
                                <div class="list__two-text__icon__text__title">
                                    Hasil Swab
                                </div>
                                <div class="list__two-text__icon__text__caption result-{{ $data->result }}">
                                    {{ $data->result }}
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
    </body>
</html>