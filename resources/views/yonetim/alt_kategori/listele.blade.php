@extends('yonetim.layouts.master')
@section('header')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Alt Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('yonetim.anasayfa')}}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Alt Kategori</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Alt Kategori Ekleme Paneli</h3>
                            </div>
                            <div class="card-body">
                                <table id="altkategoritable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Ana Kategori</th>
                                        <th>Kategori Adı</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('footer')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        $(function () {
            $("#altkategoritable").DataTable({
                paging: true,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{route('yonetim.altkategori.index')}}",
                columns: [
                    {data: 'category'},
                    {data: 'ad'},
                    {
                        data: 'edit',
                        name: 'edit',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'delete',
                        name: 'delete',
                        orderable: true,
                        searchable: true
                    }
                ],
                "columnDefs": [
                    {"width": "40%", "targets": 0},
                    {"width": "40%", "targets": 1},
                    {"width": "10%", "targets": 2},
                    {"width": "10%", "targets": 3}
                ],
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: "<i class=\"fa fa-plus-square fa-3x\" aria-hidden=\"true\"></i>",
                        className: 'btn btn-sm btn-success assets-export-btn',
                        action: function (e, dt, node, config) {
                            location.href = "{{route('yonetim.altkategori.create')}}"
                        }
                    },
                    {
                        text: '<i class="fa fa-file-excel fa-lg" aria-hidden="true"></i> Excel',
                        extend: 'excel',
                    },
                    {
                        text: '<i class="fa fa-file-pdf fa-lg" aria-hidden="true"></i> Pdf',
                        extend: 'pdf',
                        title: "pdf cıktsı"
                    },
                    {
                        text: '<i class="fa fa-print fa-lg" aria-hidden="true"></i> Yazdır',
                        extend: 'print',
                    }
                ]
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#anakategoritable .col-md-6:eq(0)');
        });

    </script>
@endsection
