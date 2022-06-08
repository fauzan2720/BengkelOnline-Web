@extends('pages.main')
<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
@if (session('diky_success'))
<div class="alert alert-success">
    {{ session('diky_success') }}
</div>
@endif
<div class="container-fluid py-4">
    <div class="row">
        <!-- Data Proses -->
        @foreach ($dataservice as $data)
        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Proses</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">{{$data->fullname}}</h6>
                                <span class="mb-2 text-xs">No Antrian: <span class="text-dark font-weight-bold ms-sm-2">{{$data->no_antrian}}</span></span>
                                <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">{{$data->id}}</span></span>
                                <span class="mb-2 text-xs">No Polisi: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->nopol}}</span></span>
                                <span class="mb-2 text-xs">No Telepon: <span class="text-dark ms-sm-2 font-weight-bold"></span>{{$data->phone}}</span>
                                <span class="mb-2 text-xs">No Rangka: <span class="text-dark ms-sm-2 font-weight-bold"></span>{{$data->norangka}}</span>
                                <span class="mb-2 text-xs">No Mesin: <span class="text-dark ms-sm-2 font-weight-bold"></span>{{$data->nomesin}}</span>
                                <span class="mb-2 text-xs">Tahun Terbit: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->trakit}}</span></span>
                                <span class="mb-2 text-xs">Type: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->type}}</span></span>
                                <span class="mb-2 text-xs">KM: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->km}}</span></span>
                                <span class="mb-2 text-xs">Warna: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->warna}}</span></span>
                                <span class="mb-2 text-xs">Jenis Service: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->nproduk}}</span></span>
                                <span class="text-xs">Keluhan: <span class="text-dark ms-sm-2 font-weight-bold">{{$data->notes}}</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <!-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-times-circle me-2"></i>Cancel</a> -->
                                <a class="btn btn-link bg-gradient-warning px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#bayarmodal-{{$data->id}}"><i class="fas fa-coins me-2" aria-hidden="true"></i>Bayar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

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
                @foreach ($test as $t)
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">{{$t->fullname}}</h6>
                                    <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">{{$t->id}}</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-link bg-gradient-info px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#detailmodal">Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Bayar Modal -->
@foreach ($dataservice as $data)
<div class="modal fade" id="bayarmodal-{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                        <span class="mb-2 text-xs">Nota: <span class="text-dark font-weight-bold ms-sm-2">{{$data->id}}</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- ID Produk -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <input class="form-control" type="text" value="{{$data->fullname}}" aria-label="123" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="status" id="status" hidden value="done" aria-label="123" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex justify-content-end align-items-center">
                                        <h6>Rp.</h6>
                                    </div> 
                                    <h5 class="modal-title" id="staticBackdropLabel">Part yang DIganti</h5>
                                    @foreach ($dataproduk as $datap)
                                    <form action="{{url('tambahproduk/'.$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                    <div class="row">
                                        <!-- Nama Produk -->
                                        <div class="col-md-0">
                                            <div class="form-group">
                                                <input class="form-control" hidden name="nota" id="nota" readonly type="number" value="{{$data->id}}">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input class="form-control" name="idproduk" id="idproduk" readonly type="number" value="{{$datap->id}}">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input class="form-control" name="produkname" id="produkname" readonly type="text" value="{{$datap->product_name}}">
                                            </div>
                                        </div>

                                        <!-- Jumlah -->
                                        

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input class="form-control" name="harga" readonly type="number" value="{{$datap->price}}">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input class="form-control" name="jumlah" type="number" placeholder="Jumlah">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        <div class="form-group">
                                            <button class="btn btn-warning btn-sm ms-auto" type="submit">TAMBAH</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                                @endforeach

                                <!-- Button
                                <div class="row mt-5">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button class="btn btn-warning btn-sm ms-auto">TAMBAH</button>
                                        </div>
                                    </div>
                                </div> -->

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
                                                                <th class="text-center text-uppercase text-xxs font-weight-bolder">Jumlah</th>
                                                                <th class="text-center text-uppercase text-xxs font-weight-bolder">Harga</th>
                                                            </tr>
                                                        </thead>
                                                        @php
                                                        $nomor = 1;
                                                        @endphp
                                                        @foreach ($product as $datai)
                                                        <tbody>
                                                            <tr>
                                                                <!-- NO -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">{{ $nomor ++}}.</p>
                                                                </td>

                                                                <!-- ID -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">{{$datai->id}}</p>
                                                                </td>

                                                                <!-- Produk -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">{{$datai->product_name}}</p>
                                                                </td>

                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">{{$datai->quantity}}</p>
                                                                </td>

                                                                <!-- Harga -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">{{{$datai->product->price}}}</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        @endforeach
                                                    </table>
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
            </div>
        </div>
    </div>
</div>
@endforeach


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