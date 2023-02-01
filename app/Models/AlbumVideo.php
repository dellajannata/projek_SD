<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumVideo extends Model
{
    use HasFactory;

    protected $table = 'albumvideo';
    protected $primaryKey = 'id';

    protected $fillable = [
        'video', 
        'judul',
        'tanggal',
    ];
}
