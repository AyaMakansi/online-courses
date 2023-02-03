<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class seedCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           
            'name_en' => 'Programming',
            'name_ar' => 'البرمجة',
            'image' =>'\Coding.jpg',
            'icon' =>'\code.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Design',
            'name_ar' => 'التصميم',
            'image' =>'\Design.jpg',
            'icon' =>'\brush.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Languages',
            'name_ar' => 'اللغات',
            'image' =>'\Languages1.jpg',
            'icon' =>'\customer-service.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Computer Networks',
            'name_ar' => 'شبكات حاسوبية',
            'image' =>'\networks1.jpg',
            'icon' =>'\cloud-service.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Information Security',
            'name_ar' => 'أمن المعلومات',
            'image' =>'\informationsecurity.jpg',
            'icon' =>'\shield.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Database',
            'name_ar' => 'قواعد بيانات',
            'image' =>'\database.jpg',
            'icon' =>'\database.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Operating Systems',
            'name_ar' => 'أنظمة التشغيل',
            'image' =>'\opeartingsystem.jpg',
            'icon' =>'\windows.png'
        ]);
        DB::table('categories')->insert([
           
            'name_en' => 'Web development',
            'name_ar' => 'تطوير الويب',
            'image' =>'\web-development.jpg',
            'icon' =>'\automation.png'
        ]);
       

    }
}
