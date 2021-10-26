<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;
    protected $table ="balita";
    protected $guarded = [];
    protected $primaryKey ="no_akta";
}
