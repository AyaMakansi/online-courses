<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seedCatitems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catitems')->insert([
           
            'name_en' => 'PHP',
            'name_ar' => 'بي أتش بي',
            'image' =>'\php.jpg',
           
            'category_id' =>'1'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'C++',
            'name_ar' => 'سي بلس بلس',
            'image' =>'\cplus.png',
            
            'category_id' =>'1'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'HTML',
            'name_ar' => 'لغة توصيف النص الفائق',
            'image' =>'\html.jpg',
            
            'category_id' =>'1'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Photoshop',
            'name_ar' => 'فوتوشوب',
            'image' =>'\photoshop.jpg',
           
            'category_id' =>'2'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Illustrator',
            'name_ar' => 'إليستريتور',
            'image' =>'\Ai.jpg',
           
            'category_id' =>'2'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'AutoCAD',
            'name_ar' => 'أوتوكاد',
            'image' =>'\autocad.jpg',
           
            'category_id' =>'2'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'English',
            'name_ar' => 'اللغة الإنكليزية',
            'image' =>'\English.jpg',
           
            'category_id' =>'3'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Franch',
            'name_ar' => 'اللغة الفرنسية',
            'image' =>'\franch.jpg',
            
            'category_id' =>'3'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Arabic',
            'name_ar' => 'اللغة العربية',
            'image' =>'\Arabic.jpg',
           
            'category_id' =>'3'

        ]);
         DB::table('catitems')->insert([
           
            'name_en' => 'Peer To Peer',
            'name_ar' => 'الند للند',
            'image' =>'\p2p.jpg',
           
            'category_id' =>'4'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Network Security',
            'name_ar' => 'أمن الشبكات',
            'image' =>'\networksecurity.jpg',
            
            'category_id' =>'5'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Application Security',
            'name_ar' => 'أمن التطبيقات',
            'image' =>'\Mobile-Security.jpg',
           
            'category_id' =>'5'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'ORACLE',
            'name_ar' => 'أوراكل',
            'image' =>'\oracle.png',
         
            'category_id' =>'6'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Linux',
            'name_ar' => 'لينوكس',
            'image' =>'\linux-os.jpg',
            
            'category_id' =>'7'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'Mac',
            'name_ar' => 'ماكنتوش',
            'image' =>'\mac.jpg',
            
            'category_id' =>'7'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'MySQL',
            'name_ar' => 'MySQL',
            'image' =>'\mysql.jpg',
            
            'category_id' =>'6'

        ]);
        DB::table('catitems')->insert([
           
            'name_en' => 'WordPress',
            'name_ar' => 'ووردبريس',
            'image' =>'\wordpress.jpg',
           
            'category_id' =>'8'

        ]);
    }
}
