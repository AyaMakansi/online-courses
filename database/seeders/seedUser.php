<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('users')->insert([
           
            'name' => 'admin',
            
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ]);*/
    }
}
