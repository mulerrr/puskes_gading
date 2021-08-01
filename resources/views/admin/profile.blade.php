@extends('admin.dashboard-template')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="dashboard-nav">
                    <div class="dashboard-nav__menu">
                        <a href="add">Add</a>
                        <a href="result">Result</a>
                    </div>
                    <div class="dashboard-nav__logout">
                        <a href="logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Upload Excel Hasil Tes PCR</h1>
                <form action="{{ route('result.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="result">
                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Choose Excel File</label>
                        <input type="file" class="form-control" id="file" placeholder="Drop file" name="file">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-block btn-primary mb-3 mx-auto">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <p>{{ $LoggedUserInfo->name }}</p>
    <p>{{ $LoggedUserInfo->email }}</p> --}}
@stop