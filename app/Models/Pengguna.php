<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'point',
        'status'
    ];
    
    protected $table = 'pengguna';


}
