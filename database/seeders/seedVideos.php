<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seedVideos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('videos')->insert([
           
            'name_en' => 'Lesson 1',
            'name_ar' => 'الدرس الأول',
            'course_id'=>'4',
            'video'=>'/HTML1.mp4',
            'description_en' =>'Introduction to the html language and what it requires to learn and the difference between html, html5, xhtml .',
            'description_ar' =>'مقدمة عن لغة html وما تتطلبه للتعلم والفرق بين html و html5 و xhtml.',
        ]);
        DB::table('videos')->insert([
           
            'name_en' => 'Lesson 2',
            'name_ar' => 'الدرس الثاني',
            'course_id'=>'4',
            'video'=>'/HTML2.mp4',
            'description_en' =>'How to create an html file and put a title for it .',
            'description_ar'=>'كيفية إنشاء الملف ووضع عنوان له'
        ]);
        DB::table('videos')->insert([
           
            'name_en' => 'Lesson 3',
            'name_ar' => 'الدرس الثالث',
            'course_id'=>'4',
            'video'=>'/HTML3.mp4',
            'description_en' =>'How to print text and change colors . ',
            'description_ar' =>'كيفية طباعة النص وتغيير الألوان',
        ]);
        DB::table('videos')->insert([
           
            'name_en' => 'Lesson 4',
            'name_ar' => 'الدرس الرابع',
            'course_id'=>'4',
            'video'=>'/HTML4.mp4',
            'description_en' =>'Explanation of the properties of width,hieght,border . ',
            'description_ar'=>'شرح خصائص العرض والارتفاع والحد',
        ]);
        DB::table('videos')->insert([
           
            'name_en' => 'Lesson 5',
            'name_ar' => 'الدرس الخامس',
            'course_id'=>'4',
            'video'=>'/HTML5.mp4',
            'description_en' =>'Explanation of the properties of padding,margin,border . ',
            'description_ar'=>'شرح خصائص الحشو والهامش والحدود',
        ]);
    

    }
}
