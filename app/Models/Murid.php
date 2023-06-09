<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = "murids";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'namaguru', 'alamat', 'nohp', 'tglaju'
    ];
}
