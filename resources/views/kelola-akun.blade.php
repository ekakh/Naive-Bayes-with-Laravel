@extends('partial.master') @section('content')
<section class="section">
    <div class="section-header">
        <h1>Kelola User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Kelola User</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header col-12">
                        <h4 class="m-lg-0 col-10 text-left">
                            Kelola Data User
                        </h4>
                        <a href="{{ route('kelola-akun.create') }}" class="col-2 btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah User
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th width="10%">Role</th>
                                        <th width="20%">Nama</th>
                                        <th width="20%">Jabatan</th>
                                        <th width="15%">Telepon</th>
                                        <th width="20%">Email</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($akun as $key=>$data)
                                    <tr>
                                        <td>{{ $data->roles->nm_roles}}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <th scope="col">
                                            <form action="{{route('kelola-akun.destroy', $data->id)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <center>
                                                    <a href="{{ route('kelola-akun.edit', $data->id)}}" class="btn btn-icon btn-primary"><i class="fas fa-pen-square"></i></a>
                                                    <button type="submit" class="btn btn-icon btn-danger" value="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </center>
                                            </form>
                                        </th>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">DATA KOSONG!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection