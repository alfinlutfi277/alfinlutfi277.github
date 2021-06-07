@extends('master')

<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Artikel')

@section('header')
<center class="mt-4">
    <h2>Edit Artikel</h2>
</center>
@endsection

@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
        @csrf
        <input type="hidden" value="{{ $article->id }}" name="id">
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" value="{{ $article->nama_depan }}" name="nama_depan"
                placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>nama belakang</label>
            <input type="text" class="form-control" value="{{ $article->nama_belakang }}" name="nama_belakang"
                placeholder="">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" value="{{ $article->alamat }}" name="alamat" placeholder="">
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" value="{{ $article->pekerjaan }}" name="pekerjaan" placeholder="">
        </div>
        <div class="form-group">
            <label>Riwayat</label>
            <input type="text" class="form-control" value="{{ $article->riwayat }}" name="riwayat" placeholder="">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" class="form-control" value="{{ $article->lokasi }}" name="lokasi" placeholder="">
        </div>
        <div class="form-group">
            <label>tanggal</label>
            <input type="text" class="form-control" value="{{ $article->tanggal }}" name="tanggal" placeholder="">
        </div>
</div>
@endsection

<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class=" form-group">
        <label></label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
</div>
</form>
@endsection