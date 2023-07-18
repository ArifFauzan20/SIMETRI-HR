@extends('layouts.dashboard')
@section('content')
    <h2 class="content-heading">Halaman Company</h2>
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Table <small>Company</small></h3>
            <button type="button" class="btn btn-success mr-5 mb-5" title="Add Company" data-toggle="modal" data-target="#modal-normal">
                <i class="fa fa-plus mr-5"></i>Add
            </button>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
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
                        <td class="text-center px-1">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" title="Edit Company" data-target="#modalEditCompany">
                                <i class="fa fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" title="Delete Company" data-target="#modalDeleteCompany">
                                <i class="fa fa-times"></i> Delete
                            </button>
                        </td>
                        {{-- modal edit company --}}
                        <div class="modal" id="modalEditCompany" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Edit Company</h3>
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
                        {{-- end modal edit company --}}

                        {{-- modal delete company --}}
                        <div class="modal" id="modalDeleteCompany" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Delete Company</h3>
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
                        {{-- end modal delete company --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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

    <!-- END Dynamic Table Full -->
@endsection
