@extends('partial.master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Laporan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Menu</a></div>
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
                                // echo $this->session->flashdata('pesan');
                                // $min = $tahun_min->tahun_pendaftaran;
                                // $max = $tahun_max->tahun_pendaftaran;
                                ?>
                            </div>

                            <form method="post" action="">
                                <table width="100%">
                                    <tr>
                                        <td width="15%"><label>Tahun</label></td>
                                        <td width="35px"></td>
                                        <td width="15%"><label>Tahun</label></td>
                                        <td width="15%"><label>Status Kelayakan</label></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="tahun_awal">

                                            </select>
                                        </td>
                                        <td class="text-center">s/d</td>
                                        <td>
                                            <select class="form-control" name="tahun_akhir">

                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="label">
                                                <option value="">Semua</option>
                                                <option value="Layak">Layak</option>
                                                <option value="Tidak Layak">Tidak Layak</option>
                                            </select>
                                        </td>
                                        <td class="text-center"></td>
                                        <td>
                                            <button class="btn btn-primary btn-laporan" name="cari"><i class="feather icon-search"></i> Tampil</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <hr>
                        <div class="dt-responsive table-responsive">
                            <table id="alt-pg-dt" class="table table-pendaftar table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th width="10">No</th>
                                        <th>
                                            <center>No. KK</center>
                                        </th>
                                        <th>
                                            <center>NIK</center>
                                        </th>
                                        <th>
                                            <center>Nama</center>
                                        </th>
                                        <th>Dusun</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>
                                            <center>Tahun</center>
                                        </th>
                                        <th>
                                            <center>Status Kelayakan</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center" width="100">

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection