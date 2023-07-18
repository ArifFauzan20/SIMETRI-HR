<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 't_keluarga';
    protected $guarded = ['id'];


    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class, 'id_karyawan');
    }
}