@extends('layouts.app')

@section('content')
    <h1>Create Barang</h1>
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <!-- Input Nama Barang -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required autofocus>
                </div>
            </div>

            <!-- Input Deskripsi Barang -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" placeholder="Deskripsi" required></textarea>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection
