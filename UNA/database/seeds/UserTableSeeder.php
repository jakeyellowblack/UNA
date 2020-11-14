<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
		$user->name = "Jon";
		$user->code = 12345678;
		$user->status = "1";
		$user->jobtitle = "Programador";
		$user->password = bcrypt('12345');
		$user->save();
		
		$user = new User();
		$user->name = "Rafa";
		$user->code = 12345679;
		$user->status = "1";
		$user->jobtitle = "Programador";
		$user->password = bcrypt('12345');
		$user->save();

		Role::create([
			'name' => 'Supervisor',
			'slug' => 'supervisor',
			'special' => 'all-access'
		]);

		Role::create([
			'name' => 'Analista',
			'slug' => 'analista',
			'special' => 'no-access'
		]);

		Role::create([
			'name' => 'Analista Externo',
			'slug' => 'analista_externo',
			'special' => 'no-access'
		]);
    }
}
