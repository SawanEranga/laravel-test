<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
           [
               'id' => 1,
               'name' => 'Support Agent 1',
               'email' => 'supportagent@test.com',
               'password' => bcrypt('WB5m3Gr85j)ew&')
           ]
        ]);
    }
}
