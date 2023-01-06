@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{ route('data-calon.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Tambah Data Calon</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item active"><a href="{{ route('data-calon.index') }}">Data Calon</a></div>
      <div class="breadcrumb-item">Tambah Data Calon</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Tambah Data Calon Penerima</h2>
    <p class="section-lead">
      Ini merupakan halaman untuk menambahkan data masyarakat calon penerima bantuan.
    </p>
    <div id="output-status"></div>
    <div class="row">
      <div class="col-md-10">
        <div class="card" id="settings-card">
          <div class="card-header">
            <h4>Form Tambah Data</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('data-calon.store') }} " method="POST" enctype='multipart/form-data'>
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>NO. KK</label>
                  <input type="text" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror" placeholder="No. Kartu Keluarga" value="{{old('no_kk')}}">
                  @error('no_kk')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label>NIK Kepala Keluarga</label>
                  <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="NIK" value="{{old('nik')}}">
                  @error('nik')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label>Nama Kepala Keluarga</label>
                  <input type="text" name="nama_kk" class="form-control @error('nama_kk') is-invalid @enderror" placeholder="Nama Kepala Keluarga" value="{{old('nama_kk')}}">
                  @error('nama_kk')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-4">
                  <label>Jenis Kelamin</label>
                  <select name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{old('jk')}}">
                    <option selected>Pilih</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                  @error('jk')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Dusun</label>
                  <select name="dusun" class="form-control @error('dusun') is-invalid @enderror" value="{{old('dusun')}}">
                    <option selected>Pilih</option>
                    <option>Mekarmulya</option>
                    <option>Mawarsari</option>
                    <option>Mekarsari</option>
                    <option>Huludayeuh</option>
                    <option>Babakan Indah</option>
                    <option>Cangkore</option>
                  </select>
                  @error('dusun')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-2">
                  <label>Rt</label>
                  <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror" placeholder="RT" value="{{old('rt')}}">
                  @error('rt')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-2">
                  <label>Rw</label>
                  <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror" placeholder="RW" value="{{old('rw')}}">
                  @error('rw')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label>Tanggungan</label>
                  <select name="tanggungan" class="form-control @error('tanggungan') is-invalid @enderror" value="{{old('tanggungan')}}">
                    <option selected>Pilih</option>
                    @foreach ($tanggungan as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('tanggungan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label>Pekerjaan</label>
                  <select name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{old('pekerjaan')}}">
                    <option selected>Pilih</option>
                    @foreach ($pekerjaan as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('pekerjaan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label>Penghasilan</label>
                  <select name="penghasilan" class="form-control  @error('penghasilan') is-invalid @enderror" value="{{old('penghasilan')}}">
                    <option selected>Pilih</option>
                    @foreach ($penghasilan as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('penghasilan')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Jenis Lantai</label>
                  <select name="jenis_lantai" class="form-control  @error('jenis_lantai') is-invalid @enderror" value="{{old('jenis_lantai')}}">
                    <option selected>Pilih</option>
                    @foreach ($jl as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('jenis_lantai')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Dinding</label>
                  <select name="jenis_dinding" class="form-control  @error('jenis_dinding') is-invalid @enderror" value="{{old('jenis_dinding')}}">
                    <option selected>Pilih</option>
                    @foreach ($jd as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('jenis_dinding')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Sumber Air</label>
                  <select name="sumber_air" class="form-control  @error('sumber_air') is-invalid @enderror" value="{{old('sumber_air')}}">
                    <option selected>Pilih</option>
                    @foreach ($sa as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('sumber_air')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Sumber Listrik</label>
                  <select name="sumber_listrik" class="form-control  @error('sumber_listrik') is-invalid @enderror" value="{{old('sumber_listrik')}}">
                    <option selected>Pilih</option>
                    @foreach ($sl as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('sumber_listrik')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Status Kepemilikan MCK</label>
                  <select name="sk_mck" class="form-control  @error('sk_mck') is-invalid @enderror" value="{{old('sk_mck')}}">
                    <option selected>Pilih</option>
                    @foreach ($mck as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('sk_mck')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Status Kepemilikan Rumah</label>
                  <select name="sk_rumah" class="form-control  @error('sk_rumah') is-invalid @enderror" value="{{old('sk_rumah')}}">
                    <option selected>Pilih</option>
                    @foreach ($rumah as $key2=>$data2)
                    <?php if ($data2->jenis_kriteria) { ?>
                      <option>{{ $data2->nama_kriteria }}</option>
                      @error('sk_rumah')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <?php } ?>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="card-footer bg-whitesmoke text-md-right">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection