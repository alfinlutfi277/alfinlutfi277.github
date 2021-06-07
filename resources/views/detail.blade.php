@extends('master')

<!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
@section('title')
{{ $article->nama_depan}}
@endsection

<!-- menampilkan gambar, judul, dan isi artikel -->
@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">

    <div class="p-4">
        <h2>{{ $article->nama_depan }}</h2>
        <p class="mt-5">{{ $article->nama_belakang }}</p>
    </div>
</div>
@endsection

<!-- menampilkan tombol kembali ke halaman utama -->
@section('sidebar')
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
    <center>
        <a href="/">
            <button class="btn btn-info text-white w-100">Kembali</button>
        </a>
    </center>
</div>
@endsection