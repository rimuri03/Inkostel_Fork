<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    use HasFactory;

    protected $table = 'carikos';
    protected $fillable = [
        'nama_kos', 'harga_kos', 'jarak_kos', 'gambar_kos', 'alamat', 'jarak', 'Deskripsi', 'Fasilitas', 'ContactPerson',
    ];


    protected $primaryKey = 'id_kos';
}
