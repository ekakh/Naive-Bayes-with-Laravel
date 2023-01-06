@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Hi, {{ Auth::user()->nama }}!</h2>
    <p class="section-lead">
      Ini merupakan halaman data diri anda.
    </p>
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{ Auth::user()->nama }}
              <div class="text-muted d-inline font-weight-normal">
                <div class="slash"></div>{{ Auth::user()->roles->nm_roles }}
              </div>
            </div>
            <div class="profile-widget-name">{{ Auth::user()->jabatan }}</div>
          </div>
          <div class="card-footer text-right">
            <a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-primary" id="save-btn">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection