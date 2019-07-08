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
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Tag</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @php $no = 1; @endphp
                            @foreach ($artikel as $data)
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->slug }}</td>
                            <td>{{ $data->Kategori->nama_kategori }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td><ol>
                                @foreach ($data->tag as $key)
                                    <li>{{ $key->nama_tag }}</li>
                                @endforeach
                            </ol></td>
                            <td><img src="{{ asset('assets/img/artikel/' . $data->foto . '') }}" 
                                    style="width:115px; height:80px;" alt="foto">
                            </td>

                            <td>
                            <form action="{{ route('artikel.destroy', $data->id) }}" method = "POST">
                            {{ csrf_field() }}
                            {{-- show button --}}
                            <a href="{{ route('artikel.show', $data->id) }}"><button type="button" title="Edit" class = "btn btn-info btn-rounded btn-outline btn-sm" data-qt-block="body"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></button></a>
                            {{-- edit button --}}
                            <a href="{{ route('artikel.edit', $data->id) }}"><button type="button" title="Edit" class = "btn btn-warning btn-rounded btn-outline btn-sm" data-qt-block="body"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button></a>
                            {{-- delete button --}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" title="Delete" class="btn btn-danger btn-rounded btn-outline btn-sm" data-qt-block="body"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></button>
                            </form>
                        </td>
                        </tr>
                        
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Tag</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection