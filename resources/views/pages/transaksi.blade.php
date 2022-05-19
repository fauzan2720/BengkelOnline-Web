@extends('pages.main')
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://user-images.githubusercontent.com/74905155/165243311-93d1d93e-0536-4369-93a0-53c9e133c842.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div>

@section('container')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6>Work Order</h6>
                        <button class="btn btn-primary btn-sm ms-auto">Tambah</button>
                    </div>
                    <i class="far fa-calendar-alt me-2"></i>
                    <small>23 - 30 March 2020</small>
                </div>
                <div class="card-body">
                    <!-- No Antrian -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">No Antrian</label>
                                <input class="form-control" type="text" value="1">
                            </div>
                        </div>

                        <!-- ID Service -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">ID Service</label>
                                <input class="form-control" type="text" value="1">
                            </div>
                        </div>

                        <div class="row">
                            <!-- No Polisi -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Polisi</label>
                                    <input class="form-control" type="text" value="P 6757 KM">
                                </div>
                            </div>

                            <!-- Nama -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                    <input class="form-control" type="email" value="Afris">
                                </div>
                            </div>

                            <!-- No. HP -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No HP</label>
                                    <input class="form-control" type="text" value="0868637632">
                                </div>
                            </div>

                            <!-- No Rangka -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Rangka</label>
                                    <input class="form-control" type="text" value="JGADJJHA">
                                </div>
                            </div>

                            <!-- No Mesin -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Mesin</label>
                                    <input class="form-control" type="text" value="6769GHJGH">
                                </div>
                            </div>

                            <!-- Tahun Terbit -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahun Rakit</label>
                                    <input class="form-control" type="text" value="2020">
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Type</label>
                                    <input class="form-control" type="text" value="NC62817">
                                </div>
                            </div>

                            <!-- KM -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">KM</label>
                                    <input class="form-control" type="text" value="4000">
                                </div>
                            </div>

                            <!-- Warna -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Warna</label>
                                    <input class="form-control" type="text" value="Hitam">
                                </div>
                            </div>
                        </div>

                        <hr class="horizontal dark mt-3 mb-4">

                        <p class="text-uppercase text-sm">Jenis Pekerjaan yang Di Kerjakan</p>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="dropdown">
                                        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Service Komplit
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Service RIngan</a></li>
                                            <li><a class="dropdown-item" href="#">Ganti Oli Mesin</a></li>
                                            <li><a class="dropdown-item" href="#">Ganti Oli Gardan</a></li>
                                            <li><a class="dropdown-item" href="#">Ganti ACCU</a></li>
                                            <li><a class="dropdown-item" href="#">KPB I</a></li>
                                            <li><a class="dropdown-item" href="#">KPB II</a></li>
                                            <li><a class="dropdown-item" href="#">KPB III</a></li>
                                            <li><a class="dropdown-item" href="#">KPB IV</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keluhan Konsumen -->
    <div class="row">
        <div class="col-md-8 mt-4">
            <div class="card mb-6">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Keluhan Konsumen (Optional)</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection