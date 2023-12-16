<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table ="Pengajuans";
    // protected $primaryKey ="id";
    protected $guarded =[''];
    protected $KeyType ="string";
}
