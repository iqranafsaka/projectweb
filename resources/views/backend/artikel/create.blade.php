@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
{{-- CKEditor --}}
<script src="{{ asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
{{-- Select2 --}}
<script src="{{ asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create Data</div>
                
                <div class="card-body">
                    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
        
                    <div class="form-group">
                        <label for="">Judul Artikel</label>
                        <input class="form-control {{ $errors->has('judul') ? ' is-invalid' : '' }}" type="text" name="judul" required>
                        {{-- Error Notification --}}
                        @if ($errors->has('judul'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Multi Tag</label>
                        <select name="tag[]" class="form-control {{ $errors->has('tag') ? ' is-invalid' : '' }}" id="s2_demo3" multiple="multiple" required>
                            @foreach ($tag as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_tag }}</option>
                            @endforeach
                        </select>
                        {{-- Error Notification --}}
                        @if ($errors->has('tag'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tag') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <select class="form-control {{ $errors->has('kategori') ? ' is-invalid' : '' }}" name="id_kategori" id="" required>
                            @foreach ($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                            @endforeach
                        </select>
                        {{-- Error Notification --}}
                        @if ($errors->has('kategori'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('kategori') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                    <label for="">Pilih Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input {{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        {{-- Error Notification --}}
                        @if ($errors->has('foto'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                    </div> 
                    </div>


                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea class="form-control {{ $errors->has('konten') ? ' is-invalid' : '' }}" name="konten" id="editor1" required></textarea>
                        {{-- Error Notification --}}
                        @if ($errors->has('konten'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('konten') }}</strong>
                            </span>
                        @endif
                    </div>

                    <br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-rounded btn-outline" data-qt-block="body">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection