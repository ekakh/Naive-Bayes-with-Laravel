@extends('partial.master')
@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('profile.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1> Ubah Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="{{ route('profile.index') }}">Profile</a></div>
            <div class="breadcrumb-item">Ubah Profile</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Form Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" value="{{old('nama', $profile->nama)}}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="jabatan Lengkap" value="{{old('jabatan', $profile->jabatan)}}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-7 col-12">
                                    <label>Username</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email Lengkap" value="{{old('email', $profile->email)}}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-5 col-12">
                                    <label>Telepon</label>
                                    <input type="tel" name="telepon" class="form-control @error('telepon') is-invalid @enderror" placeholder="telepon Lengkap" value="{{old('telepon', $profile->telepon)}}">
                                    @error('telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary" id="save-btn">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection