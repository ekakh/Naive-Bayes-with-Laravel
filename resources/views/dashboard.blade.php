@extends('partial.master')
@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12" height=50>
      <div class="card" height=50>
        <div class="card-body " height=50>
          <h3 class="text-center">Selamat Datang!</h3><br>
          <h5 class="text-center">Di Aplikasi Penerima Bantuan Sosial<br>
          </h5>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Data Masyarakat Baru
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jumlah :</h4>
          </div>
          <div class="card-body">
            {{count($calon)}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Data Masyarakat Layak
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jumlah :</h4>
          </div>
          <div class="card-body">
            {{$pLayak}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Data Masyarakat Tidak Layak
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jumlah :</h4>
          </div>
          <div class="card-body">
            {{$pTL}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Total Data Masyarakat
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jumlah :</h4>
          </div>
          <div class="card-body">
            {{count($penerima)}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection