<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seedLesson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([

        'video'=>'/HTML1.mp4',
        'video_id'=>'1']);
        DB::table('lessons')->insert([

            'video'=>'/HTML2.mp4',
            'video_id'=>'2']);
         DB::table('lessons')->insert([

                'video'=>'/HTML3.mp4',
                'video_id'=>'3']);
        DB::table('lessons')->insert([

             'video'=>'/HTML4.mp4',
             'video_id'=>'4']);
    }
}
