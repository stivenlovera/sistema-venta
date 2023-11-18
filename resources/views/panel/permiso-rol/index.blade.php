@extends('layout.main')
@push('css-header')
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">Usuario</i> Home</a></li>
                </ol>
            </nav>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Lista de usuario</h6>
                </div>
                <div class="ms-panel-body">
                    <p class="ms-directions">Check <code>/assets/js/data-tables.js</code> for reference</p>
                    <div class="table-responsive">
                        <table id="data-table-1" class="table table-hover w-100"></table>
                    </div>
                </div>
            </div>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Datatable With Header and Stripes</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-2" class="table table-striped thead-primary w-100"></table>
                    </div>
                </div>
            </div>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Datatable With Scroll</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-3" class="table w-100"></table>
                    </div>
                </div>
            </div>

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Responsive Datatable</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-4" class="table w-100 thead-primary"></table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@push('javascript-form')
@endpush
