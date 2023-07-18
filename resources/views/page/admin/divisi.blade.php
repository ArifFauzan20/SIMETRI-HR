@extends('layouts.dashboard')
@section('content')
    <h2 class="content-heading">Halaman Divisi</h2>
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Table <small>Divisi</small></h3>
            <button type="button" class="btn btn-success mr-5 mb-5" data-toggle="modal" data-target="#modal-normal">
                <i class="fa fa-plus mr-5"></i>Add Divisi
            </button>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th>Nama Divisi</th>
                        <th>Update By</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="font-w600">IT</td>
                        <td class="font-w600">Ralph Murray</td>
                        <td class="font-w600">12-09-2023</td>
                        <td class="font-w600">12-09-2023</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" title="View Customer"
                                data-target="#modalEditDivisi">
                                <i class="fa fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" title="View Customer"
                                data-target="#modalDeleteDivisi">
                                <i class="fa fa-times"></i> delete
                            </button>
                        </td>

                        {{-- Modal edit Divisi --}}
                        <div class="modal" id="modalEditDivisi" tabindex="-1" role="dialog"
                            aria-labelledby="modal-normal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form action="">
                                        <div class="block block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">Edit Divisi</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="si si-close"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <form action="be_forms_elements_bootstrap.html" method="post"
                                                    onsubmit="return false;">
                                                    <div class="form-group">
                                                        <label for="example-nf-email">Divisi</label>
                                                        <input type="text" class="form-control" id="example-nf-email"
                                                            name="example-nf-email" placeholder="Enter Divisi..">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-alt-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                                                <i class="fa fa-check"></i> Perfect
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- end modal edit divisi --}}

                        {{-- modal delete divisi --}}
                        <div class="modal" id="modalDeleteDivisi" tabindex="-1" role="dialog"
                            aria-labelledby="modal-normal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form action="" method="POST">
                                        <div class="block block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">Delete Divisi</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="si si-close"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <div class="form-group">
                                                    <label for="example-nf-email">Divisi</label>
                                                    <input type="text" class="form-control" id="example-nf-email"
                                                        name="nama_divisi" placeholder="Enter Divisi..">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-alt-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-alt-success">
                                                <i class="fa fa-check"></i> Perfect
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- end modal delete divisi --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->

    <!-- Modal add Company -->
    <div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Company</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                            <div class="form-group">
                                <label for="example-nf-email">Email</label>
                                <input type="text" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Enter Company..">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfect
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal add company -->
@endsection
