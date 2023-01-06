@extends('partial.master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Analisis Klasifikasi</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Analisis Klasifikasi</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Proses Klasifikasi</h4>
          </div>
          <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="true">Data Training</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="model-tab" data-toggle="tab" href="#model" role="tab" aria-controls="model" aria-selected="false">Modelling</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="testing-tab" data-toggle="tab" href="#testing" role="tab" aria-controls="testing" aria-selected="false">Data Testing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="hasil-tab" data-toggle="tab" href="#hasil" role="tab" aria-controls="hasil" aria-selected="false">Prediction</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="training" role="tabpanel" aria-labelledby="training-tab">
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
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($analisis as $key=>$data)
                        <tr>
                          <td>{{ $data->no_kk }}</td>
                          <td>{{ $data->nik }}</td>
                          <td>{{ $data->nama_kk }}</td>
                          <td>{{ $data->jk }}</td>
                          <td>{{ $data->dusun }}</td>
                          <td>{{ $data->rt }}</td>
                          <td>{{ $data->rw }}</td>
                          <td>{{ $data->status }}</td>
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

              <div class="tab-pane fade" id="model" role="tabpanel" aria-labelledby="model-tab">

                <div class="tab-pane" id="b-w-tab2">
                  <div class="row">
                    <div class="col-md-5">
                      <?php
                      $totalData          = COUNT($analisis) + 2;
                      $totalLayak         = $countL;
                      $totalTidakLayak    = $countTL;
                      $probLayak          = $totalLayak / $totalData;
                      $probTidakLayak     = $totalTidakLayak / $totalData;
                      ?>
                      <table class="table mb-3">
                        <thead>
                          <tr>
                            <th>Jumlah Data Training</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?= $totalData; ?></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table mb-3">
                        <thead>
                          <tr>
                            <th colspan="2">
                              <center>Jumlah Kejadian Label</center>
                            </th>
                            <th colspan="2">
                              <center>Nilai Probabilitas</center>
                            </th>
                          </tr>
                          <tr>
                            <th>
                              <center>Layak</center>
                            </th>
                            <th>
                              <center>Tidak Layak</center>
                            </th>
                            <th>
                              <center>Layak</center>
                            </th>
                            <th>
                              <center>Tidak Layak</center>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td align="center"><?= $totalLayak; ?></td>
                            <td align="center"><?= $totalTidakLayak; ?></td>
                            <td align="center"><?= $probLayak; ?></td>
                            <td align="center"><?= $probTidakLayak; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-12">
                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Tanggungan</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Tanggungan</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($tanggungan as $p1) { ?>
                                <tr>
                                  <td><?= $p1->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $tng) {
                                    if ($tng->tanggungan == $p1->nama_kriteria) {
                                      if ($tng->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($tng->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak1 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak1 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak1; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak1; ?></td>


                                  <?php $nilai_total_probabilitas_layak1 =  round($jumlah_layak1 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak1 =  round($jumlah_tidak_layak1 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak1; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak1; ?></td>


                                  <?php $array_nilai_total_probabilitas_layak_tanggungan[$p1->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak1 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_tanggungan[$p1->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak1 ?>
                                </tr>
                              <?php } ?>
                              </tr>
                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">

                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Pekerjaan</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Pekerjaan</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($pekerjaan as $p2) { ?>
                                <tr>
                                  <td><?= $p2->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $pnrm) {
                                    if ($pnrm->pekerjaan == $p2->nama_kriteria) {
                                      if ($pnrm->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($pnrm->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak2 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak2 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak2; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak2; ?></td>

                                  <?php $nilai_total_probabilitas_layak2 =  round($jumlah_layak2 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak2 =  round($jumlah_tidak_layak2 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak2; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak2; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_pekerjaan[$p2->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak2 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_pekerjaan[$p2->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak2 ?>
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">

                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Penghasilan</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Penghasilan</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($penghasilan as $p3) { ?>
                                <tr>
                                  <td><?= $p3->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $pngsln) {
                                    if ($pngsln->penghasilan == $p3->nama_kriteria) {
                                      if ($pngsln->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($pngsln->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak3 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak3 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak3; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak3; ?></td>

                                  <?php $nilai_total_probabilitas_layak3 =  round($jumlah_layak3 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak3 =  round($jumlah_tidak_layak3 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak3; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak3; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_penghasilan[$p3->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak3 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_penghasilan[$p3->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak3 ?>
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">


                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Jenis Lantai</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Jenis Lantai</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($jenis_lantai as $p4) { ?>
                                <tr>
                                  <td><?= $p4->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $jl) {
                                    if ($jl->jenis_lantai == $p4->nama_kriteria) {
                                      if ($jl->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($jl->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak4 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak4 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak4; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak4; ?></td>

                                  <?php $nilai_total_probabilitas_layak4 =  round($jumlah_layak4 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak4 =  round($jumlah_tidak_layak4 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak4; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak4; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_jl[$p4->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak4 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_jl[$p4->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak4 ?>
                                </tr>
                              <?php } ?>

                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">

                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Jenis Dinding</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Jenis Dinding</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($jenis_dinding as $p5) { ?>
                                <tr>
                                  <td><?= $p5->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $jd) {
                                    if ($jd->jenis_dinding == $p5->nama_kriteria) {
                                      if ($jd->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($jd->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak5 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak5 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak5; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak5; ?></td>

                                  <?php $nilai_total_probabilitas_layak5 =  round($jumlah_layak5 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak5 =  round($jumlah_tidak_layak5 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak5; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak5; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_jd[$p5->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak5 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_jd[$p5->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak5 ?>
                                </tr>
                              <?php } ?>

                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">

                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Sumber Listrik</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Sumber Listrik</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($sumber_listrik as $p6) { ?>
                                <tr>
                                  <td><?= $p6->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $sl) {
                                    if ($sl->sumber_listrik == $p6->nama_kriteria) {
                                      if ($sl->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($sl->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak6 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak6 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak6; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak6; ?></td>

                                  <?php $nilai_total_probabilitas_layak6 =  round($jumlah_layak6 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak6 =  round($jumlah_tidak_layak6 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak6; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak6; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_sl[$p6->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak6 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_sl[$p6->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak6 ?>
                                </tr>
                              <?php } ?>

                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">


                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria Sumber Air</th>
                                <th colspan="2" class="py-2 text-center">Jumlah Sumber Air</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($sumber_air as $p7) { ?>
                                <tr>
                                  <td><?= $p7->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $sa) {
                                    if ($sa->sumber_air == $p7->nama_kriteria) {
                                      if ($sa->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($sa->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak7 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak7 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak7; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak7; ?></td>

                                  <?php $nilai_total_probabilitas_layak7 =  round($jumlah_layak7 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak7 =  round($jumlah_tidak_layak7 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak7; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak7; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_sa[$p7->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak7 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_sa[$p7->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak7 ?>
                                </tr>
                              <?php } ?>

                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">

                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria SK MCK</th>
                                <th colspan="2" class="py-2 text-center">Jumlah SK MCK</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($sk_mck as $p8) { ?>
                                <tr>
                                  <td><?= $p8->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $mck) {
                                    if ($mck->sk_mck == $p8->nama_kriteria) {
                                      if ($mck->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($mck->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak8 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak8 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak8; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak8; ?></td>

                                  <?php $nilai_total_probabilitas_layak8 =  round($jumlah_layak8 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak8 =  round($jumlah_tidak_layak8 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak8; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak8; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_mck[$p8->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak8 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_mck[$p8->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak8 ?>
                                </tr>
                              <?php } ?>

                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">

                      <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">Probabilitas Kriteria SK Rumah</th>
                                <th colspan="2" class="py-2 text-center">Jumlah SK Rumah</th>
                                <th colspan="2" class="py-2 text-center">Nilai Probabilitas</th>
                              </tr>
                              <tr>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Layak</center>
                                </th>
                                <th class="py-2" width="130">
                                  <center>Tidak Layak</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($sk_rumah as $p9) { ?>
                                <tr>
                                  <td><?= $p9->nama_kriteria; ?></td>
                                  <?php
                                  $jumlah_layak = 0;
                                  $jumlah_tidak_layak = 0;
                                  foreach ($penerima as $rumah) {
                                    if ($rumah->sk_rumah == $p9->nama_kriteria) {
                                      if ($rumah->status == "Layak") {
                                        $jumlah_layak = $jumlah_layak + 1;
                                      } elseif ($rumah->status == "Tidak Layak") {
                                        $jumlah_tidak_layak = $jumlah_tidak_layak + 1;
                                      }
                                    }
                                  }
                                  // lc
                                  $jumlah_layak9 = $jumlah_layak + 1;
                                  $jumlah_tidak_layak9 = $jumlah_tidak_layak + 1;
                                  ?>
                                  <td align="center"><?= $jumlah_layak9; ?></td>
                                  <td align="center"><?= $jumlah_tidak_layak9; ?></td>

                                  <?php $nilai_total_probabilitas_layak9 =  round($jumlah_layak9 / $totalLayak, 10) ?>
                                  <?php $nilai_total_probabilitas_tidak_layak9 =  round($jumlah_tidak_layak9 / $totalTidakLayak, 10) ?>


                                  <td align="center"><?= $nilai_total_probabilitas_layak9; ?></td>
                                  <td align="center"><?= $nilai_total_probabilitas_tidak_layak9; ?></td>

                                  <?php $array_nilai_total_probabilitas_layak_rumah[$p9->nama_kriteria]['value'] =  $nilai_total_probabilitas_layak9 ?>
                                  <?php $array_nilai_total_probabilitas_tidak_layak_rumah[$p9->nama_kriteria]['value'] =  $nilai_total_probabilitas_tidak_layak9 ?>
                                </tr>
                              <?php } ?>

                              <tr>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <hr style="margin-top: -14px; margin-bottom: 40px;">
                    </div>
                  </div>
                </div>

              </div>
              <div class="tab-pane fade" id="testing" role="tabpanel" aria-labelledby="testing-tab">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-2">
                      <thead>
                        <tr>
                          <th width="15%">No. KK</th>
                          <th width="15%">NIK</th>
                          <th width="20%">Nama KK</th>
                          <th width="10%">Jenis Kelamin</th>
                          <th width="10%">Dusun</th>
                          <th width="5%">RT</th>
                          <th width="5%">RW</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($analisiss as $key=>$data1)
                        <tr>
                          <td>{{ $data1->no_kk }}</td>
                          <td>{{ $data1->nik }}</td>
                          <td>{{ $data1->nama_kk }}</td>
                          <td>{{ $data1->jk }}</td>
                          <td>{{ $data1->dusun }}</td>
                          <td>{{ $data1->rt }}</td>
                          <td>{{ $data1->rw }}</td>
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

              <div class="tab-pane fade" id="hasil" role="tabpanel" aria-labelledby="hasil-tab">
                <!-- <div class="tab-pane" id="b-w-tab4"> -->
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="" method="POST" id="form_tetapkan" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <!-- <div class="row"> -->

                      <div class="col-sm-12 text-right">
                        <button class="btn btn-primary btn-laporan" type="button" data-toggle="modal" data-target="#modalAlertTetapkan" name="tetapkan"><i class="fas fa-clipboard-check"></i> Tetapkan</button>
                      </div>
                      <br />
                      <table class="table table-striped" id="table-3">
                        <thead>
                          <tr>
                            <th width="7%">
                              <center>No</center>
                            </th>
                            <th width="15%">
                              <center>NIK</center>
                            </th>
                            <th width="18%">
                              <center>Nama</center>
                            </th>
                            <th width="15%">
                              <center>Dusun</center>
                            </th>
                            <th width="15%">
                              <center>Probabilitas<br>Layak</center>
                            </th>
                            <th width="15%">
                              <center>Probabilitas<br>Tidak Layak</center>
                            </th>
                            <th width="15%" colspan="2">
                              <center>Status</center>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1; ?>
                          @forelse ($analisiss as $key=>$data1)

                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                              {{ $data1->nik }}
                              <input type="hidden" name="nik[]" value="<?= $data1->nik; ?>">
                            </td>
                            <td>{{ $data1->nama_kk }}</td>
                            <td>{{ $data1->dusun }}</td>

                            <!-- probabilitas layak -->
                            <?php

                            foreach ($array_nilai_total_probabilitas_layak_tanggungan as $key => $value) {
                              if ($data1->tanggungan == $key) {
                                // nilai_probabilitas_tanggungan_calon
                                $k1 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_pekerjaan as $key => $value) {
                              if ($data1->pekerjaan == $key) {
                                // nilai_probabilitas_pekerjaan_calon
                                $k2 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_penghasilan as $key => $value) {
                              if ($data1->penghasilan == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k3 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_jl as $key => $value) {
                              if ($data1->jenis_lantai == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k4 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_jd as $key => $value) {
                              if ($data1->jenis_dinding == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k5 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_sl as $key => $value) {
                              if ($data1->sumber_listrik == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k6 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_sa as $key => $value) {
                              if ($data1->sumber_air == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k7 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_mck as $key => $value) {
                              if ($data1->sk_mck == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k8 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_layak_rumah as $key => $value) {
                              if ($data1->sk_rumah == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k9 = $value['value'];
                              }
                            }
                            ?>


                            <!-- probabilitas tidak layak -->
                            <?php

                            foreach ($array_nilai_total_probabilitas_tidak_layak_tanggungan as $key => $value) {
                              if ($data1->tanggungan == $key) {
                                // nilai_probabilitas_tanggungan_calon
                                $k11 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_pekerjaan as $key => $value) {
                              if ($data1->pekerjaan == $key) {
                                // nilai_probabilitas_pekerjaan_calon
                                $k12 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_penghasilan as $key => $value) {
                              if ($data1->penghasilan == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k13 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_jl as $key => $value) {
                              if ($data1->jenis_lantai == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k14 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_jd as $key => $value) {
                              if ($data1->jenis_dinding == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k15 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_sl as $key => $value) {
                              if ($data1->sumber_listrik == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k16 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_sa as $key => $value) {
                              if ($data1->sumber_air == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k17 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_mck as $key => $value) {
                              if ($data1->sk_mck == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k18 = $value['value'];
                              }
                            }
                            foreach ($array_nilai_total_probabilitas_tidak_layak_rumah as $key => $value) {
                              if ($data1->sk_rumah == $key) {
                                // nilai_probabilitas_penghasilan_calon
                                $k19 = $value['value'];
                              }
                            }
                            ?>

                            <?php $layak =  $k1 * $k2 * $k3 * $k4 * $k5 * $k6 * $k7 * $k8 * $k9 * $probLayak ?>
                            <?php $tidak_layak =  $k11 * $k12 * $k13 * $k14 * $k15 * $k16 * $k17 * $k18 * $k19 * $probTidakLayak ?>
                            <td class="text-center">
                              <?= number_format($layak, 10); ?>
                            </td>
                            <td class="text-center"><?= number_format($tidak_layak, 10); ?></td>

                            <?php


                            if ($layak > $tidak_layak) {
                              $statusKelayakan = '<span class="badge badge-light-info">Layak</span>';
                              $statusKel       = 'Layak';
                            } else {
                              $statusKelayakan = '<span class="badge badge-light-danger">Tidak Layak</span>';
                              $statusKel       = 'Tidak Layak';
                            }

                            ?>

                            <td class="text-center">
                              <?= $statusKel; ?>
                              <input type="hidden" name="status[]" value="<?= $statusKel; ?>">

                            </td>
                            <!-- <td width="20" class="text-center">
                                                <a href="#" class="btn btn-sm btn-outline-info btn-analisis-detail" data-toggle="tooltip" title="lihat detail" data-id="" ><i class="fas fa-search"></i></a>
                                            </td> -->
                          </tr>
                          @empty
                          <tr>
                            <td colspan="4">DATA KOSONG!</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                      <!-- </div> -->
                    </form>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalAlertTetapkan" tabindex="-1" role="dialog" aria-labelledby="modalAlertTetapkanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Jika menekan tombol "Tetapkan" maka data hasil prediksi akan menjadi data penerima tahun ini!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="tetapkan()" class="btn btn-primary">Tetapkan</button>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  // this is the id of the form
  function tetapkan() {
    $('#modalAlertTetapkan').modal('hide');
    var form = $('#form_tetapkan');
    $.ajax({
      type: "POST",
      url: "/calon/tetapkan",
      data: form.serialize(), // serializes the form's elements.
      success: function(data) {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil Tetapkan',
        }).then((result) => {
          window.location.reload();
        })
        // alert(data); // show response from the php script.
      }
    });
  }
</script>
@endsection