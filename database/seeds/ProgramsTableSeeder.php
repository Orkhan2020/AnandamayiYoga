<?php

use Illuminate\Database\Seeder;
use App\Program;

class ProgramsTableSeeder extends Seeder
{
    public function run()
    {
        Program::create([
            'slug' => str_slug('The 14-day Yoga Body Challenge'), 
            'name' => 'The 14-day Yoga Body Challenge', 
            'name_pt' => 'O Desafio de 14-dias para o Corpo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'description_pt' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_path' => 'app/demo/covers/demo-1.jpg',
            'video_path' => 'app/demo/videos/demo-lesson.mp4',
            'teacher_id' => 1,
            'published' => now()
        ]);

        \DB::insert('insert into category_program (program_id, category_id) values (1, 9), (1, 5), (1, 6), (1, 8)');

        Program::create([
            'slug' => str_slug('12-day Functional Yoga Training'), 
            'name' => '12-day Functional Yoga Training', 
            'name_pt' => '12 dia de Treinamento em Yoga Funcional',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'description_pt' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_path' => 'app/demo/covers/demo-2.jpg',
            'video_path' => 'app/demo/videos/demo-lesson.mp4',
            'teacher_id' => 2,
            'published' => now()
        ]);

        \DB::insert('insert into category_program (program_id, category_id) values (2, 1), (2, 5)');

        Program::create([
            'slug' => str_slug('Introduction to the History of Yoga'), 
            'name' => 'Introduction to the History of Yoga', 
            'name_pt' => 'Introdução à História do Yoga',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'description_pt' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_path' => 'app/demo/covers/demo-4.jpg',
            'video_path' => 'app/demo/videos/demo-lesson.mp4',
            'teacher_id' => 1,
            'published' => now()
        ]);

        \DB::insert('insert into category_program (program_id, category_id) values (4, 10), (4, 5), (4, 3), (4, 11)');

        Program::create([
            'slug' => str_slug('Moving Meditations'), 
            'name' => 'Moving Meditations', 
            'name_pt' => 'Meditações em Movimento',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'description_pt' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_path' => 'app/demo/covers/demo-5.jpg',
            'video_path' => 'app/demo/videos/demo-lesson.mp4',
            'teacher_id' => 1,
            'published' => now()
        ]);

        \DB::insert('insert into category_program (program_id, category_id) values (5, 1), (5, 5), (5, 2)');
    }
}
