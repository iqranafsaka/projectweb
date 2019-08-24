@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="zmdi zmdi-badge-check">
                        <b>{{ $artikel->judul }} .</b>
                        {{ $artikel->user->name }}
                    </i>
                </div>

                <div class="card-body">
                    <img src="{{ asset('assets/img/artikel/'.$artikel->foto) }}" style="width:300px"
                    class="float-left rounded m-r-30 m-b-30">
                    <p> {!! $artikel->konten !!} </p>
                    <br>
                    <p>
                        Kategori :
                        <button class="btn btn-rounded btn-sm btn-info">
                            {{ $artikel->kategori->nama_kategori }}
                        </button>
                    </p>

                    <p>
                        Tag :
                        @foreach ($artikel->tag as $data)
                            <button class="btn btn-rounded btn-sm btn-success">
                                {{ $data->nama_tag }}
                            </button>
                        @endforeach
                    </p>

                    <p>
                        Tanggal : {{ $artikel->created_at->format('d M Y H:i:s') }} WIB
                    </p>

                    <p>
                        <a href="/posts/{{$artikel->slug}}" class="btn btn-outline btn-block btn-rounded btn-info">
                            <i class="la la-paper-plame"></i>
                                Lihat Artikel
                            <i class="zmdi zmdi-airplane zmdi-bc-tw"></i>
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection