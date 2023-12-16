<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kos extends Model
{
    protected $fillable = [
        'KosID', 'NamaKos', 'Harga', 'alamat', 'Jarak', 'Deskripsi', 'Fasilitas', 'ContactPerson', 'KamarKosong'
    ];
    protected $primaryKey = 'KosID';
}
