<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("images")->insert([
            "path" => asset("/img_afa0fad37e6c4d5ce34c01faf54f9e79108563.jpg"),
            "recruitment_id" => 1,
            ]);
    }
}
