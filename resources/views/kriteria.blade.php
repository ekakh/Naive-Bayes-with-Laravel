@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Kriteria</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Kriteria</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="m-lg-0 col-10 text-left ">Kelola Data Kriteria</h4>
            <a href="{{ route('kriteria.create') }}" class="col-2 btn btn-icon icon-left btn-primary">
              <i class="fas fa-plus"></i>Tambah Kategori
            </a>
          </div>
          <div class="card-body">
            <div class="card-body">
              @foreach ($orders as $key=>$data)
              <div id="accordion">
                <div class="accordion">
                  <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                    <h4>Jenis Kriteria : {{ $data->jenis_kriteria }}</h4>
                  </div>
                  <div class="accordion-body " id="panel-body-1" data-parent="#accordion">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="20%" scope="col">
                            <center>Kode Kriteria</center>
                          </th>
                          <th width="50%" scope="col">
                            <center>Nama Kriteria</center>
                          </th>
                          <th width="30%" scope="col">
                            <center>Aksi</center>
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($kriteria as $key2=>$data2)
                        <?php if ($data->jenis_kriteria == $data2->jenis_kriteria) { ?>
                          <tr>
                            <td scope="col">
                              <center>{{ $data2->kode_kriteria }}</center>
                            </td>
                            <td scope="col">{{ $data2->nama_kriteria }}</td>
                            <td scope="col">
                              <form action="{{route('kriteria.destroy', $data2->id)}}" method="POST">
                                @csrf @method('DELETE')
                                <center>
                                  <a href="{{ route('kriteria.edit', $data2->id)}}" class="btn btn-icon btn-primary"><i class="fas fa-pen-square"></i></a>
                                  <button type="submit" class="btn btn-icon btn-danger" value="Delete">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                </center>
                              </form>
                            </td>
                          </tr>
                        <?php } ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection