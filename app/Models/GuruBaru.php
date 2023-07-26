<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruBaru extends Model
{
    protected $table = "guru_baru";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'matapelajaran', 'biaya', 'alamat', 'kelasajar', 'tgllhr'
    ];
}
