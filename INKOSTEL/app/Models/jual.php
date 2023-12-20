<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    use HasFactory;

    protected $table = 'validation';
    protected $fillable = [
<<<<<<< Updated upstream
        'nama_kos','user_id', 'harga_kos_perbulan', 'harga_kos_pertahun', 'jarak_kos', 'gambar_kos', 'alamat', 'Deskripsi', 'Fasilitas', 'ContactPerson',
=======
        'nama_kos', 'harga_kos_pertahun','harga_kos_perbulan', 'jarak_kos', 'gambar_kos', 'alamat','Deskripsi', 'Fasilitas', 'ContactPerson'
>>>>>>> Stashed changes
    ];


    protected $primaryKey = 'id_kos';
}
