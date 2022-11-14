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
    <div class="modal fade" id="tolakmodal{{'data'}}" data-bs-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamBackdropLabel">Yakin Hapus Data?</h5>
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
    <div class="modal fade" id="listOrderan{{'data'}}" data-bs-keyboard="false" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamBackdropLabel">List Orderan {{ 'NAMA PEMBELI' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tolak</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
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
                                <h6 class="mb-3 text-sm">{{'$dataperjalanan->user->fullname'}}</h6>
                                <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">{{'$dataperjalanan->id'}}</span></span>
                                <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$dataperjalanan->user->phone_number'}}</span></span>
                                <span class="mb-2 text-xs">Lokasi: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->location->address'}}</span></span>
                                <span class="mb-2 text-xs">Kendala: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->detail_problem'}}</span></span>
                                <span class="text-xs">Nama Mekanik: <span class="text-dark ms-sm-2 font-weight-bold">{{'$dataperjalanan->mechanic'}}</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalcancel-{{'$dataperjalanan->id'}}"><i class="far fa-times-circle me-2"></i>Cancel</a>
                                <a class="btn btn-link text-success px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalselesai-{{'$dataperjalanan->id'}}"><i class="fas fa-truck me-2" aria-hidden="true"></i>Kirim</a>
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
                                    <h6 class="mb-3 text-sm">{{'$selesai->user->fullname'}}</h6>
                                    <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">{{'$selesai->id'}}</span></span>
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$selesai->user->phone_number'}}</span></span>
                                    <span class="mb-2 text-xs">Lokasi: <span class="text-dark ms-sm-2 font-weight-bold">{{'$selesai->location->address'}}</span></span>
                                    <span class="mb-2 text-xs">Kendala: <span class="text-dark ms-sm-2 font-weight-bold">{{'$selesai->detail_problem'}}</span></span>
                                    <span class="text-xs">Nama Mekanik: <span class="text-dark ms-sm-2 font-weight-bold">{{'$selesai->mechanic'}}</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-sm bg-gradient-success">Selesai</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Data Tolak -->
        <div class="col-md-8 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Tolak</h6>
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
                                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-times"></i></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">{{'$tolak->user->fullname'}}</h6>
                                    <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">{{'$tolak->id'}}</span></span>
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">{{'$tolak->user->phone_number'}}</span></span>
                                    <span class="mb-2 text-xs">Lokasi: <span class="text-dark ms-sm-2 font-weight-bold">{{'$tolak->location->address'}}</span></span>
                                    <span class="mb-2 text-xs">Kendala: <span class="text-dark ms-sm-2 font-weight-bold">{{'$tolak->detail_problem'}}</span></span>
                                    <span class="text-xs">Nama Mekanik: <span class="text-dark ms-sm-2 font-weight-bold">{{'$tolak->mechanic'}}</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-sm bg-gradient-danger">Ditolak</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Perjalanan - Selesai -->
<div class="modal fade" id="modalselesai-{{'$datadelivery2->id'}}" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dynamBackdropLabel">Konfirmasi?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('dselesai/'.'$datadelivery2->id')}}" method="POST">
                    {{ csrf_field() }}
                    Apakah Pesanan {{'$datadelivery2->user->fullname'}} Sudah Selesai?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Iya</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Perjalanan - Tolak -->
<div class="modal fade" id="modalcancel-{{'$datadelivery2->id'}}" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dynamBackdropLabel">Konfirmasi?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('tolak/'.'$datadelivery2->id')}}" method="POST">
                    {{ csrf_field() }}
                    Apakah Pesanan {{'$datadelivery2->user->fullname'}} Di Cancel?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Iya</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection 