<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Books::factory()->count(10)->create();
        // ->each(function ($u) {
            // $u->posts()->save(factory(App\Post::class)->make());
        // });

    }
}
