<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    // protected $table = 'jurusans';
    protected $fillable = [
        'nama_jurusan',
    ];

    public function pesertapelatihan()
     {
        return $this->hasMany(peserta_pelatihan::class, 'id_jurusan', 'id');
     }

     public function users()
     {
        return $this->belongsToMany(Jurusan::class, 'user_jurusan', 'id_jurusan', 'id_user');
     }


}
