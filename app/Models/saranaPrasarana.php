<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saranaPrasarana extends Model
{
    use HasFactory;

    protected $table = 'sarana_prasarana';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'namaSarana'
    ];
}
