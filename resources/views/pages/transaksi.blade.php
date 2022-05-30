@extends('pages.main')
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://user-images.githubusercontent.com/74905155/165243311-93d1d93e-0536-4369-93a0-53c9e133c842.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div>

{{-- @foreach ($transaksi as $data) --}}
@section('container')
<div class="container-fluid py-4">
    @if (session('diky_success'))
<div class="alert alert-success">
    {{ session('diky_success') }}
</div>
@endif

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <form action="" method="POST">
                    {{ csrf_field() }}
                    @csrf
                <div class="card-header pb-0">
                    <i class="far fa-calendar-alt me-2"></i>
                    <small> @php date("Y-d-m H:i:s"); echo date('d - m - Y'); @endphp</small>
                </div>
                <div class="card-body">
                    <!-- No Antrian -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">No Antrian</label>
                                <input class="form-control" readonly name="no_antrian" id="no_antrian" type="text" value="{{ $transaksi+1 }}">
                            </div>
                        </div>

                        <!-- ID Service -->
                        {{-- <div class="col-md-2">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">ID Service</label>
                                <input class="form-control" id="id" name="id" type="text" placeholder="" value="">
                            </div>
                        </div> --}}

                        <div class="row">
                            <!-- No Polisi -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Polisi</label>
                                    <input class="form-control" id="nopol" name="nopol" type="text" placeholder="ON 333 TOP">
                                </div>
                            </div>

                            <!-- Nama -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                    <input class="form-control" id="fullname" name="fullname" type="text" placeholder="Syaifudin Ilma">
                                </div>
                            </div>

                            <!-- No. HP -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No HP</label>
                                    <input class="form-control" id="phone" name="phone" type="text" placeholder="086837632">
                                </div>
                            </div>

                            <!-- No Rangka -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Rangka</label>
                                    <input class="form-control" id="norangka" name="norangka" type="text" placeholder="JGADJJHA">
                                </div>
                            </div>

                            <!-- No Mesin -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Mesin</label>
                                    <input class="form-control" id="nomesin" name="nomesin" type="text" placeholder="6769GHJGH">
                                </div>
                            </div>

                            <!-- Tahun Terbit -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahun Rakit</label>
                                    <input class="form-control" id="trakit" name="trakit" type="text" placeholder="2020">
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Type</label>
                                    <input class="form-control" id="type" name="type" type="text" placeholder="NC62817">
                                </div>
                            </div>

                            <!-- KM -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">KM</label>
                                    <input class="form-control" id="km" name="km" type="text" placeholder="4000">
                                </div>
                            </div>

                            <!-- Warna -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Warna</label>
                                    <input class="form-control" id="warna" name="warna" type="text" placeholder="Hitam">
                                </div>
                            </div>
                        </div>

                        <hr class="horizontal dark mt-3 mb-4">

                        <p class="text-uppercase text-sm">Jenis Pekerjaan yang Di Kerjakan</p>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Produk</label>
                                    <div class="input-group mb-3">
                                        <select id="nproduk" name="nproduk" class="form-select">
                                            <option selected>Service RIngan</option>
                                            <option value="Ganti Oli Mesin">Ganti Oli Mesin</option>
                                            <option value="Ganti Oli Gardan">Ganti Oli Gardan</option>
                                            <option value="Ganti ACCU">Ganti ACCU</option>
                                            <option value="KPB I">KPB I</option>
                                            <option value="KPB II">KPB II</option>
                                            <option value="KPB III">KPB III</option>
                                            <option value="KPB IV">KPB IV</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6>Work Order</h6>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Tambah</button>
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
                        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </form>
        </div>
    </div>
</div>
@endsection
