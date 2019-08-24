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
<div class="container tag" id="indexTag">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tag Artikel
                    <button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modalTambahTag">Tambah</button>
                </div>

                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table id="datatable-tag" class="table">
                            <thead>
                                <tr>
                                    <th>Nama Tag</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend.tag.create')
@include('backend.tag.edit')
@endsection


@push('scripts')
<script>
$(document).ready(function() {
    // CSRF
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    // Index Data
    $('#datatable-tag').dataTable({
        dataType: "json",
        ajax: {
                url: '/api/tag/',
                dataType: "json",
                type: "GET",
                stateSave : true,
                serverSide: true,
                processing: true,
        },
        responsive:true,
        columns: [
                { data: 'nama_tag', name: 'nama_tag' },
                { data: 'slug', name: 'slug' },
                { data: 'id', render : function (data, type, row, meta) {
                    return `
                    <button type="button" class="btn btn-sm btn-success edit-tag"
                        data-target="#modalEditTag"
                        data-toggle="modal"
                        data-id="${row.id}"
                        data-nama_tag="${row.nama_tag}"
                        >Edit</button>
                        <button class="btn btn-sm btn-danger" data-id="${row.id}" id="hapus-dataTag">Hapus</button>
                    `;
                    }
                }
            ]
        });


        // Store Data tag
        $('#createDataTag').submit(function (e) {
        var formData = new FormData($('#createDataTag')[0]);
        e.preventDefault();
        $.ajax({
            url: "/api/tag",
            type: 'POST',
            data: formData,
            cache: true,
            contentType: false,
            processData: false,
            async: false,
            dataType: 'json',
            success: function (result) {
                $('#modalTambahTag').modal('hide');
                $('#createDataTag').trigger("reset");
                Swal.fire({
                    type: 'success',
                    title: 'Data Berhasil ditambah!',
                    showConfirmButton: false,
                    timer: 1500,
                })
                location.reload();
            },
            complete: function () {
                $("#createDataTag")[0].reset();
            }
        });
    });


        // get Edit data
    $('#modalEditTag').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nama_tag = button.data('nama_tag')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(id)
        modal.find('.modal-body input[name="nama_tag"]').val(nama_tag)
    })
    // Update Data tag
    $('#editDataTag').submit(function (e) {
        var formData = new FormData($('#editDataTag')[0]);
        var id = formData.get('id');
        e.preventDefault();
        $.ajax({
            url: "/api/tag/" + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            async: false,
            dataType: 'json',
            success: function (result) {
                $('#modalEditTag').modal('hide');
                $('#editDataTag').trigger("reset");
                Swal.fire({
                    type: 'success',
                    title: 'Data Berhasil diubah!',
                    showConfirmButton: false,
                    timer: 1500,
                })
                location.reload();
            },
            complete: function () {
                $("#editDataTag")[0].reset();
            }
        });
    });


    // Hapus Data
    $("#datatable-tag").on('click', '#hapus-dataTag', function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        // alert(id)
        Swal.fire({
            title: "Data yang anda pilih telah dihapus!",
            type: "success",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "OK",
            allowOutsideClick: false,
            closeOnClickOutside: false,
            closeOnConfirm: false
        }).then(function(isConfirm){
           if (isConfirm) {
            $.ajax({
                url: '/api/tag/' + id,
                method: "DELETE",
                dataType: "json",
                data: {
                    id: id
                },
                success: function (result) {
                    location.reload();
                }
                
            })
          }
       })
    })

});
</script>
@endpush