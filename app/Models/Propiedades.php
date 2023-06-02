<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;
    protected $table = 'propiedades';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nombre','direccion','caracteristicas','estado','precio'];
}
