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
                'email' => 'sdn108gresik@admin.com',
                'level' => 'admin',
                'password' =>bcrypt('12345678'),
            ],
            
        ];
            \DB::table('users')->insert($users);
    }
}
