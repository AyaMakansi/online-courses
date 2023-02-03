<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seedQuestions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
           
            'question' => 'whats your name?',
            'a' =>'aya',
            'b' =>'alaa',
            'c'=>'osama',
            'd'=>'ali',
            'anscorrect'=>'aya',
            'ans'=>'',
            'quiz_id'=>'2'
        ]);
        DB::table('questions')->insert([
           
            'question' => 'whats your name?',
            'a' =>'aya',
            'b' =>'alaa',
            'c'=>'osama',
            'd'=>'ali',
            'ans'=>'aya',
            'quiz_id'=>'2'
        ]);
        DB::table('questions')->insert([
           
            'question' => 'whats your name?',
            'a' =>'aya',
            'b' =>'alaa',
            'c'=>'osama',
            'd'=>'ali',
            'ans'=>'aya',
            'quiz_id'=>'2'
        ]);

    }
}
