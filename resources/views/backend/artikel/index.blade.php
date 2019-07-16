@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
<script src="{{ asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Artikel 
                    <form action="{{ route('artikel.create') }}">
                        <button type="submit" title="Tambah Data" class="float-right btn btn-primary btn-rounded btn-outline" data-qt-block="body">
                            <i class="zmdi zmdi-collection-plus zmdi-hc-fw"></i>
                        </button>
                    </form>
                </h5>
                
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Tag</th>
                                <th>Foto</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="data-artikel">
                            {{-- isi --}}
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Tag</th>
                                <th>Foto</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection