<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       
        $this->call([
            seedCategories::class,
            seedCatitems::class,
           
            seedItemCourses::class,
            seedVideos::class,
           // seedUser::class,
            seedQuiz::class,
            seedLesson::class,
        ]);
    }
}
