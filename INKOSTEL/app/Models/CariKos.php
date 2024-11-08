<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CariKos extends Model
{
    use HasFactory;
    protected $table = 'carikos';

    protected $fillable =[

        'nama_kos', 'harga_kos', 'jarak_kos', 'gambar_kos1', 'gambar_kos2', 'gambar_kos3', 'gambar_kos4', 'gambar_kos5',
        'alamat', 'Deskripsi', 'Fasilitas', 'ContactPerson', 'KamarKosong'


    ];
    protected $primaryKey = 'id_kos';
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


}
