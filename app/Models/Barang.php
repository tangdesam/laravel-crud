<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Tambahkan kolom-kolom yang boleh diisi melalui mass-assignment
    protected $fillable = ['nama', 'deskripsi']; 

    // Jika ada kolom yang perlu dilindungi dari mass-assignment
    // protected $guarded = [];  
}
