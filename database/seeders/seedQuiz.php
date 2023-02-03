<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seedQuiz extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\php.png',
            'item_id' =>'1',
            

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\c-.png',
            'item_id' =>'2',
          

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\code (1).png',
            'item_id' =>'3',
           

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\adobe-photoshop.png',
            'item_id' =>'4',
           

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\illustrator.png',
            'item_id' =>'5',
           
        ]);

          DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\autocad-icon-28.jpg',
            'item_id' =>'6',
          

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\understanding.png',
            'item_id' =>'7',
        
        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\franc.png',
            'item_id' =>'8',
          

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\arabic (1).png',
            'item_id' =>'9',
            

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\network.png',
            'item_id' =>'10',
       

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\cyber-security (1).png',
            'item_id' =>'11',
         

        ]);
        DB::table('quizzes')->insert([
           
            'name' => '',
            'icon' =>'\mobile-security.png',
            'item_id' =>'12',
           

        ]);
    }
}
