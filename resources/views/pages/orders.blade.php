@extends('pages.main')

<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
<div class="container-fluid py-4">

    @if (session('diky_success'))
    <div class="alert alert-success">
        {{ session('diky_success') }}
    </div>
    @endif

    <!-- Data New -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Orderan Masuk</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">No.</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Bukti Pembayaran</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Nama Pembeli</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Nomor Telepon</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Alamat</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Total Pembayaran</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>

                            @php
                            $nomer = 1;
                            @endphp
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$nomer ++}}.</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{'$data->id'}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{'$data->user->fullname'}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{'$data->user->phone_number'}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{'$data->location->address'}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{'$data->detail_problem'}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <button type="button" class="btn btn-success btn-sm text-xs mb-0 px-3">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm text-xs mb-0 px-3" data-bs-toggle="modal" data-bs-target="#tolakmodal{{'data'}}">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm text-xs mb-0 px-3" data-bs-toggle="modal" data-bs-target="#listOrderan{{'data'}}">
                                            <i class="fas fa-list-ul"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tolak Modal -->
    <div class="modal fade" id="tolakmodal{{'data'}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yakin Hapus Data?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{url('tolak/'.'$data->id')}}" method="POST">
                        {{ csrf_field() }}
                        Apakah anda Menolak Pesanan {{ '$data->user->fullname' }} ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tolak</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- List Orderan Modal -->
    <div class="modal fade" id="listOrderan{{'data'}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamBackdropLabel">Daftar Orderan {{ 'NAMA PEMBELI' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-xxs font-weight-bolder">No.</th>
                                <th class="text-center text-uppercase text-xxs font-weight-bolder">Nama Produk</th>
                                <th class="text-center text-uppercase text-xxs font-weight-bolder">Quantity</th>
                            </tr>
                        </thead>

                        @php
                        $nomer = 1;
                        @endphp
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{$nomer ++}}.</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{'$data->user->fullname'}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{'$data->quantity'}}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Data Proses -->
        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Sedang Dikemas</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">{{'Fauzan Abdillah'}}</h6>
                                <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$dataperjalanan->user->phone_number'}}</span></span>
                                <span class="mb-2 text-xs">Alamat: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->location->address'}}</span></span>
                                <span class="mb-2 text-xs">Total Pembayaran: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->detail_problem'}}</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-info text-gradient px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#lihatpesanan{{'id'}}"><i class="fas fa-list me-2"></i>Lihat</a>
                                <a class="btn btn-link text-success px-3 mb-0" data-bs-toggle="modal" data-bs-target="#kirimbarang"><i class="fas fa-truck me-2" aria-hidden="true"></i>Kirim</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Data Dikirim -->
        <div class="col-md-5 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Dikirim</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3 p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-info"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">{{'Fauzan Abdillah'}}</h6>
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$dataperjalanan->user->phone_number'}}</span></span>
                                    <span class="mb-2 text-xs">Alamat: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->location->address'}}</span></span>
                                    <span class="mb-2 text-xs">Total Pembayaran: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->detail_problem'}}</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-sm bg-gradient-warning">Diterima</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Data Diterima -->
        <div class="col-md-8 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Pesanan Diterima</h6>
                        </div>
                    </div>
                </div>
                @php
                $nomer= 1;
                @endphp

                <!-- Newest -->
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">No: {{$nomer ++}}.</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">{{'Fauzan Abdillah'}}</h6>
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$dataperjalanan->user->phone_number'}}</span></span>
                                    <span class="mb-2 text-xs">Alamat: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->location->address'}}</span></span>
                                    <span class="mb-2 text-xs">Total Pembayaran: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->detail_problem'}}</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-sm bg-gradient-success">Diterima</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Data Ditolak -->
        <div class="col-md-8 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Ditolak/Dibatalkan</h6>
                        </div>
                    </div>
                </div>
                @php
                $nomer= 1;
                @endphp

                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">No: {{$nomer ++}}.</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-times"></i></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">{{'Fauzan Abdillah'}}</h6>
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$dataperjalanan->user->phone_number'}}</span></span>
                                    <span class="mb-2 text-xs">Alamat: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->location->address'}}</span></span>
                                    <span class="mb-2 text-xs">Total Pembayaran: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->detail_problem'}}</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-sm bg-gradient-danger">{{ '$data->status' }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- List Orderan Modal -->
<div class="modal fade" id="lihatPesanan{{'id'}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dynamBackdropLabel">Daftar Orderan {{ 'NAMA PEMBELI' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder">No.</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder">Nama Produk</th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder">Quantity</th>
                        </tr>
                    </thead>

                    @php
                    $nomer = 1;
                    @endphp
                    <tbody>
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0">{{$nomer ++}}.</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0">{{'$data->user->fullname'}}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0">{{'$data->quantity'}}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Kirim -->
<div class="modal fade" id="kirimbarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Masukkan Nomor Resi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{url('dselesai/'.'$datadelivery2->id')}}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="pengirim"><span class="text-danger">*</span> Pengirim</label>
                    <select class="form-select" id="pengirim" name="pengirim" required>
                        <option selected value="" selected hidden>Pilih jenis pengiriman</option>
                        <option value="Cash On Delivery (COD)">Cash On Delivery (COD)</option>
                        <option value="JNT">JNT</option>
                        <option value="JNE">JNE</option>
                        <option value="Pos Indonesia">Pos Indonesia</option>
                        <option value="Sicepat">Sicepat</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="noresi">Nomor Resi</label>
                    <input type="text" id="noresi" name="noresi" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection 