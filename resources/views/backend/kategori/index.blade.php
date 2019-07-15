@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="form-group">
                            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="float-right btn btn-primary btn-rounded btn-outline">Tambah Data</button>
                            <div id="id01" class="modal">
                            <form class="modal-content animate" action="/action_page.php">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <h2>Tambah Data</h2>
                                </div>
                                <div class="container">
                                    <label>Masukin Nama Kategori : </label>
                                    <input type="text" name="nama_kategori" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    {{-- <center><img src="{{ asset('assets/backend/assets/img/milos.jpg')}}" alt=""></center> --}}
                                </div>
                                <div class="container" style="background-color:#f1f1f1">
                                    <button class="float-right btn btn-info btn-rounded btn-outline tombol-simpan">Simpan</button>
                                </div>
                            </form>
                            </div>
                    </div>
                    <div class="card-body">
                        <table id="bs4-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="data-kategori">
                                {{-- Isinya dari class --}}
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
