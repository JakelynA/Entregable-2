<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class inquilino extends Model
{
    use HasFactory;
    
    protected $table ='inquilino';
 
    protected $fillable = ['nombre','email'];

    public function inquilinos()
    {
        return $this->hasMany(Usuario::class);
    }
 
    public function pagos()
    {
        return $this->hasManyThrough(Pago::class, Usuario::class);
    }
}
