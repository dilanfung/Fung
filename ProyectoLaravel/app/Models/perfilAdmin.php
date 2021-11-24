<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfilAdmin extends Model
{
    use HasFactory;

    protected $table = "vehiculo";
    protected $fillable = ["id","placa","marca", "cilindraje_motor", "modelo", "anio", "usuario"];
}
