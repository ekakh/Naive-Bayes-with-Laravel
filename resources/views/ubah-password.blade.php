@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{ route('settings.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Ubah Password</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item active"><a href="{{ route('settings.index') }}">Settings</a></div>
      <div class="breadcrumb-item">Ubah Password</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Ubah Password</h2>
    <p class="section-lead">
      Ini merupakan halaman ubah password.
    </p>

    <div id="output-status"></div>
    <div class="row">
      <div class="col-md-8">
        <div class="card" id="settings-card">
          <form action="{{ route('settings.update', Auth::user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
              <h4>Form Ubah Password</h4>
            </div>
            <div class="card-body">
              <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Password Baru</label>
                <div class="col-sm-6 col-md-9">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="********">
                  @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group row align-items-center">
                <label for="password-confirm" class="form-control-label col-sm-3 text-md-right">Konfirmasi Password</label>
                <div class="col-sm-6 col-md-9">
                  <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="********" autocomplete="new-password">
                </div>
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