<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    // Atur nama tabel yang sesuai
    protected $table = 'kos';

    // Atur nama kolom primary key jika berbeda dari 'id'
    protected $primaryKey = 'id_kos';

    // Sesuaikan dengan nama kolom yang dapat diisi
    protected $fillable = [
        'gambar_kos', 'nama_kos', 'harga_kos', 'jarak_kos'
    ];

}