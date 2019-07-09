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
                        <label>masukan nama</label>
                        <input type="text" name="nama_kategori" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>

                    <div class="card-body">
                        <table id="bs4-table" class="table table-striped table-bordered data-kategori">
                            <tr>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
