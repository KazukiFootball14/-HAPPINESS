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
            'dog_name' => 'イヌの名前',
            'kind_id' => 1,
            'dog_gender' => 'イヌの性別',
            'dog_age' => 10,
            'prefecture_id' => 1,
            'dog_condition' => 'イヌの体調',
            'terms' => '譲渡条件',
            'fee' => '譲渡費用',
            'message' => 'メッセージ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
