<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-14T10:13:06+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-14T10:20:47+07:00
# @Copyright: Onemax.ltd.co
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TestsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tests')->insert([
            'title' => 'Title: ' . str_random(10),
            'description' => 'Description :' .str_random(100),
        ]);
        DB::table('tests')->insert([
            'title' => 'Title: ' . str_random(10),
            'description' => 'Description :' .str_random(100),
        ]);
        DB::table('tests')->insert([
            'title' => 'Title: ' . str_random(10),
            'description' => 'Description :' .str_random(100),
        ]);
        DB::table('tests')->insert([
            'title' => 'Title: ' . str_random(10),
            'description' => 'Description :' .str_random(100),
        ]);
        DB::table('tests')->insert([
            'title' => 'Title: ' . str_random(10),
            'description' => 'Description :' .str_random(100),
        ]);
    }
}
