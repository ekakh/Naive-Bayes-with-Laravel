@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{ route('kriteria.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Ubah Data Kriteria</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item active"><a href="{{ route('kriteria.index') }}">Kriteria</a></div>
      <div class="breadcrumb-item">Ubah Data Kriteria</div>
    </div>
  </div>

  <div class="section-body">
    <div id="output-status"></div>
    <div class="row">
      <div class="col-md-10">
        <div class="card" id="settings-card">
          <div class="card-header">
            <h4>Form Edit Data</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Jenis Kriteria</label>
                  <select name="jenis_kriteria" class="form-control @error('jenis_kriteria') is-invalid @enderror" value="{{old('jenis_kriteria', $kriteria->jenis_kriteria)}}">
                    <option selected>{{old('jenis_kriteria', $kriteria->jenis_kriteria)}}</option>
                    <option>Tanggungan</option>
                    <option>Pekerjaan</option>
                    <option>Penghasilan</option>
                    <option>Jenis Lantai</option>
                    <option>Jenis Dinding</option>
                    <option>Sumber Listrik</option>
                    <option>Sumber Air</option>
                    <option>SK MCK</option>
                    <option>SK Rumah</option>
                  </select>
                  @error('jenis_kriteria')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Kode Kriteria</label>
                  <input type="text" name="kode_kriteria" class="form-control @error('kode_kriteria') is-invalid @enderror" placeholder="Kode Kriteria" value="{{old('kode_kriteria', $kriteria->kode_kriteria)}}">
                  @error('kode_kriteria')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Kriteria</label>
                  <input type="text" name="nama_kriteria" class="form-control @error('nama_kriteria') is-invalid @enderror" placeholder="Nama Kriteria" value="{{old('nama_kriteria', $kriteria->nama_kriteria)}}">
                  @error('nama_kriteria')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="card-footer bg-whitesmoke text-md-right">
                <button type="submit" class="btn btn-primary" id="save-btn">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection