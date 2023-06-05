<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcaldia extends Model
{
    use HasFactory;
    protected $table = 'alcaldia';

    public function getKeyName(){
        return "id";
    }

    public $fillable = [
        'id',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'email',
        'telefono',
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
