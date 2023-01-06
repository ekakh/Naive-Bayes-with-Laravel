@extends('partial.master')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center"></div>
                        <h1 class="h3 mb-2 text-gray-800">Detail Data Penerima</h1>
                    </div>
                    <div class="card-body">
                        <p>No KK : {{ $penerima->no_kk }}</p>
                        <p>NIK : {{ $penerima->nik }}</p>
                        <p>Nama : {{ $penerima->nama_kk }}</p>
                        <p>Jenis Kelamin : {{ $penerima->jk }}</p>
                        <p>Dusun : {{ $penerima->dusun }}</p>
                        <p>RT : {{ $penerima->rt }}</p>
                        <p>RW : {{ $penerima->rw }}</p>
                        <p>Tanggungan : {{ $penerima->tanggungan }}</p>
                        <p>Pekerjaan : {{ $penerima->pekerjaan }}</p>
                        <p>Penghasilan : {{ $penerima->penghasilan }}</p>
                        <p>Jenis Lantai : {{ $penerima->jenis_lantai }}</p>
                        <p>Jenis Dinding : {{ $penerima->jenis_dinding }}</p>
                        <p>Sumber Listrik : {{ $penerima->sumber_listrik }}</p>
                        <p>Sumber Air : {{ $penerima->sumber_air }}</p>
                        <p>Status Kepemilikan MCK : {{ $penerima->sk_mck }}</p>
                        <p>Status Kepemilikan Rumah : {{ $penerima->sk_rumah }}</p>
                        <p>Status Kelayakan : {{ $penerima->status }}</p>
                        <p>Tahun Seleksi Penerima : {{ date('Y', strtotime($penerima["updated_at"])) }}</p>
                        <a class="btn btn-primary" href="{{ route('data-penerima.index') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection