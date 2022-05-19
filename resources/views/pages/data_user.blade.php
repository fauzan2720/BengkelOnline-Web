@extends('pages.main')
<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
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
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Kendaraan</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Action</th>
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
                                        <p class="text-xs font-weight-bold mb-0">123456</p>
                                    </td>

                                    <!-- User -->
                                    <td class="align-middle text-center text-sm">
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs font-weight-bold mb-0">Afris Nurfal Aziz</p>
                                                <!-- <h6 class="mb-0 text-sm">Afris Nurfal Aziz</h6> -->
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Email -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">afrisazizi@gmail.com</p>
                                    </td>

                                    <!-- No. Telepon -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">085233685030</p>
                                    </td>

                                    <!-- PIN -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">0908</p>
                                    </td>

                                    <!-- Password -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">okeoke</p>
                                    </td>

                                    <!-- Kendaraan -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">Supra X 125</p>
                                    </td>

                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editmodal" data-original-title="Edit user">
                                            Edit
                                        </a>
                                        <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                                            |
                                        </a>
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus user">
                                            Delete
                                        </a>
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

<!-- Edit Modal -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">ID</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">User</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Foto User</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">No. Telepon</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">PIN</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Password</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Kendaraan</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection