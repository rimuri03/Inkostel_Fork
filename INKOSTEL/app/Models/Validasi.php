<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasi extends Model
{
    use HasFactory;
    protected $table = 'validation';

    protected $fillable =[
        'id_kos',
        'user_id',
        'nama_kos',
        'harga_kos_pertahun',
        'harga_kos_perbulan',
        'jarak_kos',
        'gambar_kos',
        'alamat',
        'Deskripsi',
        'Fasilitas',
        'ContactPerson',
    ];
}
