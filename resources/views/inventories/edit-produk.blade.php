@extends('layouts.main')
@section('title','Edit Produk')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
    </div>
    <div class="col-lg-6">
        <div class="card shadow mb-4 ">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
            </div>

            <div class=" card-body">
                <form action="{{ route('inventories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label">Nama Produk</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Produk"
                            aria-label="Nama Produk" aria-describedby="basic-addon1" value="{{ $inventories->name }}">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <label for="" class="form-label">Harga Produk</label>
                    <div class="input-group mb-3">
                        <input type="number" name="price" class="form-control" placeholder="Harga Produk"
                            aria-label="Harga Produk" aria-describedby="basic-addon1" value="{{ $inventories->price }}">
                        @error('price')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <label for="" class="form-label">Stok Produk</label>
                    <div class="input-group mb-3">
                        <input type="number" name="stock" class="form-control" placeholder="Stok Produk"
                            aria-label="Stok Produk" aria-describedby="basic-addon1" value="{{ $inventories->stock }}">
                        @error('price')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></i> Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection