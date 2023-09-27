<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruitments')->insert([
            'user_id' => 1,
            'dog_name' => '一輝',
            'kind_id' => 3,
            'dog_gender' => '一輝',
            'dog_age' => 10,
            'prefecture_id' => 1,
            'dog_condition' => '一輝',
            'terms' => '一輝',
            'fee' => '一輝',
            'message' => '一輝',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
