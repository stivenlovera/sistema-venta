@extends('layout.main')
@push('css-header')
    <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-users"></i> Usuario</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Lista Roles</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="d-flex flex-row-reverse mt-0">
                        <button type="button" class="btn btn-sm btn-primary has-icon mt-0"><i class="fa fa-plus"></i>
                            Añadir</button>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table id="list-usuario" class="table w-100 thead-primary">
                            <thead>
                                <tr>
                                    <th>Rol</th>
                                    <th>Modulos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Lista Modulos</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="list-usuario" class="table w-100 thead-primary">
                            <thead>
                                <tr>
                                    <th>Modulos</th>
                                    <th>Sub modulos</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/data-tables.js') }}"></script>
    <script>
        var dataTable = $('#list-usuario').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: `${base_url}/usuario/data-table`,
            order: [],
            columns: [
                {
                    data: "nombre",
                    name: "nombre"
                },
                {
                    data: "apellido",
                    name: "apellido",
                    render: function(data, type, row, meta) {
                        console.log(row)
                        return `
                        <span class="badge badge-secondary m-0">Secondary</span>
                        <span class="badge badge-secondary m-0">Secondary</span>
                        <span class="badge badge-secondary m-0">Secondary</span>
                        <span class="badge badge-secondary m-0">Secondary</span>
                        <span class="badge badge-secondary m-0">Secondary</span>
                        <span class="badge badge-secondary m-0">Secondary</span>
                        `;
                    },
                },
                {
                    data: "usuario_id",
                    name: "usuario_id",
                    render: function(data, type, row, meta) {
                        console.log(row)
                        return `
                        <i class='fas fa-pencil-alt ms-text-success edit cursor-pointer evento' title='Editar' data-evento="no" data-index="" ></i>
                        <i class='far fa-trash-alt ms-text-danger delete cursor-pointer' title='Eliminar' data-index="" ></i>
                        `;
                    },
                }
            ]
        });
    </script>
@endpush
