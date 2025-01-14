<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $table = 'propietarios';

    protected $fillable = ['nombre', 'email'];

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
