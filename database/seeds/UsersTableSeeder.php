<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-14T10:13:06+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-14T10:54:29+07:00
# @Copyright: Onemax.ltd.co
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'chidungdekiemtra@gmail.com',
            'password' => app('hash')->make('password'),
        ]);
    }
}
