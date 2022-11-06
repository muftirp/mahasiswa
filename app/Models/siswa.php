<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_induk',
        'nama',
        'alamat',
        'foto'
    ];

    protected $table = "siswa";
    
}
