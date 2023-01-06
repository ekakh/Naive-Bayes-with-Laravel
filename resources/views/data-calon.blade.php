@extends('partial.master') @section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Calon Penerima</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Data Calon</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header col-12">
            <h4 class="m-lg-0 col-10 text-left">
              Kelola Data Calon Penerima
            </h4>
            <button type="button" class="btn btn-success col-2" data-toggle="modal" data-target="#modalAlertImportCalon">
              <i class="fas fa-file-excel"></i>Import Excel
            </button>
          </div>
          <div class="card-body icon-right">
            <a href="{{ route('data-calon.create') }}" class="col-2 btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Data</a>
            <!-- <a href="tambah-data-calon.html" class="col-2 btn btn-icon icon-left btn-primary"><i class="fas fa-file-alt"></i>Update Data</a> -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th width="15%">No. KK</th>
                    <th width="15%">NIK</th>
                    <th width="20%">Nama KK</th>
                    <th width="10%">Jenis Kelamin</th>
                    <th width="10%">Dusun</th>
                    <th width="5%">RT</th>
                    <th width="5%">RW</th>
                    <th width="15%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($calon as $key=>$data)
                  <tr>
                    <td>{{ $data->no_kk }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->nama_kk }}</td>
                    <td>{{ $data->jk }}</td>
                    <td>{{ $data->dusun }}</td>
                    <td>{{ $data->rt }}</td>
                    <td>{{ $data->rw }}</td>
                    <td>
                      <form action="{{route('data-calon.destroy', $data->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <a href="{{ route('data-calon.show', $data->id)}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                        <a href="{{ route('data-calon.edit', $data->id)}}" class="btn btn-icon btn-primary"><i class="fas fa-pen-square"></i></a>
                        <button type="submit" class="btn btn-icon btn-danger" value="Delete">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </td>
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