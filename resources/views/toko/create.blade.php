@extends('template/admin/index')

@section('content')
<h1>Tambah Produk</h1>
<form action="{{ route('produk.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nama Produk:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="price">Harga Produk:</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="description">Deskripsi Produk:</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection