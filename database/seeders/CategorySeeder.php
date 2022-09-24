<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $categories = [
            [
                'id' => 1,
                'title' =>  "Web Development",
                'slug' =>  \Str::slug("Web Development"),
                'description' => "Webside description",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'id' => 2,
                'title' =>  "App Development",
                'slug' =>  \Str::slug("App Development"),
                'description' => "App description",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
