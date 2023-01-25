<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name' => 'UPT SD Negeri 108 Gresik',
                'email' => 'sdnegeri108gresik@gmail.com',
                'level' => 'admin',
                'password' =>bcrypt('Sijago108'),
            ],
            
        ];
            \DB::table('users')->insert($users);
    }
}
