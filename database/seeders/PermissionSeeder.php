<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           //Dashboard
           Permission::create([
            'name'=>'Ver dashboard'
        ]);
        //Clientes
        Permission::create([
            'name'=>'Listar '
        ]);
        Permission::create([
            'name'=>'Crear '
        ]);
        Permission::create([
            'name'=>'Editar '
        ]);
        Permission::create([
            'name'=>'Eliminar '
        ]);
        //Productos
        Permission::create([
            'name'=>'Listar pelicula'
        ]);
        Permission::create([
            'name'=>'Crear pelicula'
        ]);
        Permission::create([
            'name'=>'Editar pelicula'
        ]);
        Permission::create([
            'name'=>'Eliminar pelicula'
        ]);

    }
}
