@extends('layouts.app')

@section('content')
    <h1>Edit Barang</h1>
    <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <!-- Input Nama Barang -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" value="{{ $barang->nama }}" required autofocus>
                </div>
            </div>

            <!-- Input Deskripsi Barang -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" placeholder="Deskripsi" required>{{ $barang->deskripsi }}</textarea>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>

    </form>
@endsection
