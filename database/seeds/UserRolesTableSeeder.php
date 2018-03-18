<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
        	[
        		'role_name'		=> 	'admin',
        		'description'	=>	'Pemegang seluruh kendali dalam sistem',
        		'created_at'	=>	date('Y-m-d H:i:s'),
        		'updated_at'	=>	date('Y-m-d H:i:s'),
        	],
        	[
        		'role_name'		=> 	'ppic',
        		'description'	=>	'Pengelola sistem',
        		'created_at'	=>	date('Y-m-d H:i:s'),
        		'updated_at'	=>	date('Y-m-d H:i:s'),
        	]
        ]);

        // with faker factory
        // factory(App\UserRole::class, 10)->create();	
    }
}
