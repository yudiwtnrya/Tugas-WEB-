<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    use HasFactory;
    protected $table ="orangtua";
    protected $guarded = [];
    protected $primaryKey ="nik_ortu";

}
