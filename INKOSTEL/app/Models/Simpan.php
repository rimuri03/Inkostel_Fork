<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simpan extends Model
{
    protected $table = 'carikos';
    protected $primaryKey = 'id_kos';
    // Atur atribut fillable atau guarded jika perlu
    protected $fillable = ['nama_kos', 'harga_kos', 'jarak_kos', /* ... */];
}

