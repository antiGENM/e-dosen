@extends('dashboard.layouts.main0')

@section('container')

<section class="row justify-content-center" style="min-height:367px;" >
    
    <div class="col-md-8 my-auto">
        <p class="text-grey m-3"><b>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </b></p>
        <a class="btn bg-blue text-white m-3" href="/search" role="button">Expertise Search</a>
    </div>
    <div class="col-md-3 my-auto text-center">
        <img src="Img/Home/teacher.svg">
    </div>
</section>

<section class="row d-flex justify-content-center text-center" id="section3-home" style="min-height:661px;" >
    <div class="col-md-9 my-auto">
        <p class="p-3 text-grey"><b>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </b></p>
        <div class="row">
            <div class="col-md-3 w-100">
                <div class="card shadow mx-auto d-block" id="card2-home" style="max-width: 640px; height: 335px;">
                    <div class="card-body d-flex flex-column align-items-center text-grey">
                        <b class="card-title" style="font-size: 24px;">Jumlah Dosen Terdaftar</b>
                        <b class="card-subtitle m-3" style="color: #FFB800; font-size: 40px;">123 Dosen</b>
                        <b class="card-text" style="font-size: 24px;">Dari Berbagai Universitas Di</b>
                        <b class="card-text" style="font-size: 32px;">Seluruh Indonesia</b>
                        <a class="btn btn-lg bg-blue text-white m-3" href="/login" role="button">Register Now!</a>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="row d-flex justify-content-center text-center my-auto"  style="min-height:561px;" >
    <div class="col-md-3 my-auto">
        <div class="card shadow-sm mx-auto d-block m-3 bg-blue" id="card3-home" style="max-width: 380px; max-height: 491px; ">
            <div class="card-body d-flex flex-column align-items-center text-white m-3">
                <b class="card-text" style="font-size: 32px;">Rp 299.000</b>
                <b class="card-text" style="font-size: 24px; letter-spacing: 6.96px;">SEMESTERAN</b>
                <button class="btn bg-white m-4 w-75" style="color:#71c9ce;">6 BULAN</button>
                <div class="text-start">
                    <h6 class="card-text">✓ Pengelolaan Portfolio</h6>
                    <h6 class="card-text">✓ Pengelolaan Publikasi</h6>
                    <h6 class="card-text">✓ Pengelolaan Kepangkatan</h6>
                </div>
                <a class="btn btn-lg text-white mt-5" href="/login" role="button" style="background-color: #5b5b5b;">Register Now!</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-auto">
        <div class="card shadow-sm mx-auto d-block m-3" id="card3-home" style="max-width: 380px; max-height: 491px; background-color: #e4eddb;">
            <div class="card-body d-flex flex-column align-items-center m-3">
                <b class="card-text" style="font-size: 32px;">Rp 499.000</b>
                <b class="card-text" style="font-size: 24px; letter-spacing: 6.96px;">TAHUNAN</b>
                <button class="btn bg-white m-4 w-75" style="color:#abba9c;">12 BULAN</button>
                <div class="text-start">
                    <h6 class="card-text">✓ Pengelolaan Portfolio</h6>
                    <h6 class="card-text">✓ Pengelolaan Publikasi</h6>
                    <h6 class="card-text">✓ Pengelolaan Kepangkatan</h6>
                </div>
                <a class="btn btn-lg text-white mt-5" href="/login" role="button" style="background-color: #FFB800">Register Now!</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-auto">
        <div class="card shadow-sm mx-auto d-block m-3" id="card3-home" style="max-width: 380px; max-height: 491px; background-color: #515e63;">
            <div class="card-body d-flex flex-column align-items-center text-white m-3">
                <b class="card-text" style="font-size: 32px;">Rp 2.499.000</b>
                <b class="card-text" style="font-size: 24px; letter-spacing: 6.96px;">LIFE TIME</b>
                <button class="btn bg-white m-4 w-75" style="color:#515e63;">SEUMUR HIDUP</button>
                <div class="text-start">
                    <h6 class="card-text">✓ Pengelolaan Portfolio</h6>
                    <h6 class="card-text">✓ Pengelolaan Publikasi</h6>
                    <h6 class="card-text">✓ Pengelolaan Kepangkatan</h6>
                </div>
                <a class="btn btn-lg bg-blue text-white mt-5" href="/login" role="button">Register Now!</a>
            </div>
        </div>
    </div>
</section>

@endsection