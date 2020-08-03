<?php

use Illuminate\Database\Seeder;
use App\User;

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
		$user->code = 1234;
		$user->status = "Activo";
		$user->jobtitle = "Programador";
		$user->password = bcrypt('12345');
		$user->save();
		
		$user = new User();
		$user->name = "Rafa";
		$user->code = 12345;
		$user->status = "Activo";
		$user->jobtitle = "Programador";
		$user->password = bcrypt('12345');
		$user->save();
    }
}
