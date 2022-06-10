<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'category' => 'Кино',
            'category_slug' => 'movie'
        ]);

        DB::table('categories')->insert([
            'id' => '2',
            'category' => 'Музыка',
            'category_slug' => 'music'
        ]);

        DB::table('categories')->insert([
            'id' => '3',
            'category' => 'Игры',
            'category_slug' => 'games'
        ]);

        DB::table('categories')->insert([
            'id' => '4',
            'category' => 'Авто',
            'category_slug' => 'auto'
        ]);

        DB::table('categories')->insert([
            'id' => '5',
            'category' => 'Общество',
            'category_slug' => 'society'
        ]);

        DB::table('categories')->insert([
            'id' => '6',
            'category' => 'Здоровье',
            'category_slug' => 'health'
        ]);
    }
}
