<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;
    protected $primaryKey = 'planilla_id';
    protected $fillable=[
        'planilla_id',
        'entregado',
        'obs_entrega'
    ];
}
