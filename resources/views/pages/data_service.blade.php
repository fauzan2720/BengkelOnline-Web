@extends('pages.main')
<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Data Proses -->
        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Proses</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">Usman</h6>
                                <span class="mb-2 text-xs">No Antrian: <span class="text-dark font-weight-bold ms-sm-2">2</span></span>
                                <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">6453</span></span>
                                <span class="mb-2 text-xs">No Polisi: <span class="text-dark ms-sm-2 font-weight-bold">N 6769 OK</span></span>
                                <span class="mb-2 text-xs">No Telepon: <span class="text-dark ms-sm-2 font-weight-bold">083718378</span></span>
                                <span class="mb-2 text-xs">No Rangka: <span class="text-dark ms-sm-2 font-weight-bold">7389173</span></span>
                                <span class="mb-2 text-xs">No Mesiin: <span class="text-dark ms-sm-2 font-weight-bold">2907</span></span>
                                <span class="mb-2 text-xs">Tahun Terbit: <span class="text-dark ms-sm-2 font-weight-bold">2019</span></span>
                                <span class="mb-2 text-xs">Type: <span class="text-dark ms-sm-2 font-weight-bold">A</span></span>
                                <span class="mb-2 text-xs">KM: <span class="text-dark ms-sm-2 font-weight-bold">1444</span></span>
                                <span class="mb-2 text-xs">Warna: <span class="text-dark ms-sm-2 font-weight-bold">Hitam</span></span>
                                <span class="mb-2 text-xs">Jenis Service: <span class="text-dark ms-sm-2 font-weight-bold">Service Ringan</span></span>
                                <span class="text-xs">Keluhan: <span class="text-dark ms-sm-2 font-weight-bold">-</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <!-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-times-circle me-2"></i>Cancel</a> -->
                                <a class="btn btn-link bg-gradient-warning px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#bayarmodal"><i class="fas fa-coins me-2" aria-hidden="true"></i>Bayar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Data Selesai -->
        <div class="col-md-5 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Selesai</h6>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <i class="far fa-calendar-alt me-2"></i>
                            <small>23 - 30 March 2020</small>
                        </div>
                    </div>
                </div>

                <!-- Newest -->
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Aji Soko Mangan Telo</h6>
                                    <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">4234232</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-link bg-gradient-info px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#detailmodal">Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bayar Modal -->
<div class="modal fade" id="bayarmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Part yang DIganti</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                                        <span class="mb-2 text-xs">Nota: <span class="text-dark font-weight-bold ms-sm-2">GJ7878G797</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- ID Produk -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">ID Produk</label>
                                            <input class="form-control" type="text" value="123" aria-label="123" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex justify-content-end align-items-center">
                                        <h6>Rp. -</h6>
                                    </div>

                                    <div class="row">
                                        <!-- Nama Produk -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Produk</label>
                                                <div class="input-group mb-3">
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Karbu</option>
                                                        <option value="2">Busi</option>
                                                        <option value="2">Oli</option>
                                                        <option value="3">Rante</option>
                                                        <option value="3">Part Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Jumlah -->
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jumlah</label>
                                                <input class="form-control" type="email" value="Afris">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="row mt-5">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button class="btn btn-warning btn-sm ms-auto">TAMBAH</button>
                                        </div>
                                    </div>
                                </div>

                                <hr class="horizontal dark mt-2 mb-4">

                                <!-- Tabel Daftar Produk yang Diganti -->
                                <p class="text-uppercase text-sm">Daftar Produk yang DIganti</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card mb-4">
                                            <div class="card-body px-0 pt-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-uppercase text-xxs font-weight-bolder">No.</th>
                                                                <th class="text-center text-uppercase text-xxs font-weight-bolder">ID</th>
                                                                <th class="text-center text-uppercase text-xxs font-weight-bolder">Produk</th>
                                                                <th class="text-center text-uppercase text-xxs font-weight-bolder">Harga</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!-- NO -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">1.</p>
                                                                </td>

                                                                <!-- ID -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">0989</p>
                                                                </td>

                                                                <!-- Produk -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">Karbu</p>
                                                                </td>

                                                                <!-- Harga -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">Rp. 200.000</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Bayar</button>
            </div>
        </div>
    </div>
</div>


<!-- Detail Modal -->
<div class="modal fade" id="detailmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Transaksi Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Usman</h6>
                                        <span class="mb-2 text-xs">No Antrian: <span class="text-dark font-weight-bold ms-sm-2">2</span></span>
                                        <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">6453</span></span>
                                        <span class="mb-2 text-xs">No Polisi: <span class="text-dark ms-sm-2 font-weight-bold">N 6769 OK</span></span>
                                        <span class="mb-2 text-xs">No Telepon: <span class="text-dark ms-sm-2 font-weight-bold">083718378</span></span>
                                        <span class="mb-2 text-xs">No Rangka: <span class="text-dark ms-sm-2 font-weight-bold">7389173</span></span>
                                        <span class="mb-2 text-xs">No Mesiin: <span class="text-dark ms-sm-2 font-weight-bold">2907</span></span>
                                        <span class="mb-2 text-xs">Tahun Terbit: <span class="text-dark ms-sm-2 font-weight-bold">2019</span></span>
                                        <span class="mb-2 text-xs">Type: <span class="text-dark ms-sm-2 font-weight-bold">A</span></span>
                                        <span class="mb-2 text-xs">KM: <span class="text-dark ms-sm-2 font-weight-bold">1444</span></span>
                                        <span class="mb-2 text-xs">Warna: <span class="text-dark ms-sm-2 font-weight-bold">Hitam</span></span>
                                        <span class="mb-2 text-xs">Jenis Service: <span class="text-dark ms-sm-2 font-weight-bold">Service Ringan</span></span>
                                        <span class="mb-2 text-xs">Keluhan: <span class="text-dark ms-sm-2 font-weight-bold">-</span></span>
                                        <span class="mb-2 text-xs">Part yang Diganti: <span class="text-dark ms-sm-2 font-weight-bold">-</span></span>
                                        <span class="text-xs">Total Bayar: <span class="text-dark ms-sm-2 font-weight-bold">Rp. </span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Cetak Nota</button>
            </div>
        </div>
    </div>
</div>
@endsection