@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endpush
@section('header')
    <x-header title="Permission List"></x-header>
@endsection
@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                @can('create pegawai')
                                    <a href="#" class="btn btn-sm btn-primary" id="btn_tambah"><i
                                            class="fas fa-plus"></i> Tambah User</a>
                                @endcan            
                                </h3>
                            </div>
                            <div class="card-body">
                <table id="datatable" class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Guard</th>
                                            <th>Updated</th>
                                            @canany(['update permission', 'delete permission'])
                                                <th>Action</th>
                                            @endcanany
                             </tr>
                            </thead>
                </table>
                         
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.permissions.modal-create-edit')
@include('admin.permissions.modal-create-multi')
@endsection

@push('js')
    <script src="{{ asset('template/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2-min.js') }}"></script>
    <script src="{{ asset('template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })

            let datatable = $("#datatable").DataTable({
                serverSide: true,
                processing: true,
                scrollX: true,
                paginate: false,
                aaSorting: [],
                order: [
                    [1, 'asc']
                ],
                bAutoWidth: false,
                fixedColumns: true,
             
                ajax: @json(route('permission.index')),
                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'name',
                        
                        searchable: true,
                    },
                    {
                        data: 'guard_name',
                        searchable: false,
                    },
                    {
                        data: 'created_at',
                        searchable: false,
                    },
                    {
                        data: "action",
                        orderable: false,
                        searchable: false,
                        width: '10%',
                    },
                ]
            })

            $("#btn_tambah").click(function() {
                datatable.ajax.reload()
            });




            $("#form_edit_group").submit(function(e) {
                e.preventDefault()
                const formData = new FormData(this)
                $.ajax({
                    type: 'POST',
                    url: route('permission-group.store'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        _showLoading()
                    },
                    success: (response) => {
                        if (response) {
                            $('#modal_create_edit').modal('hide')
                            datatable.ajax.reload()
                            _alertSuccess(response.message)
                        }
                    },
                    error: function(response) {
                        _showError(response)
                    }
                })
            })
            $("#form_create_edit_permission").submit(function(e) {
                e.preventDefault()
                const formData = new FormData(this)
                $.ajax({
                    type: 'POST',
                    url: route('permission.store'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        _showLoading()
                    },
                    success: (response) => {
                        if (response) {
                            $('#modal_create_edit').modal('hide')
                            datatable.ajax.reload()
                            _alertSuccess(response.message)
                        }
                    },
                    error: function(response) {
                        _showError(response)
                    }
                })
            })
            $("#form_create_multi_permission").submit(function(e) {
                e.preventDefault()
                const formData = new FormData(this)
                $.ajax({
                    type: 'POST',
                    url: route('permission.store'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        _showLoading()
                    },
                    success: (response) => {
                        if (response) {
                            $('#modal_create_multi').modal('hide')
                            datatable.ajax.reload()
                            _alertSuccess(response.message)
                        }
                    },
                    error: function(response) {
                        _showError(response)
                    }
                })
            })
            $('#btn_add_permission').click(function(e) {
                e.preventDefault()
                _clearInput()
                $('#modal_create_edit').modal('show')
                $('#modal_create_edit .modal-title').text('Create New Permission')
            })
            $('#btn_add_multi_permission').click(function(e) {
                e.preventDefault()
                _clearInput()
                $('#modal_create_multi').modal('show')
                $('#modal_create_edit .modal-title').text('Create New Permission')
            })
            $('#datatable').on('click', '.btn_edit', function(e) {
                e.preventDefault()
                _clearInput()
                $('#modal_create_edit').modal('show')
                $('#modal_create_edit .modal-title').text('Edit Permission')
                $('.error').hide();
                $.get($(this).attr('data-url'), function(response) {
                    $("input[name='name']").val(response.data.name)
                    $("input[name='desc']").val(response.data.desc)
                    $("input[name='permission_id']").val(response.data.id)
                    //   $("input[name='permission_group_id']").val(response.data.permission_group_id)
                    $("input[name='guard_name']").val(response.data.guard_name).change()
                    $("#permission_group_id").val(response.data.permission_group_id).change()
                })
            })
            $('#datatable').on('click', '.btn_delete', function(e) {
                e.preventDefault()
                Swal.fire({
                    title: 'Are you sure, you want to delete this data Permission ?',
                    text: $(this).attr('data-action'),
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6 ',
                    confirmButtonText: 'Yes, Delete'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                _method: 'DELETE'
                            },
                            url: $(this).attr('data-url'),
                            beforeSend: function() {
                                _showLoading()
                            },
                            success: (response) => {
                                datatable.ajax.reload()
                                _alertSuccess(response.message)
                            },
                            error: function(response) {
                                _showError(response)
                            }
                        })
                    }
                })
            })
        })
    </script>
@endpush
