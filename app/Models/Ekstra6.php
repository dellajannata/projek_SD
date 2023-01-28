<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstra6 extends Model
{
    use HasFactory;
    protected $table = 'ekstra6';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'nama',
        'hari',
        'jam',
    ];
}
