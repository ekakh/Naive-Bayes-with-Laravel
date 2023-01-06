@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Penerima</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Data Penerima</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Kelola Data Penerima</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th>No. KK</th>
                    <th>NIK</th>
                    <th>Nama KK</th>
                    <th>Jenis Kelamin</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Status</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($penerima as $key=>$data)
                  <tr>
                    <td>{{ $data->no_kk }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->nama_kk }}</td>
                    <td>{{ $data->jk }}</td>
                    <td>{{ $data->dusun }}</td>
                    <td>{{ $data->rt }}</td>
                    <td>{{ $data->rw }}</td>
                    <td>{{ $data->status }}</td>
                    <td>{{ date('Y', strtotime($data["updated_at"])) }}</td>
                    <td>
                      <form action="{{route('data-penerima.destroy', $data->id)}}">
                        @csrf
                        <a href="{{ route('data-penerima.show', $data->id)}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
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