<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//---------------------- ROLES ---------------------------

		$role1 = Role::create(['name' => 'Administrador']);
		$role2 = Role::create(['name' => 'Secretaria']);

		//---------------------- PERMISOS ---------------------------
		// ----------------------- Usuarios ---------------------------
		Permission::create([
			'name' => 'users.index',
			'description' => 'Ver listado de usuarios'
		])->syncRoles([$role1]);

		Permission::create([
			'name' => 'users.create',
			'description' => 'Registrar nuevos usuarios'
		])->syncRoles([$role1]);

		Permission::create([
			'name' => 'users.edit',
			'description' => 'Asignar roles a los usuarios'
		])->syncRoles([$role1]);

		Permission::create([
			'name' => 'users.destroy',
			'description' => 'Eliminar usuarios'
		])->syncRoles([$role1]);


		// ----------------------- Roles ----------------------------
		Permission::create([
			'name' => 'roles.index',
			'description' => 'Ver lista de roles'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'roles.create',
			'description' => 'Crear nuevos roles'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'roles.edit',
			'description' => 'Editar roles'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'roles.destroy',
			'description' => 'Eliminar roles'])
		->syncRoles([$role1]);

		// ----------------------- Certificados ----------------------------
		Permission::create([
			'name' => 'certificates.index',
			'description' => 'Ver lista de certificados'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'certificates.create',
			'description' => 'Crear nuevos certificados'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'certificates.edit',
			'description' => 'Editar certificados'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'certificates.destroy',
			'description' => 'Eliminar certificados'])
		->syncRoles([$role1]);


		// ----------------------- Capillas ----------------------------
		Permission::create([
			'name' => 'chapels.index',
			'description' => 'Ver lista de capillas'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'chapels.create',
			'description' => 'Crear nuevas capillas'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'chapels.edit',
			'description' => 'Editar capillas'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'chapels.destroy',
			'description' => 'Eliminar capillas'])
		->syncRoles([$role1]);


		// ----------------------- Párrocos ----------------------------
		Permission::create([
			'name' => 'parishpriests.index',
			'description' => 'Ver lista de párrocos'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'parishpriests.create',
			'description' => 'Crear nuevos párrocos'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'parishpriests.edit',
			'description' => 'Editar párrocos'])
		->syncRoles([$role1]);

		Permission::create([
			'name' => 'parishpriests.destroy',
			'description' => 'Eliminar párrocos'])
		->syncRoles([$role1]);
		
		// ----------------------- Matrimonios ----------------------------
		Permission::create([
			'name' => 'marriages.index',
			'description' => 'Ver listado matrimonios'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'marriages.create',
			'description' => 'Crear registros de matrimonios'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'marriages.edit',
			'description' => 'Actualizar registros de matrimonios'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'marriages.destroy',
			'description' => 'Eliminar registros de matrimonios'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'marriages.show',
			'description' => 'Mostrar registros de matrimonios'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'marriages.export',
			'description' => 'Exportar registros de matrimonios'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'marriages.import',
			'description' => 'Importar registros de matrimonios'
		])->syncRoles([$role1, $role2]);

		// ----------------------- Confirmaciones ----------------------------
		Permission::create([
			'name' => 'confirmations.index',
			'description' => 'Ver listado de las confirmaciones'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'confirmations.create',
			'description' => 'Crear registros de confirmaciones'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'confirmations.edit',
			'description' => 'Actualizar registros de confirmaciones'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'confirmations.destroy',
			'description' => 'Eliminar registros de confirmaciones'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'confirmations.show',
			'description' => 'Mostrar registros de confirmaciones'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'confirmations.export',
			'description' => 'Exportar registros de confirmaciones'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'confirmations.import',
			'description' => 'Importar registros de confirmaciones'
		])->syncRoles([$role1, $role2]);

		// ----------------------- Bautizos ----------------------------
		Permission::create([
			'name' => 'baptisms.index',
			'description' => 'Ver listado de los bautizos'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'baptisms.create',
			'description' => 'Crear registros de bautizos'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'baptisms.edit',
			'description' => 'Actualizar registros de bautizos'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'baptisms.destroy',
			'description' => 'Eliminar registros de bautizos'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'baptisms.show',
			'description' => 'Mostrar registros de bautizos'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'baptisms.export',
			'description' => 'Exportar registros de bautizos'
		])->syncRoles([$role1, $role2]);

		Permission::create([
			'name' => 'baptisms.import',
			'description' => 'Importar registros de bautizos'
		])->syncRoles([$role1, $role2]);
    }
}
