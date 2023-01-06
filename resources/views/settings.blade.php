@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Settings</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Settings</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Settings</h2>
    <p class="section-lead">
      Halaman ini digunakan untuk semua pengaturan aplikasi.
    </p>

    <div class="row">
      <div class="col-lg-6">
        <div class="card card-large-icons">
          <div class="card-icon bg-primary text-white">
            <i class="fas fa-lock"></i>
          </div>
          <div class="card-body">
            <h4>Ubah Password</h4>
            <p>Ini merupakan fitur ubah password.</p>
            <a href="{{ route('settings.edit', Auth::user()->id) }}" class="card-cta">Ubah<i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection