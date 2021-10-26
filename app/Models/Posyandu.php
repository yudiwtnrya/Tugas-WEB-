<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;
    protected $table ="posyandu";
    protected $guarded = [];
    protected $primaryKey ="no_region";
}
