<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuridBaru extends Model
{
    protected $table = "murid_baru";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'matapelajaran', 'alamat', 'nohp', 'sarana', 'tglpsn', 'status'
    ];
}
