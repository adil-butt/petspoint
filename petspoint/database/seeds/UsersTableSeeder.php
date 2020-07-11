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
       $users=array(
			array(
				'name'=>'admin',
				'password'=>encrypt('admin')
			)
		);
		DB::table('users')->insert($users);
    }
}
