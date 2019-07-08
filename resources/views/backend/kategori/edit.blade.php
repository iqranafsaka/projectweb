<div class="modal fade bd-example-modal-lg-{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle2">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.update', $data->id) }}" method="POST">
                        <input type="hidden" value="PATCH" name="_method">
                    {{ csrf_field() }}  
    
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input class="form-control" type="text" name="nama_kategori" value="{{ $data->nama_kategori }}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>{{-- Form tutup --}}
        </div>
    </div>
</div>