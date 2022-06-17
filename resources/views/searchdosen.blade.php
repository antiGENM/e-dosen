@extends('dashboard.layouts.main0')

@section('container')

<section class="row d-flex justify-content-center my-auto text-center" id="section1-auth">
    <div class="col-md-7 p-3">
        <h1 class="m-3"><b>Pencarian Dosen</b></h1>

        <form class="m-3">
            <div class="mb-3">
                <input type="text" class="form-control text-center mb-2" id="cari" placeholder="Cari Dosen">
                <label class="form-label text-grey ">Anda dapat mencari dosen berdasarkan nama, universitas, program studi, dll</label>
            </div>
            <button type="submit" class="btn bg-blue text-white w-25">Search</button>
        </form>

    </div>
    <div class="col-md-11 p-3">
        <h3 class="card-title m-3 text-start"><b>Daftar Dosen</b></h3>
        <table class="table table-hover table-responsive">
            <tr>
                <th>Nama</th>
                <th>Bidang Keahlian</th>
                <th>Universitas</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>
                    <a class="btn bg-blue btn-sm text-white" href="/portofolio">Portfolio</a>
                </td>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>
                    <a class="btn bg-blue btn-sm text-white" href="/portofolio">Portfolio</a>
                </td>
            </tr>
            <tr>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>Test</td>
                <td>
                    <a class="btn bg-blue btn-sm text-white" href="/portofolio">Portfolio</a>
                </td>
            </tr>
        </table>
    </div>
</section>

@endsection