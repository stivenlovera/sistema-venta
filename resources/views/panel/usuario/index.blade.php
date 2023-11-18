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

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Lista usuario</h6>
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
                                    <th></th>
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
            columns: [{
                    data: "Codigo",
                    name: "Codigo"
                    title: "Nro Identidad"
                },
                {
                    data: "codigo_proyecto",
                    name: "codigo_proyecto",
                    title: "Nombres"
                },
                {
                    data: "fecha",
                    name: "fecha",
                    title: "Apellidos"
                },
                {
                    data: "Fecha Nacimiento",
                    name: "nombre_proyecto",
                    title: "Nombres"
                },
                {
                    data: "fecha_inicio",
                    name: "fecha_inicio",
                    title: "Nombres"
                },
                {
                    data: "nombre_empresa",
                    name: "nombre_empresa",
                    title: "Nombres"
                },
                {
                    data: "username",
                    name: "username",
                    title: "Nombres"
                },

            ]
        });
    </script>
@endpush
