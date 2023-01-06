@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Laporan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Laporan</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <form id="setting-form">
          <div class="card" id="settings-card">
            <div class="card-header">
              <h4>Kelola Laporan</h4>
            </div>
            <div class="card-body">
              <div class="form-row col-md-8">
                <?php
                // $min = $tahun_min->updated_at;
                // $max = $tahun_max->updated_at;
                ?>
              </div>

              <form method="post" action="">
                <table width="100%">
                  <tr>
                    <td width="15%"><label>Tahun</label></td>
                    <td width="35px"></td>
                    <td width="15%"><label>Tahun</label></td>
                    <td width="15%"><label>Status</label></td>
                  </tr>
                  <tr>
                    <td>
                      <select class="form-control" name="tahun_awal">
                        <?php
                        $year = 2021;
                        for ($i = 0; $i < 10; $i++) { ?>
                          <option value="<?= $year; ?>"><?= $year; ?></option>
                        <?php
                          $year++;
                        } ?>
                      </select>
                    </td>
                    <td class="text-center">s/d</td>
                    <td>
                      <select class="form-control" name="tahun_akhir">
                        <?php
                        $year = 2021;
                        for ($i = 0; $i < 10; $i++) { ?>
                          <option value="<?= $year; ?>"><?= $year; ?></option>
                        <?php
                          $year++;
                        } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control" name="status">
                        <option value="semua">Semua</option>
                        <option value="Layak">Layak</option>
                        <option value="Tidak Layak">Tidak Layak</option>
                      </select>
                    </td>
                    <td class="text-center"></td>
                    <td>
                      <button class="btn btn-primary btn-laporan" type="submit"><i class="feather icon-search"></i> Tampil</button>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-12">
        <?php if (isset($tahun_awal)) { ?>
          <div class="card">
            <div class="card-body">

              <a href="/laporan/cetak_pdf?tahun_awal=<?= $tahun_awal ?>&tahun_akhir=<?= $tahun_akhir ?>&status=<?= $status ?>" class="btn btn-primary" target="_blank"><i class="fas fa-print"></i> Cetak</a>
              <center>
                <h4>Laporan Penerima Bantuan Sosial</h4>
                <h5>Tahun <?= $tahun_awal . " s/d " . $tahun_akhir; ?></h5>
              </center>
              <br />
              <br /><br />

              <table class='table table-bordered'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($data_cari as $hasil_pencarian) { ?>
                  <tbody>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $hasil_pencarian->nik; ?></td>
                      <td><?= $hasil_pencarian->nama_kk; ?></td>
                      <td><?= $hasil_pencarian->dusun; ?></td>
                      <td><?= $hasil_pencarian->rt; ?></td>
                      <td><?= $hasil_pencarian->rw; ?></td>
                      <td><?= $hasil_pencarian->status; ?></td>
                    </tr>
                  </tbody>
                <?php  } ?>
              </table>
            </div>
          </div>
        <?php
        }; ?>
      </div>
    </div>
  </div>
</section>
@endsection