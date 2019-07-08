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
                <h5 class="card-header">Data Tag 
                    <button style="float: right;" type="button" title="Tambah Data" class="btn btn-primary btn-rounded btn-outline" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="zmdi zmdi-collection-plus zmdi-hc-fw"></i>
                    </button>
                </h5>
                @include('backend.tag.create')
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tag</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                @php $no = 1; @endphp
                                @foreach ($tag as $data)
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_tag }}</td>
                                <td>{{ $data->slug }}</td>

                                {{-- <td>
                                <a href="{{ route('tag.show', $data->id) }}" class = "btn btn-warning">Show</a>
                            </td> --}}

                            <td>
                                <form action="{{ route('tag.destroy', $data->id) }}" method = "POST">
                                {{ csrf_field() }}
                                {{-- edit button --}}
                                <button type="button" title="Edit" data-toggle="modal" data-target=".bd-example-modal-lg-{{ $data->id }}" class = "btn btn-success btn-rounded btn-outline btn-sm"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button>
                                {{-- delete button --}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" title="Delete" class="btn btn-danger btn-rounded btn-outline btn-sm"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></button>
                                </form>
                            </td>
                        </tr>
                        @include('backend.tag.edit')
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Tag</th>
                                <th>Slug</th>
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