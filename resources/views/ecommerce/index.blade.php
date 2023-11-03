@extends('layouts.app')
 
@section('content')
    <div class="container">
        <h2>Data Ecommerce</h2>
        <a href="{{ route('ecommerce.create') }}" class="btn btn-primary">Tambah Barang</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $ecommerce)
                    <tr>
                        <td>{{ $ecommerce->kode_barang }}</td>
                        <td>{{ $ecommerce->nama_barang }}</td>
                        <td>{{ $ecommerce->harga }}</td>
                        <td>
                            <a href="{{ route('ecommerce.edit', $ecommerce->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('ecommerce.destroy', $ecommerce->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
 