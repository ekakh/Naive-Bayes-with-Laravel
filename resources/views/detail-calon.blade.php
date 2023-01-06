@extends('partial.master')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center"></div>
                        <h1 class="h3 mb-2 text-gray-800">Detail Data Calon</h1>
                    </div>
                    <div class="card-body">
                        <p>No KK : {{ $calon->no_kk }}</p>
                        <p>NIK : {{ $calon->nik }}</p>
                        <p>Nama : {{ $calon->nama_kk }}</p>
                        <p>Jenis Kelamin : {{ $calon->jk }}</p>
                        <p>Dusun : {{ $calon->dusun }}</p>
                        <p>RT : {{ $calon->rt }}</p>
                        <p>RW : {{ $calon->rw }}</p>
                        <p>Tanggungan : {{ $calon->tanggungan }}</p>
                        <p>Pekerjaan : {{ $calon->pekerjaan }}</p>
                        <p>Penghasilan : {{ $calon->penghasilan }}</p>
                        <p>Jenis Lantai : {{ $calon->jenis_lantai }}</p>
                        <p>Jenis Dinding : {{ $calon->jenis_dinding }}</p>
                        <p>Sumber Listrik : {{ $calon->sumber_listrik }}</p>
                        <p>Sumber Air : {{ $calon->sumber_air }}</p>
                        <p>Status Kepemilikan MCK : {{ $calon->sk_mck }}</p>
                        <p>Status Kepemilikan Rumah : {{ $calon->sk_rumah }}</p>
                        <a class="btn btn-primary" href="{{ route('data-calon.index') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection