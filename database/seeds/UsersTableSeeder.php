<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  =>'ritz',
            'type'  =>"1",
            'google'=>'W7C52VAJFGHJGM6B',
            'email' => Str::random(10).'@gmail.com',
            'password'=> bcrypt('123qwe'),
            'status'=> '1',

        ]);
    }
}
