<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-09T16:05:34+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-14T10:52:17+07:00
# @Copyright: Onemax.ltd.co


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('TestsTableSeeder');
    }
}
