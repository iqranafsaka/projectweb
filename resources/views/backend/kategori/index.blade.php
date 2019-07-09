@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">


                    </form> --}}
                    <div class="form-group">
                        <label>Masukin Nama Kategori : </label>
                        <input type="text" name="nama_kategori" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="float-right btn btn-primary btn-rounded btn-outline tombol-simpan">Simpan</button>
                    </div><br><br>

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
