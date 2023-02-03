<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seedItemCourses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itemcourses')->insert([
           
            'name' => 'Laravel 5.5',
            'item_id' =>'1',
           
            'image' =>'/laravel.png',
            
            'number' => '48',
            'time' =>'09:26:52',]);

            DB::table('itemcourses')->insert([
           
                'name' => 'php oop',
                'item_id' =>'1',
               
                'image' =>'/laravel1.jpg',
                'number' => '24',
                'time' =>'03:36:26',]);
   
                DB::table('itemcourses')->insert([
           
                    'name' => 'Laravel 5.2 Form scratch',
                    'item_id' =>'1',
                    
                    'image' =>'/laravel2.jpeg',
                    'number' => '15',
                    'time' =>'02:07:55',]);

                    DB::table('itemcourses')->insert([
           
                        'name' => 'Basic HTML',
                        'item_id' =>'3',
                        
                        'image' =>'/html (1).jpg',
                        'number' => '11',
                        'time' =>'02:00:00',]);

                }

}
