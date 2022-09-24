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
            ],
            [
                'id' => 3,
                'title' =>  "Data",
                'slug' =>  \Str::slug("Data"),
                'description' => "Data",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                'id' => 4,
                'title' =>  "Clude",
                'slug' =>  \Str::slug("Clude"),
                'description' => "Clude",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                'id' => 5,
                'title' =>  "Network",
                'slug' =>  \Str::slug("Network"),
                'description' => "Network",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                'id' => 6,
                'title' =>  "Security",
                'slug' =>  \Str::slug("Security"),
                'description' => "Security",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                'id' => 7,
                'title' =>  "Game Development",
                'slug' =>  \Str::slug("Game Development"),
                'description' => "Game Development",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                'id' => 8,
                'title' =>  "Bussiness",
                'slug' =>  \Str::slug("Bussiness"),
                'description' => "Bussiness",
                "is_active" => true,
                "created_at" => $now,
                "updated_at" => $now
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
