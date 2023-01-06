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
                                <div class="form-group col-md-3">
                                    <label for="inputState">Tahun</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Pilih</option>
                                        <option>2021</option>
                                    </select>
                                </div>
                                <div class="form-group bottom">
                                    <p>s/d</p>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">Tahun</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Pilih</option>
                                        <option>2021</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Pilih</option>
                                        <option>Layak</option>
                                        <option>Tidak Layak</option>
                                        <option>Semua</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row col-md-2">
                                <button class="btn btn-primary" id="save-btn">Tampil</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection