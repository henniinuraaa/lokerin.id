<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table ="Perusahaans";
    // protected $primaryKey ="id";
    protected $guarded =[''];
    protected $keyType ="string";
}
