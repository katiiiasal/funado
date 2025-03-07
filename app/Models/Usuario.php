<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = true;

    protected $fillable = [
        'usuario',
        'password',
        'tipo',
    ];

    // Si el campo de contraseña no se llama 'password', debes especificarlo
    public function getAuthPassword()
    {
        return $this->password;
    }
}