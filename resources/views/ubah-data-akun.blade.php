@extends('partial.master')
@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('settings.kelola') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Akun</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="settings.html">Kelola Akun</a></div>
            <div class="breadcrumb-item">Tambah Data Akun</div>
        </div>
    </div>

    <div class="section-body">
        <div id="output-status"></div>
        <div class="row">
            <div class="col-md-10">
                <div class="card" id="settings-card">
                    <div class="card-header">
                        <h4>Form Tambah Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelola-akun.update', $akun->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Role</label>
                                    <select name="roles_id" class="form-control @error('roles_id') is-invalid @enderror" value="{{old('roles_id, $akun->roles_id')}}">
                                        <option selected>Pilih</option>
                                        @foreach ( $roles as $data )
                                        @if (old('role_id', $akun->roles_id) == $data->id)
                                        <option value="{{ $data->id }}" selected>{{ $data->nm_roles }}</option>
                                        @else
                                        <option value="{{ $data->id }}">{{ $data->nm_roles }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('roles_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" value="{{old('nama', $akun->nama)}}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Jabatan" value="{{old('jabatan', $akun->jabatan)}}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Telepon</label>
                                    <input type="tel" name="telepon" class="form-control @error('telepon') is-invalid @enderror" placeholder="Telepon" value="{{old('telepon', $akun->telepon)}}">
                                    @error('telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email', $akun->email)}}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- <div class="form-group col-md-4">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{old('password')}}">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> -->
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