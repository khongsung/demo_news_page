<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ks01_users')->insert([
        	/*[
	            'username' => 'supper admin',
	            'password' => bcrypt('123456'),
	            'level' => 0,
	            'created_at' => new DateTime(),
        	],*/

        	[
	            'username' => 'admin1',
	            'password' => bcrypt('123456'),
	            'level' => 1,
	            'created_at' => new DateTime(),
        	],

        	[
	            'username' => 'admin2',
	            'password' => bcrypt('123456'),
	            'level' => 1,
	            'created_at' => new DateTime(),
        	],

        	[
	            'username' => 'member',
	            'password' => bcrypt('123456'),
	            'level' => 2,
	            'created_at' => new DateTime(),
        	]
        ]);
    }
}
