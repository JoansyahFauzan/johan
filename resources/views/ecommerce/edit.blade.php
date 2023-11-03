@extends('layouts.app')
 
@section('content')
    <div class="container">
        <h2>Edit Barang</h2>
        <form action="{{ route('ecommerce.update', $ecommerce->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_buku">Kode Buku</label>
                <input type="text" name="kode_buku" class="form-control" value="{{ $buku->kode_buku }}" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
 