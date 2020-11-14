<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
        	'name' 			=> 'Navegar usuarios',
        	'slug' 			=> 'users.index',
        	'description'   => 'Lista de usuarios'
        ]);

        Permission::create([
            'name'          => 'Crear usuarios',
            'slug'          => 'users.create',
            'description'   => 'Crear usuarios'
        ]);

        Permission::create([
            'name'          => 'Almacenar usuarios',
            'slug'          => 'users.store',
            'description'   => 'Almacenar usuarios'
        ]);

        Permission::create([
        	'name' 			=> 'Editar usuarios',
        	'slug' 			=> 'users.edit',
        	'description'   => 'Editar usuarios'
        ]);

        Permission::create([
            'name'          => 'Actualizar usuarios',
            'slug'          => 'users.update',
            'description'   => 'Actualizar usuarios'
        ]);
        
        Permission::create([
        	'name' 			=> 'Eliminar usuarios',
        	'slug' 			=> 'users.destroy',
        	'description'   => 'Eliminar usuarios'
        ]);
      
        //Cuenta
        Permission::create([
        	'name' 			=> 'Navegar cuentas',
        	'slug' 			=> 'cuenta.index',
        	'description'   => 'Lista de cuentas'
        ]);

        Permission::create([
            'name'          => 'Crear cuentas',
            'slug'          => 'cuenta.create',
            'description'   => 'Crear cuentas'
        ]);

        Permission::create([
            'name'          => 'Almacena cuentas',
            'slug'          => 'cuenta.store',
            'description'   => 'Almacena cuentas'
        ]);

        Permission::create([
            'name'          => 'Mostrar cuentas',
            'slug'          => 'cuenta.show',
            'description'   => 'Mostrar cuentas'
        ]);

        Permission::create([
        	'name' 			=> 'Editar cuentas',
        	'slug' 			=> 'cuenta.edit',
        	'description'   => 'Editar cuentas'
        ]);

        Permission::create([
            'name'          => 'Actualizar cuentas',
            'slug'          => 'cuenta.update',
            'description'   => 'Actualizar cuentas'
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar cuentas',
        	'slug' 			=> 'cuenta.destroy',
        	'description'   => 'Eliminar cuentas'
        ]);

        //Cuenta Export

        Permission::create([
            'name'          => 'Exportar cuentas',
            'slug'          => 'cuenta.cuenta',
            'description'   => 'Exportar cuentas'
        ]);

        //Reformulacion
        Permission::create([
        	'name' 			=> 'Navegar reformulacion',
        	'slug' 			=> 'reformulacion.index',
        	'description'   => 'Lista de reformulacion'
        ]);

        Permission::create([
            'name'          => 'Crear reformulacion',
            'slug'          => 'reformulacion.create',
            'description'   => 'Crear reformulacion'
        ]);

        Permission::create([
            'name'          => 'Almacena reformulacion',
            'slug'          => 'reformulacion.store',
            'description'   => 'Almacena reformulacion'
        ]);

        Permission::create([
        	'name' 			=> 'Editar reformulacion',
        	'slug' 			=> 'reformulacion.edit',
        	'description'   => 'Editar reformulacion'
        ]);
        
        Permission::create([
            'name'          => 'Actualizar reformulacion',
            'slug'          => 'reformulacion.update',
            'description'   => 'Actualizar reformulacion'
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar reformulacion',
        	'slug' 			=> 'reformulacion.destroy',
        	'description'   => 'Eliminar reformulacion'
        ]);       

        //Movimiento Reformulación        
        Permission::create([
            'name'          => 'Mostrar movimientos de reformulacion',
            'slug'          => 'reformulacion.movimiento',
            'description'   => 'Mostrar movimientos de reformulacion'
        ]);

        Permission::create([
            'name'          => 'Actualiza movimientos de reformulacion',
            'slug'          => 'refmovimiento.update',
            'description'   => 'Actualiza movimientos de reformulacion'
        ]);

        Permission::create([
            'name'          => 'Eliminar movimientos de reformulacion',
            'slug'          => 'refmovimiento.destroy',
            'description'   => 'Eliminar movimientos de reformulacion'
        ]);


        //Presupuesto
        Permission::create([
        	'name' 			=> 'Navegar presupuesto',
        	'slug' 			=> 'presupuesto.index',
        	'description'   => 'Lista de presupuesto'
        ]);

        Permission::create([
        	'name' 			=> 'Editar presupuesto',
        	'slug' 			=> 'presupuesto.edit',
        	'description'   => 'Editar presupuesto'
        ]);

        Permission::create([
        	'name' 			=> 'Almacena presupuesto',
        	'slug' 			=> 'presupuesto.store',
        	'description'   => 'Almacena presupuesto'
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar presupuesto',
        	'slug' 			=> 'presupuesto.destroy',
        	'description'   => 'Eliminar presupuesto'
        ]);

        Permission::create([
            'name'          => 'Ver presupuesto',
            'slug'          => 'presupuesto.show',
            'description'   => 'Ver presupuesto'
        ]);

        Permission::create([
        	'name' 			=> 'Actualizar presupuesto',
        	'slug' 			=> 'presupuesto.update',
        	'description'   => 'Actualizar presupuesto'
        ]);

        Permission::create([
        	'name' 			=> 'Crear presupuesto',
        	'slug' 			=> 'presupuesto.create',
        	'description'   => 'Crear presupuesto'
        ]);

        //Presupuesto Export e Import

        Permission::create([
            'name'          => 'Exportar presupuesto',
            'slug'          => 'presupuesto.presupuesto',
            'description'   => 'Exportar presupuesto'
        ]);

        Permission::create([
            'name'          => 'Importar presupuesto',
            'slug'          => 'presupuesto.import',
            'description'   => 'Importar presupuesto'
        ]);

        //Nomina
        Permission::create([
        	'name' 			=> 'Navegar nomina',
        	'slug' 			=> 'nomina.index',
        	'description'   => 'Lista de nomina'
        ]);

        Permission::create([
        	'name' 			=> 'Editar nomina',
        	'slug' 			=> 'nomina.edit',
        	'description'   => 'Editar nomina'
        ]);

        Permission::create([
        	'name' 			=> 'Almacenar nomina',
        	'slug' 			=> 'nomina.store',
        	'description'   => 'Almacenar nomina'
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar nomina',
        	'slug' 			=> 'nomina.destroy',
        	'description'   => 'Eliminar nomina'
        ]);

        Permission::create([
        	'name' 			=> 'Actualizar nomina',
        	'slug' 			=> 'nomina.update',
        	'description'   => 'Actualizar nomina'
        ]);

        Permission::create([
        	'name' 			=> 'Crear nomina',
        	'slug' 			=> 'nomina.create',
        	'description'   => 'Crear nomina'
        ]);

        //Nomina Import & Export

        Permission::create([
            'name'          => 'Exportar nomina',
            'slug'          => 'nomina.nomina',
            'description'   => 'Exportar nomina'
        ]);

        Permission::create([
            'name'          => 'Importar nomina',
            'slug'          => 'nomina.import',
            'description'   => 'Importar nomina'
        ]);

        //Movimiento de Nomina        
        Permission::create([
            'name'          => 'Mostrar movimientos de nomina',
            'slug'          => 'nomina.movimiento',
            'description'   => 'Mostrar movimientos de nomina'
        ]);

        Permission::create([
            'name'          => 'Actualiza movimientos de nomina',
            'slug'          => 'nomovimiento.update',
            'description'   => 'Actualiza movimientos de nomina'
        ]);

        Permission::create([
            'name'          => 'Eliminar movimientos de nomina',
            'slug'          => 'nomovimiento.destroy',
            'description'   => 'Eliminar movimientos de nomina'
        ]);



    }
}
