<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AdminsTableSeeder::class,
            AsanaTypesTableSeeder::class,
            AsanaSubTypesTableSeeder::class,
            CategoriesTableSeeder::class,
        	LevelsTableSeeder::class,
        	TeachersTableSeeder::class,
            ArticleTopicsTableSeeder::class,
            ArticlesTableSeeder::class,
            WallpaperCategoriesTableSeeder::class,
            LessonsTableSeeder::class,
            ProgramsTableSeeder::class,
            CoursesTableSeeder::class,
            WallpapersTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
