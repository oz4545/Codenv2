<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Form;
use App\Models\User; // Importar el modelo User

class FormSeeder extends Seeder
{
    public function run()
    {
         // Crear un usuario si no existe

        $user = User::firstOrCreate(
            ['correo' => 'usuario@ejemplo.com'],
            [
                'nombre' => 'Jonh',
                'apellido' => 'Doe',
                'contraseña' => bcrypt('contraseña'), // Usa bcrypt para encriptar la contraseña
            ]
        );

        // Asumiendo que tienes un usuario con id 1
        $usuarioId = User::first()->id;

        Form::create([
            'nombre' => 'Formulario 1',
            'nivel' => 1, // Asumiendo que tienes un nivel con id 1
            'descripcion' => 'Este es el primer formulario de prueba',
            'completado' => false,
            'usuario_id' => $usuarioId, // Asignar el usuario_id
        ]);
    }
}
