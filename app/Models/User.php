<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usuario',
        'password',
        'persona_id',
        'habilitado',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function obtenerMenu()
    {
        $rol_modulos = DB::table('rol_usuario')
            ->select(
                'modulo.class_icon',
                'rol_modulo.rol_modulo_id',
                'modulo.modulo_id',
                'modulo.nombre_modulo',
                'modulo.url'
            )
            ->join('rol_modulo', 'rol_modulo.roles_id', 'rol_personal.roles_id')
            ->join('modulo', 'modulo.modulo_id', 'rol_modulo.modulo_id')
            ->where('rol_usuario.usuario_id', 1)
            ->orderBy('modulo.modulo_id','DESC')
            ->groupBy('modulo.modulo_id')
            ->get();
        foreach ($rol_modulos as $key => $modulo) {
            $modulo->sub_modulos = DB::table('rol_sub_modulo')
                ->select('sub_modulo.*')
                ->join('sub_modulo', 'sub_modulo.sub_modulo_id', 'rol_sub_modulo.sub_modulo_id')
                ->where('rol_sub_modulo.rol_modulo_id', $modulo->rol_modulo_id)
                ->get();
        }
        return [];
    }
}
