<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users'; // Corregido el nombre de la tabla

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'contraseña',
        'foto_perfil',
        'nick',
    ];

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function progress()
    {
        return $this->hasOne(Progress::class);
    }

    public function rankings()
    {
        return $this->hasOne(Ranking::class);
    }

    public function statistics()
    {
        return $this->hasOne(Statistic::class);
    }
}
