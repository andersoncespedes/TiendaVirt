<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura;
class product extends Model
{
    use HasFactory;
    protected $fillable = ['name_pro', 'code_pro', 'quanty', 'marca', 'type_pro'];
    public function factura()
    {
        return $this->belongsTo(Factura::class, 'id_prod', 'id_prod');
    }
}
