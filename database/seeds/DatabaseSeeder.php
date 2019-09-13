<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'name'=> 'admin',
        	'email' => 'ccc@mail.ru',
        	'password' => bcrypt('cccccccc'),
            
        ]);

        DB::table('posts')->insert([
            'id'=> 1,
            'title'=>'Генное редактирование изменит мир быстрее, чем мы думаем',
            'content'=>'https://hightech.fm/wp-content/uploads/2018/11/45807.jpg',
            'description' => NULL,
            'slug'=>'gennoe-redaktirovanie-izmenit-mir-bistree-chem-mi-dumaem_1',
            'author'=> 1,
        ]);

        DB::table('posts')->insert([
            'id'=> 2,
            'title'=>'billboard',
            'content'=>'https://i.kinja-img.com/gawker-media/image/upload/lufkpltdkvtxt9kzwn9u.jpg',
            'description' => NULL,
            'slug'=>'billboard_2',
            'author'=> 1,
        ]);
    }
}
