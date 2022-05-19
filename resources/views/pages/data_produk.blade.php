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
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Produk</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Harga</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Trends</th>
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

                                    <!-- Trends -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">-</p>
                                    </td>

                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#galerymodal" data-original-title="Galery">
                                            Galery
                                        </a>

                                        <a class="text-secondary font-weight-bold text-xs">
                                            |
                                        </a>

                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editmodal" data-original-title="Edit user">
                                            Edit
                                        </a>

                                        <a class="text-secondary font-weight-bold text-xs">
                                            |
                                        </a>

                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <!-- NO -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">2.</p>
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

                                    <!-- Trends -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">-</p>
                                    </td>

                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#galerymodal" data-original-title="Galery">
                                            Galery
                                        </a>

                                        <a class="text-secondary font-weight-bold text-xs">
                                            |
                                        </a>

                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editmodal" data-original-title="Edit user">
                                            Edit
                                        </a>

                                        <a class="text-secondary font-weight-bold text-xs">
                                            |
                                        </a>

                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <!-- NO -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">3.</p>
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

                                    <!-- Trends -->
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">-</p>
                                    </td>

                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#galerymodal" data-original-title="Galery">
                                            Galery
                                        </a>

                                        <a class="text-secondary font-weight-bold text-xs">
                                            |
                                        </a>

                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editmodal" data-original-title="Edit user">
                                            Edit
                                        </a>

                                        <a class="text-secondary font-weight-bold text-xs">
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
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Produk</h5>
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
                            <label for="example-text-input" class="form-control-label">Produk</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Foto Produk</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Harga</label>
                            <input class="form-control" type="text" value="Isinya">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Trends</label>
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

<!-- Galery Modal -->
<div class="modal fade" id="galerymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Galery Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ....
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection