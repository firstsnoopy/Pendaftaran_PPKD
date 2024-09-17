<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJurusan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id_jurusan',
        'id_level',
        'id_user'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function  jurusans()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
    public function  levels()
    {
        return $this->belongsTo(levels::class, 'id_level', 'id');
    }
}
