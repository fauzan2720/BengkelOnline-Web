@extends('pages.main')
<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
<div class="container-fluid py-4">

    <!-- Data New -->
    
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>New</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">No.</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">ID Service</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Nama User</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Nomor Telepon</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Lokasi</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Kendala</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Action</th>
                                </tr>
                            </thead>
                                     @php
                                     $nomer = 1;
                                    @endphp
                            @foreach ($datadelivery as $data)
                            <tbody>
                                <tr>
                                    <!-- NO -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$nomer ++}}.</p>
                                    </td>

                                    <!-- ID Delivery Service -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$data->id}}</p>
                                    </td>

                                    <!-- Nama User -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$data->user->fullname}}</p>
                                    </td>

                                    <!-- Nomor Telepon -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$data->user->phone_number}}</p>
                                    </td>

                                    <!-- Lokasi -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$data->location->address}}</p>
                                    </td>

                                    <!-- Kendala -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{$data->detail_problem}}</p>
                                    </td>

                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <button type="button" class="btn btn-success text-xs font-weight mb-0" data-bs-toggle="modal" data-bs-target="#modalnew-{{$data->id}}">
                                            Terima & Proses
                                        </button>
                                        <button type="button" class="btn btn-danger text-xs font-weight mb-0" data-bs-toggle="modal" data-bs-target="">
                                            Batal
                                        </button>
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
                                <h6 class="mb-3 text-sm">Alex Nurfal Aziz</h6>
                                <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">323231</span></span>
                                <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">088675675</span></span>
                                <span class="mb-2 text-xs">Lokasi: <span class="text-dark ms-sm-2 font-weight-bold">JL. Danau Toba, Depan pemadam</span></span>
                                <span class="mb-2 text-xs">Kendala: <span class="text-dark ms-sm-2 font-weight-bold">Mesen Bledos</span></span>
                                <span class="text-xs">Nama Mekanik: <span class="text-dark ms-sm-2 font-weight-bold">Panji</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-times-circle me-2"></i>Cancel</a>
                                <a class="btn btn-link text-success px-3 mb-0" href="javascript:;"><i class="far fa-check-circle me-2" aria-hidden="true"></i>Selesai</a>
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
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">0852482424</span></span>
                                    <span class="mb-2 text-xs">Lokasi: <span class="text-dark ms-sm-2 font-weight-bold">Ambulu depan kecamatan</span></span>
                                    <span class="mb-2 text-xs">Kendala: <span class="text-dark ms-sm-2 font-weight-bold">Mesen Kobong</span></span>
                                    <span class="text-xs">Nama Mekanik: <span class="text-dark ms-sm-2 font-weight-bold">Wahyu</span></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-sm bg-gradient-success">Selesai</span>
                            </div>
                        </li>
                    </ul>

                    <!-- Yesterday -->
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Ilham Guncana Putra</h6>
                                    <span class="mb-2 text-xs">ID Service: <span class="text-dark font-weight-bold ms-sm-2">6352</span></span>
                                    <span class="mb-2 text-xs">No. Telepon: <span class="text-dark font-weight-bold ms-sm-2">0812348989</span></span>
                                    <span class="mb-2 text-xs">Lokasi: <span class="text-dark ms-sm-2 font-weight-bold">Depan gacoan jember</span></span>
                                    <span class="mb-2 text-xs">Kendala: <span class="text-dark ms-sm-2 font-weight-bold">Knalpot ngebul</span></span>
                                    <span class="text-xs">Nama Mekanik: <span class="text-dark ms-sm-2 font-weight-bold">Yudi</span></span>
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
    </div>
</div>

<!-- Modal -->
@foreach ($datadelivery as $data)
<div class="modal fade" id="modalnew-{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Terima & Proses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{url('terima/'.$data->id)}}" method="POST">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">ID Delivery Service</label>
                            <input class="form-control" type="text" value="{{$data->id}}" aria-label="Isinya" disabled readonly>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama User</label>
                            <input class="form-control" type="text" value="{{$data->user->fullname}}" aria-label="Isinya" disabled readonly>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Momor Telepon</label>
                            <input class="form-control" type="text" value="{{$data->user->phone_number}}" aria-label="Isinya" disabled readonly>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Lokasi</label>
                            <input class="form-control" type="text" value="{{$data->location->address}}" aria-label="Isinya" disabled readonly>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Kendala</label>
                            <input class="form-control" type="text" value="{{$data->detail_problem}}" aria-label="Isinya" disabled readonly>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Status</label>
                            <input class="form-control" type="text" name="status2" value="perjalanan" aria-label="Isinya" disabled readonly>
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama Mekanik</label>
                            <div class="input-group mb-3">
                                <select class="form-select" name="mechanic" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    @foreach ($mechanic as $datam)
                                    <option value="{{$datam->fullname}}">{{$datam->fullname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Terima & Proses</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection