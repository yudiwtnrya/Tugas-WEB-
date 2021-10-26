<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuluhan extends Model
{
    use HasFactory;
    protected $table ="tanggal_penyuluhan";
    protected $guarded = [];
    protected $primaryKey ="kode_penyuluhan";
}
