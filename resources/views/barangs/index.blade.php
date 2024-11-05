@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Barang</h1>
        
        <!-- Tombol Create Barang -->
        <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-4">Tambah Barang</a>
        
        <!-- Daftar Barang -->
        <div class="list-group">
            @foreach ($barangs as $barang)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $barang->nama }}</span>
                    
                    <div class="btn-group" role="group">
                        <!-- Edit Button -->
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Form -->
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
