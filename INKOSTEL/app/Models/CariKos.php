<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CariKos extends Model
{
    use HasFactory;
    protected $table = 'carikos';

    protected $fillable =[
        'id_kos',
        'nama_kos',
        'harga_kos_pertahun',
        'jarak_kos',
        'gambar_kos1'
    ];
}
