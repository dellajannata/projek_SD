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
                'email' => 'uptsdn108gresik@sdn108gresik.sc.id',
                'level' => 'admin',
                'password' =>bcrypt('Sijago108'),
            ],
            
        ];
            \DB::table('users')->insert($users);
    }
}
