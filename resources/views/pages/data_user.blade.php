@extends('pages.main')
<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
@if (session('diky_success'))
<div class="alert alert-success">
    {{ session('diky_success') }}
</div>
@endif

@if (session('diky_hapus'))
<div class="alert alert-success">
    {{ session('diky_hapus') }}
</div>
@endif
<div class="container-fluid py-4">
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
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">User</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Email</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">No. Telepon</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">PIN</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Password</th>
                                    <!-- <th class="text-center text-uppercase text-xxs font-weight-bolder">Balance</th> -->
                                    {{-- <th class="text-center text-uppercase text-xxs font-weight-bolder">Kendaraan</th> --}}
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Action</th>
                                </tr>
                            </thead>
                            @php
                            $nomer = 1;
                            @endphp
                            @foreach ($datauser as $du)
                            <tbody>
                                <tr>
                                    <!-- NO -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0"> {{ $nomer++ }}. </p>
                                    </td>

                                    <!-- ID -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $du->id }}</p>
                                    </td>

                                    <!-- User -->
                                    <td class="align-middle text-center text-sm">
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="https://ui-avatars.com/api/?name={{ $du->fullname }}&background=random&rounded=true" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $du->fullname }}</p>
                                                <!-- <h6 class="mb-0 text-sm">Afris Nurfal Aziz</h6> -->
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Email -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $du->email }}</p>
                                    </td>

                                    <!-- No. Telepon -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $du->phone_number }}</p>
                                    </td>

                                    <!-- PIN -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $du->pin_number }}</p>
                                    </td>

                                    <!-- Password -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $du->password }}</p>
                                    </td>

                                    <!-- Kendaraan -->
                                    {{-- <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $du->kendaraan }}</p>
                                    </td> --}}

                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <a href="javascript:;" id="tombolubah2" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editmodal-{{ $du->id }}" data-original-title="Edit user" data-id="{{$du->id}}" data-name="{{$du->fullname}}" data-email="{{$du->email}}" data-phone="{{$du->phone_number}}" data-pin="{{$du->pin_number}}" data-password="{{$du->password}}">
                                            Edit
                                        </a>
                                        <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                                            |
                                        </a>
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#hapusmodal-{{ $du->id }}" data-original-title="Hapus user">
                                            Delete
                                        </a>
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



<!-- Edit Modal -->
@foreach ($datauser as $data)
<div class="modal fade" id="editmodal-{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('edit/'.$data->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">ID</label>
                                <input class="form-control" name="id" id="id" readonly value="{{$data->id}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">User</label>
                                <input class="form-control" name="name" id="name" type="text" value="{{$data->fullname}}">
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Foto User</label>
                                <input class="form-control" name="foto" id="foto" type="text" >
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Email</label>
                                <input class="form-control" name="email" id="email" type="text" value="{{$data->email}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">No. Telepon</label>
                                <input class="form-control" name="phone" id="phone" type="text" value="{{$data->phone_number}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">PIN</label>
                                <input class="form-control" name="pin" id="pin" type="text" value="{{$data->pin_number}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Password</label>
                                <input class="form-control" name="password" id="password" type="text" value="{{$data->password}}">
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Kendaraan</label>
                                <input class="form-control" name="kendaraan" id="kendaraan" type="text" value="{{$data->kendaraan}}">
                            </div>
                        </div> --}}
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!-- Hapus Modal -->
@foreach ($datauser as $data)
<div class="modal fade" id="hapusmodal-{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Yakin Hapus Data?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{url('hapus/'.$data->id)}}" method="POST">
                    {{ csrf_field() }}
                    Apakah anda ingin menghapus data ID : {{ $data->id }} | Nama : {{ $data->fullname }} | Email : {{ $data->email }} | No. Telepone : {{ $data->phone_number }} ?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Iya</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection