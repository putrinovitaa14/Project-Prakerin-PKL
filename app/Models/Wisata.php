<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    public $fillable = ['nama_wisata', 'informasi_wisata', 'lokasi'];
    public $timestamps = true;


}
